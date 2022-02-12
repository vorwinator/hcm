<?php
    class purchased_services_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        // public function get_services(){// wyciaganie wszystkich informacji z services
        //     $query=$this->db->get('services');
        //     return $query->result_array();
        // }
        public function set_purchased_service()//dodanie zakupionej usługi
		{
			$data = array(
				'id_service' => $_SESSION['id_service'],
				'id_client' => $_SESSION['id_client'],
				'service_start_date' => $this->input->post('service_start_date'),
				'service_end_date' => $this->input->post('service_end_date'),
				'price' => $this->input->post('price'),
				'payment_date' => $this->input->post('payment_date'),
				'payment_deadline' => $this->input->post('payment_deadline')
			);

			return $this->db->insert('purchased_services', $data);
		}
        public function get_clients_by_service_id($id)
        {
            $this->db->select('*');
            $this->db->from('purchased_services'); 
            $this->db->join('services', 'services.id_service=purchased_services.id_service', 'left');
            $this->db->join('clients', 'clients.id_client=purchased_services.id_client', 'left');
            $this->db->where('purchased_services.id_service',$id);
            // $this->db->select('clients.id_client, clients.email, clients.name, clients,localisation, clients.NIP, clients.phone_number, clients.id_manager');
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
        public function get_purchased_services(){
            $query=$this->db->query("SELECT ps.id_pur_serv, s.*, s.name AS name_s, c.name AS name_c FROM purchased_services ps JOIN services s on ps.id_service = s.id_service JOIN clients c on ps.id_client = c.id_client");
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
        public function get_purchased_services_by_pur_serv_id($id){
            $sql="SELECT ps.*, ps.price AS price_ps, s.*, s.name AS name_s, c.name AS name_c FROM purchased_services ps JOIN services s on ps.id_service = s.id_service JOIN clients c on ps.id_client = c.id_client WHERE ps.id_pur_serv = ?";
            $query=$this->db->query($sql, $id);
            if($query->num_rows() != 0)
            {
                return $query->row_array();
            }
            else
            {
                return false;
            }
        }
        public function purchased_services_closes_payment_deadline_by_client_id($id){
            $time=date('Y-m-d');
            $this->db->where('id_client', $id);
            $this->db->where('payment_deadline >', $time);
            $this->db->select_min('payment_deadline');
            $query=$this->db->get('purchased_services');
            return $query->row_array();
        }
        public function purchased_services_payment_per_month_by_client_id($id){
            $time=date('Y-m-d');
            $this->db->from('purchased_services');
            $this->db->join('services', 'services.id_service=purchased_services.id_service');
            $this->db->where('purchased_services.id_client', $id);
            $this->db->where('purchased_services.payment_deadline >', $time);
            $this->db->where('services.price_type', 'miesiąc');
            $this->db->select_sum('purchased_services.price','payment_per_month');
            $query=$this->db->get();
            return $query->row_array();
        }
        public function purchased_services_payment_per_year_by_client_id($id){
            $time=date('Y-m-d');
            $this->db->from('purchased_services');
            $this->db->join('services', 'services.id_service=purchased_services.id_service');
            $this->db->where('purchased_services.id_client', $id);
            $this->db->where('purchased_services.payment_deadline >', $time);
            $this->db->where('services.price_type', 'rok');
            $this->db->select_sum('purchased_services.price','payment_per_year');
            $query=$this->db->get();
            return $query->row_array();
        }
        public function purchased_services_by_client_id($id)
        {
            $this->db->select('*');
            $this->db->from('purchased_services');
            $this->db->join('services', 'services.id_service=purchased_services.id_service','inner');
            $this->db->where('purchased_services.id_client', $id);
            // $this->db->select('purchased_services.id_pur_serv','services.*');
            $query=$this->db->get();
            return $query->result_array();
        }
        public function delete_purchased_service($id){
            $this->db->where('id_pur_serv',$id);
            $this->db->delete('purchased_services');
        }
        public function update_purchased_service(){
            $data = array(
				'service_start_date' => $this->input->post('service_start_date'),
				'service_end_date' => $this->input->post('service_end_date'),
				'price' => $this->input->post('price'),
				'payment_date' => $this->input->post('payment_date'),
				'payment_deadline' => $this->input->post('payment_deadline')
			);

            $this->db->set($data);

            $this->db->where('id_pur_serv', $this->input->post('id_pur_serv'));
            $this->db->update('purchased_services');
        }
    }

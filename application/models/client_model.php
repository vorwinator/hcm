<?php
    class Client_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function get_clients(){// wyciaganie wszystkich informacji z clients
            $query=$this->db->get('clients');
            return $query->result_array();
        }
        public function set_client()//dodanie nowego klienta
		{
			$data = array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'localisation' => $this->input->post('adress'),
				'NIP' => $this->input->post('NIP'),
				'phone_number' => $this->input->post('phone_number'),
				'id_manager' => $this->input->post('id_manager')
			);

			return $this->db->insert('clients', $data);
		}
        public function update_client(){ // edytowanie danych konta
            $data = array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'localisation' => $this->input->post('localisation'),
				'NIP' => $this->input->post('NIP'),
				'phone_number' => $this->input->post('phone_number'),
				'id_manager' => $this->input->post('id_manager')
			);

            $this->db->set($data);

            $this->db->where('id_client', $this->input->post('id_client'));
            $this->db->update('clients');
        }
        public function delete_client($id){ // usuwanie wybranego konta
            $this->db->where('id_client',$id);
            $this->db->delete('clients');
        }
        public function get_client_by_id($id){// wyciaganie klienta po id
            $this->db->where('id_client', $id);
            $query=$this->db->get('clients');
            return $query->row_array();
        }
        public function get_client_by_manager($id){// wyciaganie klientów danego menadżera
            $this->db->where('id_manager', $id);
            $query=$this->db->get('clients');
            return $query->result_array();
        }
    }
?>
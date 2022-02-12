<?php
    class hosting_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function get_hostings_by_pur_serv_id($id){// wyciaganie wszystkich informacji z hosting dla danego klienta i danej usługi
            $this->db->where('id_pur_serv',$id);
            $query=$this->db->get('hosting');
            return $query->result_array();
        }
        public function create_hosting_by_pur_serv_id($id){
            $data = array(
				'id_pur_serv' => $id,
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'capacity_MB' => $this->input->post('capacity_MB'),
				'occupied_MB' => $this->input->post('occupied_MB')
			);

			return $this->db->insert('hosting', $data);
        }
        public function edit_hosting_by_id(){
            $data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'capacity_MB' => $this->input->post('capacity_MB'),
				'occupied_MB' => $this->input->post('occupied_MB')
			);

            $this->db->set($data);

            $this->db->where('id_hosting', $this->input->post('id_hosting'));
            $this->db->update('hosting');
        }
        public function delete_hosting_by_id($id){ // usuwanie wybranego hostingu
            $this->db->where('id_hosting',$id);
            $this->db->delete('hosting');
        }
        public function get_hostings(){// wyciaganie wszystkich informacji z hosting
            $sql="SELECT h.*, h.name AS name_h, ps.id_pur_serv AS id_pur_serv_ps, c.name AS name_c FROM hosting h JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client";
            $query=$this->db->query($sql);
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
        public function get_hostings_by_client_id($id){// wyciaganie wszystkich informacji z hosting dla danego klienta
            $sql="SELECT h.*, h.name AS name_h, ps.id_pur_serv AS id_pur_serv_ps, c.name AS name_c FROM hosting h JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
            $query=$this->db->query($sql,$id);
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
        public function get_hostings_sum_of_occupied_by_client_id($id){// wyciaganie wszystkich informacji z hosting dla danego klienta
            $sql="SELECT SUM(h.occupied_MB) FROM hosting h JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
            $query=$this->db->query($sql,$id);
            if($query->num_rows() != 0)
            {
                return $query->row_array();
            }
            else
            {
                return false;
            }
        }
        public function get_hostings_sum_of_capacity_by_client_id($id){// wyciaganie wszystkich informacji z hosting dla danego klienta
            $sql="SELECT SUM(h.capacity_MB) FROM hosting h JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
            $query=$this->db->query($sql,$id);
            if($query->num_rows() != 0)
            {
                return $query->row_array();
            }
            else
            {
                return false;
            }
        }
        public function get_hosting_by_id($id){// wyciaganie wszystkich informacji o hostingu
            $this->db->where('id_hosting',$id);
            $query=$this->db->get('hosting');
            return $query->row_array();
        }
     }
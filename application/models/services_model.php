<?php
    class Services_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function get_services(){// wyciaganie wszystkich informacji z services
            $query=$this->db->get('services');
            return $query->result_array();
        }
        public function set_service()//dodanie nowej usługi
		{
			$data = array(
				'type' => $this->input->post('type'),
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'price_type' => $this->input->post('price_type')
			);

			return $this->db->insert('services', $data);
		}
        public function update_service(){ // edytowanie danych usługi
            $this->db->set('type', $this->input->post('type'));
            $this->db->set('name', $this->input->post('name'));
            $this->db->set('price', $this->input->post('price'));
            $this->db->set('price_type', $this->input->post('price_type'));

            $this->db->where('id_service', $this->input->post('id_service'));
            $this->db->update('services');
        }
        public function delete_service($id){ // usuwanie wybranej usugi
            $this->db->where('id_service',$id);
            $this->db->delete('services');
        }
		public function get_service_by_id($id){ // wyciąganie usługi po id
            $sql = "SELECT * FROM services WHERE id_service = ?";
			$query=$this->db->query($sql, $id);
			return $query->row_array();
		}
    } 

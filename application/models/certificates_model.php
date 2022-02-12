<?php
    class certificates_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function get_certificates_by_domain_id($id)
        {
            $this->db->where('id_domain', $id);
            $query=$this->db->get('certificates');
            return $query->result_array();
        }
        public function get_certificate_by_id($id)
        {
            $this->db->where('id_certificate', $id);
            $query=$this->db->get('certificates');
            return $query->row_array();
        }
        public function add_certificate()
        {
            $data = array(
				'id_domain' => $this->input->post('id_domain'),
				'type' => $this->input->post('type'),
				'issue_date' => $this->input->post('issue_date'),
				'expire_date' => $this->input->post('expire_date')
			);

			return $this->db->insert('certificates', $data);
        }
        public function get_certificates(){// wyciaganie wszystkich informacji z certificates
            $sql="SELECT cer.*, d.id_domain AS id_d, h.id_hosting AS id_h, ps.id_pur_serv AS id_pur_serv_ps, c.name AS name_c FROM certificates cer JOIN domains d on cer.id_domain = d.id_domain JOIN hosting h on d.id_hosting_acc = h.id_hosting JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client";
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
        public function update_certificate(){ // edytowanie danych certyfikatu
            $this->db->set('type', $this->input->post('type'));
            $this->db->set('issue_date', $this->input->post('issue_date'));
            $this->db->set('expire_date', $this->input->post('expire_date'));

            $this->db->where('id_certificate', $this->input->post('id_certificate'));
            $this->db->update('certificates');
        }
        public function delete_certificate($id){ // usuwanie wybranego certyfikatu
            $this->db->where('id_certificate',$id)->delete('certificates');
        }
     }
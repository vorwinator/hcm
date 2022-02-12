<?php
    class domains_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function create_domain()
        {
            $data = array(
				'id_hosting_acc' => $this->input->post('id_hosting'),
				'url' => $this->input->post('url'),
				'name' => $this->input->post('name'),
				'domain_root' => $this->input->post('domain_root'),
				'php_version' => $this->input->post('php_version'),
				'number_of_email_acc' => $this->input->post('number_of_email_acc'),
				'mail_limit_MB' => $this->input->post('mail_limit_MB'),
				'mail_occupied_MB' => $this->input->post('mail_occupied_MB')
			);

			return $this->db->insert('domains', $data);
        }
        public function get_domains_by_hosting_id($id)
        {
            $this->db->where('id_hosting_acc',$id);
            $query=$this->db->get('domains');
            return $query->result_array();
        }
        public function edit_domain()
        {
            $data = array(
				'url' => $this->input->post('url'),
				'name' => $this->input->post('name'),
				'domain_root' => $this->input->post('domain_root'),
				'php_version' => $this->input->post('php_version'),
				'number_of_email_acc' => $this->input->post('number_of_email_acc'),
				'mail_limit_MB' => $this->input->post('mail_limit_MB'),
				'mail_occupied_MB' => $this->input->post('mail_occupied_MB')
			);

            $this->db->set($data);

            $this->db->where('id_domain', $this->input->post('id_domain'));
            $this->db->update('domains');
        }
        public function delete_domain($id)
        {
            $this->db->where('id_domain',$id);
            $this->db->delete('domains');
        }
        public function get_domains(){// wyciaganie wszystkich informacji z domains
            $sql="SELECT d.*, d.name AS name_d, ps.id_pur_serv AS id_pur_serv_ps, c.name AS name_c FROM domains d JOIN hosting h on d.id_hosting_acc = h.id_hosting JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client";
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
        public function get_domain($id)
        {
            $this->db->where('id_domain', $id);
            $query=$this->db->get('domains');
            return $query->row_array();
        }
        public function get_domains_quantity_by_client_id($id){
            $sql="SELECT d.id_domain FROM domains d JOIN hosting h on d.id_hosting_acc = h.id_hosting JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
            $query=$this->db->query($sql,$id);
            if($query->num_rows() != 0)
            {
                return $query->num_rows();
            }
            else
            {
                return false;
            }
        }
        public function get_domains_quantity_of_mail_acc_by_client_id($id){
            $sql="SELECT SUM(number_of_email_acc) FROM domains d JOIN hosting h on d.id_hosting_acc = h.id_hosting JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
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
        public function get_domains_mail_occupied_by_client_id($id){
            $sql="SELECT SUM(mail_occupied_MB) FROM domains d JOIN hosting h on d.id_hosting_acc = h.id_hosting JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
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
        public function get_domains_mail_limit_by_client_id($id){
            $sql="SELECT SUM(mail_limit_MB) FROM domains d JOIN hosting h on d.id_hosting_acc = h.id_hosting JOIN purchased_services ps on h.id_pur_serv = ps.id_pur_serv JOIN clients c on ps.id_client = c.id_client WHERE c.id_client=?";
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
     }
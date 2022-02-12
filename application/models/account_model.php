<?php
    class Account_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function get_account(){// wyciaganie wszystkich informacji z accounts(oprócz haseł)
            $query=$this->db->query('SELECT id_acc, email, firstname, lastname, active FROM accounts');
            return $query->result_array();
        }
        public function set_account()//ustawianie nowego konta
		{
            $hash_pass=$this->input->post('password');
            $hash_pass=md5($hash_pass);

			$data = array(
				'email' => $this->input->post('email'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'active' => ('1'),
				'password' => $hash_pass
			);

			return $this->db->insert('accounts', $data);
		}
        public function update_account(){ // edytowanie danych konta
            $this->db->set('email', $this->input->post('email'));
            $this->db->set('firstname', $this->input->post('firstname'));
            $this->db->set('lastname', $this->input->post('lastname'));

            $this->db->where('id_acc', $this->input->post('id_acc'));
            $this->db->update('accounts');
        }
        public function block($id){ // blokowanie konta wybranego z listy
            $this->db->set('active', 0);

            $this->db->where('id_acc', $id);
            $this->db->update('accounts');
        }
        public function unblock($id){ // odblokowywanie konta wybranego z listy
            $this->db->set('active', 1);

            $this->db->where('id_acc', $id);
            $this->db->update('accounts');
        }
        public function check_password(){ // wyciaganie hasła zalogowanego użytkownika
            $id=$_SESSION['id_acc'];
            $query=$this->db->query("select password from accounts where id_acc='$id'");
            return $query->row_array();
        }
        public function check_password2(){ // wyciąganie hasła logującego się użytkownika
            $this->db->where('email', $this->input->post('email'));
            $query=$this->db->query('select password from accounts');
            return $query->row_array();
        }
        public function set_new_password(){// zmiana hasła zalogowanego użytkownika
            $this->db->set('password', md5($this->input->post('password')));

            $this->db->where('id_acc', $_SESSION['id_acc']);
            $this->db->update('accounts');
        }
        public function get_acc_by_email(){// wyciaganie zalogowanego użytkownika
            $email=$this->input->post('email');
            $query=$this->db->query("SELECT id_acc, email, firstname, lastname, active FROM accounts where email='$email'");
            return $query->result_array();
        }
        public function get_acc_id_by_id(){ // wyciąganie id konta przy pomocy id z formularza
            $id=$this->input->post('id_manager');
            $query=$this->db->query("SELECT id_acc FROM accounts WHERE id_acc='$id'");
            return $query->row_array();
        }
        public function get_acc_by_id($id){ // wyciąganie konta przy pomocy id konta
            $sql="SELECT * FROM accounts WHERE id_acc = ?";
            $query=$this->db->query($sql, $id);
            return $query->row_array();
        }
    } 
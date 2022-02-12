<?php
class Authentication extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
    }
    public function login(){
        if(isset($_SESSION['id_acc'])){
            redirect('client');
        }
        else{
            $data['title'] = 'Logowanie';
            if(isset($_SESSION['success']))$data['success'] = $_SESSION['success'];
            unset($_SESSION['success']);

            $this->form_validation->set_rules('password', 'Hasło', 'required', array('required' => 'Musisz wpisać %s.'));
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Musisz wpisać %s.', 'valid_email'=>'To nie jest poprawny %s.'));

            if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('authentication/login', $data);
                }
                else
                {
                    $pass=$this->account_model->check_password2();

                    if($pass['password']!=md5($this->input->post('password'))){
                        $data['success']="Podano nieprawidłowe dane logowania";
                        $this->load->view('authentication/login',$data);
                    }
                    else{
                        $data['logged']=$this->account_model->get_acc_by_email();
                        foreach($data['logged'] as $row){
                            $_SESSION['id_acc']=$row['id_acc'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['firstname']=$row['firstname'];
                            $_SESSION['lastname']=$row['lastname'];
                            $_SESSION['active']=$row['active'];
                        }
                        if($_SESSION['id_acc']==null){
                            $data['success']="Podano nieprawidłowe dane logowania";
                            $this->load->view('authentication/login',$data);
                        }
                        else{
                            $data['account']=$this->account_model->get_account();
                            $data['title']="Konta użytkowników";
                            $this->load->view('templates/header',$data);
                            $this->load->view('account/index',$data);
                            $this->load->view('templates/footer',$data);
                        }
                    }
                    
                }
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        $data['title'] = 'Wylogowano';
        $data['success']="Gratuluję. Wylogowałeś się.";
        $this->load->view('authentication/login',$data);
    }
}
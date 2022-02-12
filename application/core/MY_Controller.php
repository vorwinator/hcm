<?php
class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));

        if(!isset($_SESSION['id_acc']))$this->not_logged();

        $this->form_validation->set_message('required', 'Musisz wpisać {field}.');
        $this->form_validation->set_message('valid_email', 'Podaj prawidłowy {field}.');
        $this->form_validation->set_message('matches', '{field} oraz {param} muszą być identyczne.');
        $this->form_validation->set_message('exact_length', '{field} powinien się składać z {param} cyfr.');
        $this->form_validation->set_message('numeric', 'Pole {field} powinno się składać wyłącznie z cyfr.');
    }
    public function not_logged(){
        $_SESSION['success']="Musisz być zalogowany by mieć do tego dostęp :(";
        redirect('authentication/login');
    }
    protected function render_page($view,$data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view($view, $data);
        $this->load->view('templates/footer', $data);
    }
}
?> 
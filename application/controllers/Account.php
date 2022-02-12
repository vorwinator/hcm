<?php
class Account extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
    }
    public function index(){
        $data['account']=$this->account_model->get_account();
        $data['title']="Konta użytkowników";

        $this->render_page('account/index', $data);
    }
    public function block(){
        $this->account_model->block($_GET['id_acc']);
        $data['account']=$this->account_model->get_account();
        $data['title']="Konta użytkowników";

        $this->render_page('account/index', $data);
    }
    public function unblock(){
        $this->account_model->unblock($_GET['id_acc']);
        $data['account']=$this->account_model->get_account();
        $data['title']="Konta użytkowników";

        $this->render_page('account/index', $data);
    }
    public function create()
		{

			$data['title'] = 'Dodawanie konta';

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('firstname', 'Imię', 'required');
			$this->form_validation->set_rules('lastname', 'Nazwisko', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
			$this->form_validation->set_rules('password2', ' Powtórz hasło', 'required|matches[password]');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('account/create',$data);

			}
			else
			{
                $data['success']="Gratuluję. Utworzono nowe konto.";
				$this->account_model->set_account();
                $data['account']=$this->account_model->get_account();
                $data['title']="Konta użytkowników";
                $this->render_page('account/index',$data);
			}
		}
    public function update(){

            $data['title'] = 'Edytuj konto';
            if(isset($_GET['id_acc']))$_SESSION['query_variable']=$_GET['id_acc'];
            $data['account'] = $this->account_model->get_acc_by_id($_SESSION['query_variable']);

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('firstname', 'Imię', 'required');
			$this->form_validation->set_rules('lastname', 'Nazwisko', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page('account/update',$data);
            }
            else
            {
                $data['success']="Gratuluję. Zmodyfikowano konto.";
                $this->account_model->update_account();
                $data['account']=$this->account_model->get_account();
                $data['title']="Konta użytkowników";
                $this->render_page('account/index',$data);
            }
        }
    public function change_password(){

        $data['title'] = 'Zmiana hasła';

        $this->form_validation->set_rules('pass', 'Stare hasło', 'required');
        $this->form_validation->set_rules('pass', 'Stare hasło', 'callback_password_is_correct');
        $this->form_validation->set_rules('password', 'Nowe hasło', 'required');
		$this->form_validation->set_rules('password2', 'Powtórz nowe hasło', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE)
            {
                $this->render_page('account/change_password',$data);
            }
            else
            {
                $data['success']="Gratuluję. Zmieniono hasło. Proszę zalogować się ponownie.";
                $this->account_model->set_new_password();
                
                $this->session->sess_destroy();
                    
                $this->load->view('authentication/login',$data);
            }
    }
    public function password_is_correct($str)
    {
        $pass=$this->account_model->check_password();
        if ($pass['password']!=md5($str))
                {
                    $this->form_validation->set_message('password_is_correct', 'Podano nieprawidłowe hasło');
                    return FALSE;
                }
                else
                {
                    return TRUE;
                }
    }
}
<?php
class Client extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('client_model');
        $this->load->model('account_model');
        $this->load->model('services_model');
        $this->load->model('purchased_services_model');
        $this->load->model('hosting_model');
        $this->load->model('domains_model');
        $this->load->model('certificates_model');
    }
    public function index()
    {

        $data['clients']=$this->client_model->get_clients();
        $data['title']="Klienci";

        $this->render_page('client/index',$data);
    }
    public function create()
		{

			$data['title'] = 'Dodawanie klienta';

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('adress', 'Adres', 'required');
			$this->form_validation->set_rules('NIP', 'NIP', 'required|exact_length[10]|numeric');
			$this->form_validation->set_rules('phone_number', ' Numer telefonu', 'required|numeric');
			$this->form_validation->set_rules('id_manager', ' Menadżera', 'required|numeric');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('client/create',$data);
			}
			else
			{
                $acc=$this->account_model->get_acc_id_by_id();
                if($this->input->post('id_manager')!=$acc['id_acc']){
                    $data['manager_not_found']='Nie istnieje taki menadżer';
                    $this->render_page('client/create',$data);
                }
                else{
                    $data['success']="Gratuluję. Dodano nowego klienta.";
				$this->client_model->set_client();
                $data['clients']=$this->client_model->get_clients();
                $data['title']="Klienci";
                $this->render_page('client/index',$data);
                }
			}
		}
    public function update(){

            $data['title'] = 'Edytuj klienta';
            if(isset($_GET['id_client']))$_SESSION['query_variable']=$_GET['id_client'];
            $data['client']=$this->client_model->get_client_by_id($_SESSION['query_variable']);

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('localisation', 'Adres', 'required');
			$this->form_validation->set_rules('NIP', 'NIP', 'required|exact_length[10]|numeric');
			$this->form_validation->set_rules('phone_number', ' Numer telefonu', 'required|numeric');
			$this->form_validation->set_rules('id_manager', ' Menadżera', 'required|numeric');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page('client/update',$data);
            }
            else
            {
                $acc=$this->account_model->get_acc_id_by_id();
                if($this->input->post('id_manager')!=$acc['id_acc']){
                    $data['manager_not_found']='Nie istnieje taki menadżer';
                    $this->render_page('client/update',$data);
                }
                else{
                    $data['success']="Gratuluję. Zmodyfikowano klienta.";
                    $this->client_model->update_client();
                    $data['clients']=$this->client_model->get_clients();
                    $data['title']="Klienci";
                    $this->render_page('client/index',$data);
                }
            }
        }
    public function delete(){

            $data['title']="Klienci";
            $data['success']="Gratuluję. Usunięto klienta.";

            $this->client_model->delete_client($_GET['id_client']);
            $data['clients']=$this->client_model->get_clients();
            $this->render_page('client/index',$data);
        }
    public function details()
        {   
            if(isset($_GET['id_pur_serv_del'])){
                $this->purchased_services_model->delete_purchased_service($_GET['id_pur_serv_del']);
                redirect('client/index');
            }
            $data['client']=$this->client_model->get_client_by_id($_GET['id_client']);

            $data['services']=$this->purchased_services_model->purchased_services_by_client_id($_GET['id_client']);

            $data['payment_deadline']=$this->purchased_services_model->purchased_services_closes_payment_deadline_by_client_id($_GET['id_client']);

            $monthly=$this->purchased_services_model->purchased_services_payment_per_month_by_client_id($_GET['id_client']);
            $yearly=$this->purchased_services_model->purchased_services_payment_per_year_by_client_id($_GET['id_client']);
            $data['payment_per_month']=$monthly['payment_per_month'];
            $data['payment_per_year']=$yearly['payment_per_year'];

            $hostings=$this->hosting_model->get_hostings_by_client_id($_GET['id_client']);
            if($hostings!=null)$data['quantity_of_hosting_acc']=count($hostings);
            else $data['quantity_of_hosting_acc']=0;

            $data['sum_of_occupied']=$this->hosting_model->get_hostings_sum_of_occupied_by_client_id($_GET['id_client']);
            $data['sum_of_capacity']=$this->hosting_model->get_hostings_sum_of_capacity_by_client_id($_GET['id_client']);

            $data['quantity_of_domains']=$this->domains_model->get_domains_quantity_by_client_id($_GET['id_client']);

            $data['quantity_of_domains_mail_acc']=$this->domains_model->get_domains_quantity_of_mail_acc_by_client_id($_GET['id_client']);

            $data['occupied_of_domains_mail_acc']=$this->domains_model->get_domains_mail_occupied_by_client_id($_GET['id_client']);
            $data['limit_of_domains_mail_acc']=$this->domains_model->get_domains_mail_limit_by_client_id($_GET['id_client']);

            $data['title']="Szczegóły klienta";
    
            $this->render_page('client/details',$data);

        }
    public function add_service()
        {
    
            $data['client']=$this->client_model->get_client_by_id($_GET['id_client']);
            $data['services']=$this->services_model->get_services();
            $data['title']="Szczegóły klienta";
    
            $this->render_page('client/add_service',$data);
        }
    public function my_clients()
        {
    
            if(isset($_SESSION['id_acc'])) 
                $data['clients']=$this->client_model->get_client_by_manager($_SESSION['id_acc']);
            $data['title']="Szczegóły klienta";
    
            $this->render_page('client/my_clients',$data);
        }
        /********************************************* purchased services **************************************/ 
    public function add_service_details()
        {

            $data['title']="Szczegóły dodawanej usługi";
            if(isset($_GET['id_service']))$_SESSION['query_variable']=$_GET['id_service'];
            $data['service']=$this->services_model->get_service_by_id($_SESSION['query_variable']);

            if(isset($_POST['submit']))
            {
                $data['success']="Gratuluję. Dodano szczegóły zakupionej usługi.";
                $this->purchased_services_model->set_purchased_service();
                $data['clients']=$this->client_model->get_clients();
                $data['title']="Klienci";
                $this->render_page('client/index',$data);
            }
            else
            {
                $this->render_page('client/add_service_details',$data);
            }
        }

        public function pur_serv_details()
        {
            $data['title']="Szczegóły usługi zakupionej przez klienta";
            if(isset($_GET['id_pur_serv']))$_SESSION['query_variable']=$_GET['id_pur_serv'];
            
			$this->form_validation->set_rules('price', 'Cenę', 'required');

            if($this->form_validation->run() === FALSE){
            }
            else{
                $this->purchased_services_model->update_purchased_service();
            }

            $data['service']=$this->purchased_services_model->get_purchased_services_by_pur_serv_id($_SESSION['query_variable']);

            if(isset($_GET['id_pur_serv_delete'])){
                $data['success']="Gratuluję. Usunięto zakupioną usługę.";
                $this->purchased_services_model->delete_purchased_service($_GET['id_pur_serv_delete']);
                $this->render_page('services/purchased_services',$data);
            }
            else{
                $this->render_page('client/pur_serv_details',$data);
            }
        }
        /************************************* hosting **************************************************/
        public function hosting_details()
        {
            $data['title']="Szczegóły usługi hostingowej zakupionej przez klienta";

            if($this->input->post('id_hosting')!=null)
                $this->hosting_model->edit_hosting_by_id();

            if(isset($_GET['hosting_delete']))
                $this->hosting_model->delete_hosting_by_id($_GET['hosting_delete']);

            $data['hostings']=$this->hosting_model->get_hostings_by_pur_serv_id($_SESSION['id_pur_serv']);
            $data['service']=$this->purchased_services_model->get_purchased_services_by_pur_serv_id($_SESSION['id_pur_serv']); 
                
            $this->render_page('client/hosting_details',$data);
        }
        public function add_hosting_to_purchased_service()
        {
            $data['title']="Dodawanie usługi hostingowej zakupionej przez klienta";

            $this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('description', 'Opis', 'required');
			$this->form_validation->set_rules('capacity_MB', ' Pojemność', 'required');
			$this->form_validation->set_rules('occupied_MB', ' Zajętość', 'required');
            $this->form_validation->set_rules('occupied_MB', 'Zajętość', 'callback_capacity_bigger_than_occupied');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page('client/add_hosting_to_purchased_service',$data);
            }
            else
            {
                $id=$_SESSION['id_pur_serv'];
                $data['success']="Gratuluję. Dodano hosting do zakupionej usługi o id '$id'.";
                $this->hosting_model->create_hosting_by_pur_serv_id($id);
                $data['hostings']=$this->hosting_model->get_hostings();
                $data['title']="Lista hostingów";

                $this->render_page('services/hosting',$data);
            }
        }
        public function hosting_accounts()
        {
            $data['title']="Lista kont hostingowych danego klienta";
            $data['hostings']=$this->hosting_model->get_hostings_by_client_id($_SESSION['id_client']);

            $this->render_page('client/hosting_accounts',$data);
        }
        /****************************************** domains ******************************************/
        public function hosting_domains()
        {
            if(isset($_GET['hosting_id'])) $_SESSION['hosting_id']=$_GET['hosting_id'];
            $data['title']="Lista domen danego hostingu";
            $data['hosting']=$this->hosting_model->get_hosting_by_id($_SESSION['hosting_id']);
            if(isset($_GET['id_domain_del']))$this->domains_model->delete_domain($_GET['id_domain_del']);
            $data['domains']=$this->domains_model->get_domains_by_hosting_id($_SESSION['hosting_id']);

            

            $this->form_validation->set_rules('url', 'URL', 'required');
			$this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('domain_root', ' Korzeń domeny', 'required');
            $this->form_validation->set_rules('php_version', 'Wersję php', 'required');
			$this->form_validation->set_rules('number_of_email_acc', 'Liczbę kont pocztowych', 'required|numeric');
			$this->form_validation->set_rules('mail_limit_MB', 'Pojemność', 'required');
			$this->form_validation->set_rules('mail_occupied_MB', 'Zajętość', 'required');
            $this->form_validation->set_rules('mail_occupied_MB', 'Zajętość poczty', 'callback_mail_capacity_bigger_than_occupied');

            if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('client/hosting_domains',$data);
			}
			else
			{
                $data['success']="Gratuluję. Zedytowano domenę.";
				$this->domains_model->edit_domain();
                $data['domains']=$this->domains_model->get_domains_by_hosting_id($_SESSION['hosting_id']);
                $this->render_page('client/hosting_domains',$data);
			}
        }
        public function hosting_add_domain()
        {
            $data['title']="Dodawanie domeny";

            $this->form_validation->set_rules('url', 'URL', 'required');
			$this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('domain_root', ' Korzeń domeny', 'required');
            $this->form_validation->set_rules('php_version', 'Wersję php', 'required');
			$this->form_validation->set_rules('number_of_email_acc', 'Liczbę kont pocztowych', 'required|numeric');
			$this->form_validation->set_rules('mail_limit_MB', ' Pojemność', 'required');
			$this->form_validation->set_rules('mail_occupied_MB', 'Zajętość', 'required');
            $this->form_validation->set_rules('mail_occupied_MB', 'Zajętość poczty', 'callback_mail_capacity_bigger_than_occupied');

            if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('client/hosting_add_domain',$data);
			}
			else
			{
                $data['success']="Gratuluję. Dodano nową Domenę.";
				$this->domains_model->create_domain();
                $data['domains']=$this->domains_model->get_domains();
                $data['title']="Lista domen";

                $this->render_page('services/domain',$data);
			}
        }
        /********************************************************* certificates ********************************************/
        public function hosting_domain_certificates()
        {
            $data['title']="Lista certyfikatów danej domeny";
            $data['hosting']=$this->hosting_model->get_hosting_by_id($_SESSION['hosting_id']);
            if(isset($_GET['id_domain']))$_SESSION['id_domain']=$_GET['id_domain'];
            if(isset($_GET['id_certificate_del'])) $this->certifcates_model->delete_certificate($_GET['id_certificate_del']);
            $data['domain']=$this->domains_model->get_domain($_SESSION['id_domain']);
            $data['certificates']=$this->certificates_model->get_certificates_by_domain_id($_SESSION['id_domain']);

            

            $this->form_validation->set_rules('type', 'Rodzaj', 'required');
			$this->form_validation->set_rules('issue_date', 'Datę rozpoczęcia', 'required');
			$this->form_validation->set_rules('expire_date', 'Datę zakończenia', 'required');

            if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('client/hosting_domain_certificates',$data);
			}
			else
			{
                $data['success']="Gratuluję. Zedytowano certyfikat.";
                $this->certificates_model->update_certificate();
                $data['certificates']=$this->certificates_model->get_certificates_by_domain_id($_SESSION['id_domain']);
                $this->render_page('client/hosting_domain_certificates',$data);
			}
        }
        public function hosting_domain_add_certificate()
        {
            $data['title']="Dodawanie certyfikatu do danej domeny";
            if(isset($_GET['id_domain']))$_SESSION['id_domain']=$_GET['id_domain'];

            $this->form_validation->set_rules('type', 'Rodzaj', 'required');
			$this->form_validation->set_rules('issue_date', 'Datę rozpoczęcia', 'required');
			$this->form_validation->set_rules('expire_date', 'Datę zakończenia', 'required');

            if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('client/hosting_domain_add_certificate',$data);
			}
			else
			{
                $data['success']="Gratuluję. Dodano certyfikat.";
                $this->certificates_model->add_certificate();
                $data['title']="Lista certyfikatów danej domeny";
                $data['hosting']=$this->hosting_model->get_hosting_by_id($_SESSION['hosting_id']);
                if(isset($_GET['id_domain']))$_SESSION['id_domain']=$_GET['id_domain'];
                $data['domain']=$this->domains_model->get_domain($_SESSION['id_domain']);
                $data['certificates']=$this->certificates_model->get_certificates_by_domain_id($_SESSION['id_domain']);
                $this->render_page('client/hosting_domain_certificates',$data);
			}
        }
        /*********************************** METODY POMOCNICZE *******************************************/
        public function capacity_bigger_than_occupied($occupied_MB)
        {
            if ($occupied_MB>$this->input->post('capacity_MB'))
                    {
                        $this->form_validation->set_message('capacity_bigger_than_occupied', 'Pojemność nie może być mniejsza niż Zajętość');
                        return FALSE;
                    }
                    else
                    {
                        return TRUE;
                    }
        }
        public function mail_capacity_bigger_than_occupied($occupied_MB)
        {
            if ($occupied_MB>$this->input->post('capacity_MB'))
                    {
                        $this->form_validation->set_message('mail_capacity_bigger_than_occupied', 'Pojemność nie może być mniejsza niż Zajętość');
                        return FALSE;
                    }
                    else
                    {
                        return TRUE;
                    }
        }
}

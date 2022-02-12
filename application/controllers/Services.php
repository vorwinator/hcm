<?php
class Services extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('services_model');
        $this->load->model('purchased_services_model');
        $this->load->model('hosting_model');
        $this->load->model('domains_model');
        $this->load->model('certificates_model');
        
    }
    public function index(){

        $data['services']=$this->services_model->get_services();
        $data['title']="Usługi";

        $this->render_page('services/index',$data);
    }
    public function create()
		{

			$data['title'] = 'Dodawanie usługi';

			$this->form_validation->set_rules('type', 'Rodzaj usługi', 'required');
			$this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('price', 'Cenę', 'required');
			$this->form_validation->set_rules('price_type', 'Cenę za', 'required');

			if ($this->form_validation->run() === FALSE)
			{
                $this->render_page('services/create',$data);
			}
			else
			{
                $data['success']="Gratuluję. Dodano nową usługę.";
				$this->services_model->set_service();
                $data['services']=$this->services_model->get_services();
                $data['title']="Usługi";

                $this->render_page('services/index',$data);
			}
		}
    public function update(){

            $data['title'] = 'Edytuj usługę';
            if(isset($_GET['id_service']))$_SESSION['query_variable']=$_GET['id_service'];
            $data['service']=$this->services_model->get_service_by_id($_SESSION['query_variable']);

            $this->form_validation->set_rules('type', 'Rodzaj', 'required');
			$this->form_validation->set_rules('name', 'Nazwę', 'required');
			$this->form_validation->set_rules('price', 'Cenę', 'required');
			$this->form_validation->set_rules('price_type', 'Cenę za', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->render_page('services/update',$data);
            }
            else
            {
                $data['success']="Gratuluję. Zmodyfikowano usługę.";
                $this->services_model->update_service();
                $data['services']=$this->services_model->get_services();
                $data['title']="Usługi";

                $this->render_page('services/index',$data);
            }
        }
    public function delete(){

            $data['title']="Usługi";
            $data['success']="Gratuluję. Usunięto usługę.";

            $this->services_model->delete_service($_GET['id_service']);

            $data['services']=$this->services_model->get_services();
            $this->render_page('services/index',$data);
        } 
        /************************** purchased services **************************/
    public function who_got_this(){
			$data['service']=$this->services_model->get_service_by_id($_GET['id_service']);
			$data['clients']=$this->purchased_services_model->get_clients_by_service_id($_GET['id_service']);
            $data['title']="Kto wykupił tą usługę";

            $this->render_page('services/who_got_this',$data);
    }   
    public function purchased_services(){
			$data['purchased_services']=$this->purchased_services_model->get_purchased_services();
            $data['title']="Lista wykupionych usług";

            $this->render_page('services/purchased_services',$data);
    }   
        /*********************** hosting **************************************************/
    public function hosting(){
        if(isset($_GET['hosting_delete']))$this->hosting_model->delete_hosting_by_id($_GET['hosting_delete']);
        $data['hostings']=$this->hosting_model->get_hostings();
        $data['title']="Lista hostingów";

        $this->render_page('services/hosting',$data);
    }
    public function update_hosting()
    {
        $data['title'] = 'Edytuj hosting';
        if(isset($_GET['id_hosting_edit']))$_SESSION['query_variable']=$_GET['id_hosting_edit'];
        $data['hosting']=$this->hosting_model->get_hosting_by_id($_SESSION['query_variable']);

        $this->form_validation->set_rules('name', 'Nazwę', 'required');
		$this->form_validation->set_rules('capacity_MB', 'Pojemność', 'required');
		$this->form_validation->set_rules('occupied_MB', 'Zajętość', 'required');
		$this->form_validation->set_rules('occupied_MB', 'Zajętość', 'callback_capacity_bigger_than_occupied');

        if ($this->form_validation->run() === FALSE)
        {
            $this->render_page('services/update_hosting',$data);
        }
        else
        {
            $data['success']="Gratuluję. Zmodyfikowano hosting.";
            $this->hosting_model->edit_hosting_by_id();
            $data['hostings']=$this->hosting_model->get_hostings();
            $data['title']="Lista hostingów";

            $this->render_page('services/hosting',$data);
        }
    }
    
    /*************************************************** domains ********************************************************/
    public function domain()
    {
        if(isset($_GET['domain_delete'])) $this->domains_model->delete_domain($_GET['domain_delete']);
        $data['domains']=$this->domains_model->get_domains();
        $data['title']="Lista domen";

        $this->render_page('services/domain',$data);
    }
    public function update_domain()
    {
        $data['title'] = 'Edytuj domenę';
        if(isset($_GET['id_domain_edit']))$_SESSION['query_variable']=$_GET['id_domain_edit'];
        $data['domain']=$this->domains_model->get_domain($_SESSION['query_variable']);

        $this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('name', 'Nazwę', 'required');
		$this->form_validation->set_rules('domain_root', 'Korzeń domeny', 'required');
		$this->form_validation->set_rules('php_version', 'Wersję PHP', 'required');
		$this->form_validation->set_rules('number_of_email_acc', 'Liczbę kont pocztowych', 'required|numeric');
		$this->form_validation->set_rules('mail_limit_MB', 'Pojemność poczty', 'required');
		$this->form_validation->set_rules('mail_occupied_MB', 'Zajętość poczty', 'required');
		$this->form_validation->set_rules('mail_occupied_MB', 'Zajętość poczty', 'callback_mail_capacity_bigger_than_occupied');

        if ($this->form_validation->run() === FALSE)
        {
            $this->render_page('services/update_domain',$data);
        }
        else
        {
            $data['success']="Gratuluję. Zmodyfikowano domenę.";
            $this->domains_model->edit_domain();
            $data['domains']=$this->domains_model->get_domains();
            $data['title']="Lista domen";

            $this->render_page('services/domain',$data);
        }
    }
    /*************************************************** certificates ********************************************************/
    public function certificate()
    {
        if(isset($_GET['id_certificate_del']))$this->certificates_model->delete_certificate($_GET['id_certificate_del']);
        $data['certificates']=$this->certificates_model->get_certificates();
        $data['title']="Lista certyfikatów";

        $this->render_page('services/certificate',$data);
    }
    public function update_certificate()
    {
        $data['title'] = 'Edytuj certyfikat';
        if(isset($_GET['id_certificate_edit']))$_SESSION['query_variable']=$_GET['id_certificate_edit'];
        $data['certificate']=$this->certificates_model->get_certificate_by_id($_SESSION['query_variable']);

        $this->form_validation->set_rules('type', 'Rodzaj', 'required');
		$this->form_validation->set_rules('issue_date', 'Datę wystawienia', 'required');
		$this->form_validation->set_rules('expire_date', 'Datę końca ważności', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->render_page('services/update_certificate',$data);
        }
        else
        {
            $data['success']="Gratuluję. Zmodyfikowano certyfikat.";
            $this->certificates_model->update_certificate();
            $data['certificates']=$this->certificates_model->get_certificates();
            $data['title']="Lista certyfikatów";

            $this->render_page('services/certificate',$data);
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

<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Hookcall extends MY_Controller {
        public function temp(){
            //echo "tutaj będzie coś sprawdzającego zalogowanego użytkownika";
            if(!isset($_SESSION['id_acc'])){
                redirect('authentication/login');
            }
        }
    }
?>
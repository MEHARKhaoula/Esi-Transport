<?php
class ContactController extends Controller{
    public function __construct() {
        require_once (APP . 'model/contact.php');
        $this->model = new contact();
     }


     public function show()
     {
        
        $contact=$this->model->get_info_contact() ;
        require_once ('../application/view/ContactView.php'); 
     }


    }

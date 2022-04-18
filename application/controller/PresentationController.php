<?php
class PresentationController extends Controller{
    public function __construct() {
        require_once (APP . 'model/presentation.php');
        $this->model = new presentation();
     }


     public function show()
     {
        
        $presentation=$this->model->get_info_presentation() ;
        require_once ('../application/view/PresentationView.php'); 
     }


    }

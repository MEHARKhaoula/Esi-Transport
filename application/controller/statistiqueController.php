<?php
class statistiqueController extends Controller{
    public function __construct() {
        require_once (APP . 'model/statistique.php');
        $this->model = new statistique();
     }


     public function show() 
     {
    $statistiques=$this->model-> get_Top();
     $countUser=$this->model->get_user();
     $countAnnonce=$this->model->get_annonce() ;
     $countTransp=$this->model->get_transpo();
    
    require_once ('../application/view/StatistiqueView.php'); 
     }

     public function details_news() 
     {
        
     }
    }

    ?>
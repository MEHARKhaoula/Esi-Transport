<?php 
class notesController{

    public function __construct() {
        require_once (APP . 'model/note.php');
        $this->model = new note();
     }


     public function Noter()
     {
         echo $_POST['note'] ;
        echo $_POST['id_transport'] ;
         echo $_POST['id_annonce'];
        $this->model->noter($_POST['note'],$_POST['id_transport'] ,$_POST['id_annonce']) ;
        header("location:".URL."profilsController/showAnnoncesValidees");
 
     }

    }
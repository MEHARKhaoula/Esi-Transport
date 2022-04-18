<?php 
class signalementController{

    public function __construct() {
        require_once (APP . 'model/signalement.php');
        $this->model = new signalement();
     }
     
    public function signalerTransport() 
    {
        $signalement=[];
        $client=$_POST['id_client'] ;
       $annonce=$_POST['annonce_id'] ;
       $transport= $_POST['id_transport'] ;
        $type="client";
        require_once ('../application/view/Singnalement.php'); 
    }

    public function signalerClient() 
    {
        $signalement=[];
        $client=$_POST['id_client'] ;
       $annonce=$_POST['annonce_id'] ;
       $transport= $_POST['id_transport'] ;
        $type="transporteur";
        require_once ('../application/view/Singnalement.php'); 
    }
    public function inserer ()
    {
        $signalement = [] ;
        $signalement['texte']=$_POST['message'];
        $signalement['id_annonce']=$_POST['id_annonce'];
        $signalement['transport_id']=$_POST['transport_id'];
        $signalement['type']=$_POST['type'];
        $signalement['id_client']=$_POST['client'];
        $this->model->inserer($signalement) ;
        header("location:".URL."profilsController/showAnnoncesValidees");
    }

public function show_details($id)
{
  $detail = $this->model->get_detail($id) ;
  require_once ('../application/view/DetailSignalement.php'); 

}

}
?>
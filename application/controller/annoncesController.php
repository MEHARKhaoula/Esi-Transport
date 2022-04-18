<?php
class annoncesController extends Controller{
    public function __construct() {
        require_once (APP . 'model/annonce.php');
        $this->model = new Annonce();
     }



     public function terminer() 
     {
      $this->model->termine($_POST['annonce_id']) ;
      header("location:".URL."profilsController/showAnnoncesValidees");
     }

     public function delete()
     {
     
          $this->model->delete($_POST['annonce_id']) ;
   
      

      header("location:".URL."profilsController/showAnnoncesProfil");

     }

     public function edit()
     {
      

        if (isset($_POST['submit_edit_annonce'])) 

      {
       $annonceEdite = [] ;
       $c =$this->model->get_info_annonce($_POST['annonce_id2']);
       $annonceEdite['titre']= $c->titre ;
       $annonceEdite['description']=$c->description;
       $annonceEdite['depart']=$c->wilaya_depart;
       $annonceEdite['arrive']=$c->wilaya_arrive;
       $annonceEdite['typetransport']=$c->type_transport;
       $annonceEdite['poids']=$c->fourchette_poids;
       $annonceEdite['volume']=$c->fourchette_volume;
       $annonceEdite['moyen']=$c->moyen_transport;
       $annonceEdite['etat']=$c->etat;
       $annonceEdite['date']=$c->date;
       $annonceEdite['id']=$c->id_annonce;
       $annonceEdite['wilayas']=$this->model->get_all_wilayas() ;
      $annonceEdite['POIDS']=$this->model->get_all_poids() ;  
      $annonceEdite['VOLUME']=$this->model->get_all_volume()  ;
        
        require_once('../application/view/modifierAnnonce.php') ;
      }


     }


     public function edit_annonces()
     {
      

        if (isset($_POST['submit_edit'])) 
        {
        $annonceEdite=[];
        $annonceEdite['titre']=$_POST['titre'];
        $annonceEdite['description']=$_POST['description'];
        $annonceEdite['wilaya_depart']=$_POST['depart'];
        $annonceEdite['wilaya_arrive']=$_POST['arrive'];
        $annonceEdite['typetransport']=$_POST['type'];
        $annonceEdite['poids']=$_POST['poids'];
        $annonceEdite['moyen_transport']=$_POST['moyen'];
        $annonceEdite['etat']='en attente dune transaction';
        $annonceEdite['volume']=$_POST['volume'];
     
        $annonceEdite['id']=$_POST['annonce_id_edit'];
       
       $this->model->update($annonceEdite);
      header("location:".URL."profilsController/showAnnoncesProfil");
      }


     }
     
     public function details_annonces() 
     {
      if (isset($_POST['submit_show_annonce'])) 

      {
       $annonce = [] ;
       $c =$this->model->get_info_annonce($_POST['annonce_id_afficher']);
       $annonce['client']=$this->model->get_client($c->id_client);
      $annonce['id_annonce']=$c->id_annonce;
      $annonce['id_user']=$c->id_client;
       $annonce['titre']= $c->titre ;
       $annonce['description']=$c->description;
       $annonce['depart']=$c->wilaya_depart;
       $annonce['arrive']=$c->wilaya_arrive;
       $annonce['typetransport']=$c->type_transport;
       $annonce['poids']=$c->fourchette_poids;
       $annonce['volume']=$c->fourchette_volume;
       $annonce['moyen']=$c->moyen_transport;
       $annonce['etat']=$c->etat;
       $annonce['date']=$c->date;
       $annonce['image']=$c->img;
       $annonce['type'] =$c->type;
       $annonce['wilayas']=$this->model->get_all_wilayas() ;
       require_once('../application/view/afficherAnnonce.php') ;
       
      }


     }

     public function details_annonces_($id) 
     {
     

      
       $annonce = [] ;
       $c =$this->model->get_info_annonce($id);
       $annonce['client']=$this->model->get_client($c->id_client);
      $annonce['id_annonce']=$c->id_annonce;
      $annonce['id_user']=$c->id_client;
       $annonce['titre']= $c->titre ;
       $annonce['description']=$c->description;
       $annonce['depart']=$c->wilaya_depart;
       $annonce['arrive']=$c->wilaya_arrive;
       $annonce['typetransport']=$c->type_transport;
       $annonce['poids']=$c->fourchette_poids;
       $annonce['volume']=$c->fourchette_volume;
       $annonce['moyen']=$c->moyen_transport;
       $annonce['etat']=$c->etat;
       $annonce['date']=$c->date;
       $annonce['image']=$c->img;
       $annonce['wilayas']=$this->model->get_all_wilayas() ;
        require_once('../application/view/afficherAnnonce.php') ;
      


     }

     public function repondre()
     {
      if (isset($_POST['submit_reponse'])) 
      {
        $reponse=[] ;
        
        $reponse['id_annonce']= $_POST['id_annonce'];
        $reponse['id_client']= $_POST['id_user'];
        $reponse['transporteur_id']= $_POST['transporteur_id'];
        $reponse['texte']=$_POST['rep'];
        $this->model->repondre($reponse);
        header("location:".URL."home/index");
       
      }
     
     }


     

     public function rechercher()
     {
      $depart=$_POST['d'];
      $arriv=$_POST['a'];
     
      $res=$this->model->get_annonce_model($depart,$arriv);
      require_once ('../application/view/SearchView.php'); 

     }
    

 
  
     

}

?>
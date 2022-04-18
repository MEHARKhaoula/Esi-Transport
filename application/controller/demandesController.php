<?php
class demandesController extends Controller{
    
    public function __construct() {
        require_once (APP . 'model/demande.php');
        $this->model = new Demande();
     }


     public function afficher_demandes()
     {
         
        $k =$this->model->get_demandes($_SESSION['user_id']);
        $i=0;
        foreach($k as $demande)
        {
          $transpo['demandes'][$i] = $demande;
          $transpo['transporteurs'][$i]=$this->model->findT($demande->transporteur_id);
          $i++;
        }
        $transpo['count']=$i;
        require_once ('../application/view/DemandesTransporteurs.php'); 

      
     }

     public function accepter()

     {
        $this->model->update($_POST['demande_id']);
        header("location:".URL."demandesController/afficher_demandes");
       
     }

 public function afficher_reponses_clients()
 {
   $demandes =$this->model->get_reponses($_SESSION['t_id']);
   $reponses=[];
   $i=0;
   foreach($demandes as $demande)
   {
      $reponses['demandes'][$i]=$demande;
      $reponses['clients'][$i] =$this->model->get_client($demande->id_client) ;
      $reponses['annonces'][$i]=$this->model->get_annonce($demande->id_annonce);
      $i++;
   }
   $reponses['count']=$i;
   require_once ('../application/view/ReponsesClients.php'); 
 }
     public function confirmer()
     {
      $reponses =$this->model->confirm($_POST['demande_id_confirmer'],$_SESSION['t_id']);
      header("location:".URL."demandesController/afficher_reponses_clients");
     }

     public function envoyer()
     {
      
        
        $demande['texte']= $_POST['rep'];
        $demande['id_annonce']= $_POST['id_annonce'];
        $demande['id_client']= $_POST['id_user'];
        $demande['transporteur_id']= $_POST['transporteur_id'];
        $this->model->envoyer($demande);
       
      
      header("location:".URL."profilsController/showAnnoncesProfil");
     }


     public function afficherTransporteurs()
     {
      $transporteurs=$this->model->findTransport($_POST['id_annonce']);

     
      $T=[];
      $i=0;
      foreach($transporteurs as $transporteur) 
      { 
        
         $tr =$this->model->findT($transporteur->id_transporteur) ;
         if($_POST['type'] == "garantie" && $tr->statut == "certifie") {
            $T[$i]=$tr;
            $i++;
         }

         else
         {
            if($_POST['type'] == "non garantie" && ($tr->statut =="certifie" || $tr->statut =="valide" || $tr->statut =="refuse" )) {
               $T[$i]=$tr;
               $i++;
            }

         }

         
      }

      $TRANSP=[] ;
      $TRANSP['transporteurs']=$T;
      $TRANSP['count']=$i;
      $TRANSP['id']=$_POST['id_annonce'] ;
      
      require_once ('../application/view/listeTransporteurs.php'); 
     }


}
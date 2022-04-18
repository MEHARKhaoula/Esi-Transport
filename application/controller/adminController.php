<?php
class adminController extends Controller{

    public function __construct() {
        require_once (APP . 'model/administrateur.php');
        require_once (APP . 'model/User.php');
        $this->model = new administrateur();
     }
    public function afficher_admin_transporteur()
    {
        $t=$this->model->get_transporteurs() ;
       
        require_once(APP .'view/example.php');
    }

   

    public function afficher_admin_contenu() 
    {
        require_once (APP . 'model/presentation.php');
        $presentation = new presentation() ;
        $p= $presentation->get_info_presentation() ;
        require_once (APP . 'model/contact.php');
        $contact = new contact() ;
        $c= $contact-> get_info_contact() ;
        require_once (APP . 'model/diaporama.php');
        $diaporama = new diaporama() ;
        $d= $diaporama-> get_info_diaporama() ;
        require_once(APP .'view/ContenuAdministrateur.php');
       
    }

    public function modifier_diaporama() 
    {
        if(isset($_POST['valider'])) 
         {
            $file =$_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
    
             $folder = "../public/img/images/diaporamas/".$file;	
    move_uploaded_file($tempname, $folder);
    require_once (APP . 'model/diaporama.php');
    $diaporama = new diaporama() ;
    $diaporama -> modifier_diaporama($_POST['user_id'] , $file) ;
    header("location:".URL."adminController/afficher_admin_contenu");
        }

        if(isset($_POST['modifier_lien']) ) 
        {
            
   $lien = $_POST['lien'] ;
    require_once (APP . 'model/diaporama.php');
    $diaporama = new diaporama() ;
    $diaporama -> modifier_lien($_POST['user_id'] , $lien) ;
    header("location:".URL."adminController/afficher_admin_contenu"); 
        }
        


    }

    public function modifier_presentation()
    {

        if(isset($_POST['modifier_presentation']))
        {
        $presentation =[] ;
        $presentation['fonctionne'] =$_POST['comment'] ;
        $presentation['objectif'] =$_POST['objectif'] ;
        $presentation['image'] =  $_FILES["uploadfile"]["name"];
       echo  $presentation['objectif'] ;
       $file =  $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../public/img/images/presentation/".$file;	
         move_uploaded_file($tempname, $folder);

        $presentation['video'] =$_FILES["videofile"]["name"];
        $tempname = $_FILES["videofile"]["tmp_name"];
        $file =$_FILES["videofile"]["name"];
        $folder = "../public/videos/".$file;	
         move_uploaded_file($tempname, $folder);

         require_once (APP . 'model/presentation.php');
         $pres = new presentation() ;
         $p= $pres->modifier_presentation($presentation) ;
        header("location:".URL."adminController/afficher_admin_contenu"); 
         
        }
        
    }

    public function modifier_contact() 
    {
        if(isset($_POST['modifier_contact']))
        {
            $contact['telephone'] = $_POST['phone'] ;
            $contact['mail'] =$_POST['email'] ;
            $contact['adresse'] =$_POST['adresse'] ;
            require_once (APP . 'model/contact.php');
            $con = new contact() ;
           $con->  modifier_contact($contact) ;
          
          
        header("location:".URL."adminController/afficher_admin_contenu"); 
        }
    }


    public function modifier()
    {
            $transport = [] ;
            $transport['statut'] = $_POST['statut'] ;
            $transport['id']=$_POST['id'] ;
            $this->model->modifier($transport['statut'],$transport['id']) ;
            if(isset($_POST['just']))
            {
            $just = $_POST['just'];
            $this->model->modifierJust($just,$transport['id']) ;
            }
            header("location:".URL."adminController/afficher_admin_transporteur");

     
        
    }  

    public function rechercher()
    {
        
    }

    public function afficher_admin_annonces()
    {
        $annonces = [] ;
        $annonces=$this->model->get_annonces();
        require_once(APP .'view/annoncesAdministrateur.php');
        
        
   
    }


    public function afficher_profil_user($id)
    {
       $_SESSION['user_id'] = $id ;
       $_SESSION['type']="client";
       require_once(APP .'model/User.php');
       $user= new User();
       $row =$user->findUser($id) ;
       if($row->type == "transporteur")
       {
        $t =$user->search_transporteur($row->email) ;
        $_SESSION['t_id']= $t->transporteur_id;
        $_SESSION['type']="transporteur";
        header("location:".URL."profilsController/profilUser");
        
       }

    }
    public function afficher_admin_signalement()
    {
        $f = [] ;
        require_once (APP . 'model/signalement.php');
        $signalement = new signalement() ;
        require_once (APP . 'model/User.php');
        $user = new User() ;
        $f=$signalement->get_signalement();
        $i = 0 ;
        $signalements = [] ;
        foreach($f as $s)
        {
            $signalements[$i]['user'] =$user->findUser($s->id_clent) ;
            $signalements[$i]['transporteur'] = $user->findT($s->transporteur_id) ;
            $signalements[$i]['id'] = $s->id ;
            $signalements[$i]['annonce'] =$s->id_annonce ;
            $signalements[$i]['type'] =$s->type;
            $i++;
            
        }
        $count = $i;
        require_once(APP .'view/administrateur_signalement.php');
        
   
    }

    public function afficher_admin_news()
    {
        $news = [] ;
        $news=$this->model->get_news_model();
        require_once(APP .'view/administrateurNews.php');
        
   
    }

    public function modifier_annonce() 
    {
        $id=$_POST['id_annonce'] ;
        $this->model->valider($id) ;
        header("location:".URL."adminController/afficher_admin_annonces");
        

    }

    public function supprimer_annonce() 
    {
        $id=$_POST['id_annonce'] ;
        $this->model->supprime($id) ;
        header("location:".URL."adminController/afficher_admin_annonces");
        

    }

    public function modifier_transporteur() 
    {
        $id=$_POST['id_trans'] ;
        $this->model->valider_transporteur($id) ;
        if($_POST['demande']=="non")
        {
            $this->model->modifier("valide",$id) ;
        }
      
        header("location:".URL."adminController/afficher_admin_transporteur");
        

    }

    public function principale()
    {
        require_once(APP .'view/adminstrateur_principale.php');
    }

    public function modifierTarif()
    {
        $id=$_POST['id_annonce'] ;
        $tarif=$_POST['tarif'] ;
        $this->model->validerTarif($id,$tarif) ;
        header("location:".URL."adminController/afficher_admin_annonces");
    }


    public function afficher_admin_clients()
    {
        
        $cl=$this->model->get_clients() ;
       
        require_once(APP .'view/administrateur_clients.php');
    }

    public function afficher_admin_utilisateurs()
    {
      
       
        require_once(APP .'view/admin_utilisateurs.php');
    }

    public function bloquer()
    {
       $id = $_POST['user_id'] ;
       $this->model->bloquer($id) ;
       header("location:".URL."adminController/afficher_admin_clients");

    }
}
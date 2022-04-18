<?php 
class profilsController extends Controller {

    public function __construct() {
       
        require_once (APP . 'model/User.php');
        $this->model = new User();
    }

    
    public function showAnnoncesValidees()
    {
       $transporteurs = [];
       $anno =[];
       $i=0;
       $annonces=$this->model->findAnnonceClient($_SESSION['user_id']) ;
       foreach($annonces as $annonce)
       {
        $anno[$i]=$annonce;
        $transporteurs[$i]=$this->model->findTransport($annonce->id_annonce);
        $i++;
       }
      $count=$i;
       
         $ANNON['annonces']=$anno;
         $ANNON['transporteurs']=$transporteurs;
         $ANNON['count']=$count;
        $i = 0;
         if($_SESSION['type']=="transporteur")
         {
            $annocesTran = [] ;
            $Clients = [];
           
            $t=$this->model->findAnnonceTrans($_SESSION['t_id']) ;
            foreach($t as $annonce)
       {
        $annocesTran[$i]=$annonce;
        $Clients[$i]=$this->model->findUser($annonce->id_annonce);
        $i++;
       }
            
        $count2 = $i;
        $ANNON['annoncesT']=$annocesTran;
        $ANNON['clients']=$Clients;
        $ANNON['count2']=$count2;
         }
         require_once ('../application/view/AnnoncesTransaction.php'); 
        


                
    }
    public function showAnnoncesProfil()
    {
       $transporteurs = [];
       $anno =[];
       $i=0;
       $annonces=$this->model->findAnnonceClient($_SESSION['user_id']) ;
       foreach($annonces as $annonce)
       {
        $anno[$i]=$annonce;
        $transporteurs[$i]=$this->model->findTransport($annonce->id_annonce);
        $i++;
       }
      $count=$i;
       
         $ANNON['annonces']=$anno;
         $ANNON['transporteurs']=$transporteurs;
         $ANNON['count']=$count;
         require_once ('../application/view/AnnoncesEnAttente.php'); 
        
                
    }

    public function profilUser() 
    {

        $donnees['user']= $this->model->findUser($_SESSION['user_id']) ;
       
        if(isset($_SESSION['t_id']))
   {
    $donnees['transporteur']=$this->model->findT($_SESSION['t_id']) ;
    $donnees['wilayas']=$this->model->findTransportWil($_SESSION['t_id']) ;
    $donnees['arrive']=$this->model->findTransportWil2($_SESSION['t_id']) ;
    $note= $this->model->findNote($_SESSION['t_id']) ;
    $gain= $this->model->findGain($_SESSION['t_id']) ;
   }
    
   require_once ('../application/view/ProfilUser.php'); 

  
    }


 

    public function profilTransporteur($id)
    {
        
        $TR['transporteur']=$this->model->findT($id) ;
        $TR['wilayas']=$this->model->findTransportWil($id) ;
        $TR['arrive']=$this->model->findTransportWil2($id) ;
        require_once ('../application/view/profilTransporteur.php'); 
       
    }

    public function profilClient($id)
    {
        $CL['client']=$this->model->findUser($id) ;
        require_once ('../application/view/profilClient.php'); 
        
    }


    public function listeSignalement() 
    {
        $signalements =[] ;
        require_once (APP . 'model/User.php');
        $user = new User() ;
        require_once (APP . 'model/signalement.php');
        $signalement = new signalement() ;
        $k=$signalement->get_signalement_client($_SESSION['user_id']);
        $i = 0 ;
        $signalements = [] ;
        foreach($k as $s)
        {
           
            $signalements[$i]['transporteur'] = $user->findT($s->transporteur_id) ;
            $signalements[$i]['id'] = $s->id ;
            $signalements[$i]['annonce'] =$s->id_annonce ;
            $signalements[$i]['type'] =$s->type;
            $signalements[$i]['texte'] =$s->texte;
            $i++;
            
        }
        $count = $i;
        
        require_once(APP .'view/MesSignalement.php');
    }

    
}
?>
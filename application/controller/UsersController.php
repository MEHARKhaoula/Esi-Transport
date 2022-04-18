

<?php
class UsersController extends Controller {
    public function __construct() {
       
        require_once (APP . 'model/User.php');
        $this->model = new User();
    }

    public function connect()
{
   $db = "mysql:dbname=tdw; host: 127.0.0.1";

    try{
       $c= new PDO($db,"root","");
   
    }
    catch(PDOException $ex){
    printf("erreur de connexion", $ex->getMessage());
    exit();
    }
    return $c;
}


    public function Inscrire() {
        $wilayas= $this->model->allWilaya();
        $user['wilayas'] = $wilayas;
           
     

      if(isset($_POST['inscrire'])){
     
        $wilayas= $this->model->allWilaya();
    
    
        $user =[];
              $user['username']=$_POST['nom'] ;
              $user['type'] = $_POST['type'];
              $user['email'] = $_POST['email'];
              $user['password'] = $_POST['pass'];
              $user['userprenom']=  $_POST['prenom'];
              $user['adresse']= $_POST['address'];
              $user['telephone']= $_POST['phone'];
              $user['trajets']=$_POST['lang'] ;
              $user['arrives']=$_POST['lang2'] ; 
              $user['certifie']=$_POST['certifie'] ;
          
            $this->model->Inscrire($user);
            $this->model->Inscrire2($user);
            header("location:".URL."home/index");
             
            
           
            
        }
        require_once ('../application/view/Inscription.php'); 
       
    }

    public function certifie($id) {
      $this->model->certifie($id) ;
      header("location:".URL."profilsController/profilUser");
    }

    public function login() {
      
       $user = [];
       $erreur ="" ;
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
           
            

            $user['username'] =$_POST['username'] ;
             
            $user['password'] = $_POST['password'] ;
        
     
           

          
          
                $verifier = $this->model->login($user['username'], $user['password']);
            
                if ($verifier) {
                    $_SESSION['user_id'] = $verifier->user_id;
                    $_SESSION['username'] = $verifier->nom;
                    $_SESSION['email'] = $verifier->email;
                    $_SESSION['type'] =$verifier->type;
                    if($_SESSION['type']=="transporteur")
                    {
                        $_SESSION['t_id']=$this->model->search_transporteur($user['username'])->transporteur_id;

                    }
                    header('location:' . URL . 'home/index');
                } else {

                    $admin  = $this->model->loginAdmin($user['username'], $user['password']) ;
                    if($admin)
                    {
                        $_SESSION['admin'] ="b";
                      header  ('location:' . URL . 'home/index');
                        
                    }
                    else
                    {
                        $erreur="mot de passe incorrect ou vous ete bloqué" ;
                    }
                  
                    

                 
                }
           

        } 
        require_once ('../application/view/Login.php'); 
    }

    

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['t_id']);
        unset($_SESSION['admin']);
        header('location:' . URL . '/UsersController/login');
    }

   /* public function profil()
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
       
         $donnees['annonces']=$anno;
         $donnees['transporteurs']=$transporteurs;
         $donnees['count']=$count;
        
        $this->view('users/profil',$donnees);
                
    } */

   /* public function profilUser() 
    {

        $donnees['user']= $this->model->findUser($_SESSION['user_id']) ;
       
        if(isset($_SESSION['t_id']))
   {
    $donnees['transporteur']=$this->model->findT($_SESSION['t_id']) ;
    $donnees['wilayas']=$this->model->findTransportWil($_SESSION['t_id']) ;
   }
   $this->view('ProfilUser',$donnees);
    } */


}

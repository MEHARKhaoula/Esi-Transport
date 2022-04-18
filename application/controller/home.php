<?php




class Home extends Controller
{
   
    public function __construct() {
        require_once (APP . 'model/home.php');
        $this->model = new Homes();
     }

    
     
    public function index()
    {
        $r=$this->model->get_diaporama_model();
        $homeElements =[];
        $d=$this->model->get_annonces_model();
        $homeElements['title']='Accueil';
        $homeElements['annonces']=$d;
        $homeElements['wilayas']=$this->model->get_all_wilayas() ;
        $homeElements['poids']=$this->model->get_all_poids() ;
        $homeElements['volume']=$this->model->get_all_volume() ;
        $homeElements['diaporama']=$r;
       
        require_once ('../application/view/home/index.php'); 
      
        
    }

      
    public function add() {
        $annonceAjoutee=[

        ];
  
    


$annonceAjoutee = [
'titre'=>$_POST['titre'],
'description'=>$_POST['description'],
'wilaya_depart'=>$_POST['depart'],
'wilaya_arrive'=>$_POST['arrive'],
'typetransport'=>$_POST['type'],
'poids'=>$_POST['poids'],
'moyen_transport'=>$_POST['moyen'],
'etat'=>'non',
'volume'=>$_POST['volume'],
'file'=>$_FILES["uploadfile"]["name"],
'client'=>$_SESSION['user_id'],
] ;
$filename =$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];

$folder = "../public/img/".$filename;	
move_uploaded_file($tempname, $folder);
$this->model->addAnnonce($annonceAjoutee) ;


         header("location:".URL."home/index");
} 


}

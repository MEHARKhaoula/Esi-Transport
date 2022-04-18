<?php
class newsController extends Controller{
    public function __construct() {
        require_once (APP . 'model/News.php');
        $this->model = new News();
     }


     public function show() 
     {
     $n =$this->model-> get_news_model();
    
    require_once ('../application/view/NewsView.php'); 
     }

     public function details_news() 
     {
         $news = $this->model->get_info_news($_POST['news_id_afficher']) ;
         require_once ('../application/view/afficherNews.php'); 
     }

     public function detail_news($id) 
     {
         $news = $this->model->get_info_news($id) ;
         require_once ('../application/view/afficherNews.php'); 
     }


     public function add()
     {
         $new = [];
         $new['titre'] = $_POST['titre'];
         $new['texte'] = $_POST['description'];
         $new['file'] = $_FILES["uploadfile"]["name"];


         $filename =$_FILES["uploadfile"]["name"];
          $tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../public/img/images/news/".$filename;	
move_uploaded_file($tempname, $folder);
         $this->model->insert($new);

         header  ('location:' . URL . 'adminController/afficher_admin_news');
     }
    }

    ?>
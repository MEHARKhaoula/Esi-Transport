<?php

Class AnnonceView
{
    public $data =[];


    public function __construct($data)
  {
    $this->data=$data;
  }


    public function afficher_annonces()
{

    $i=0;
      echo'<div class="container">';
      while ($row = $this->data['annonces']->fetch(PDO::FETCH_ASSOC) ) 
      {
        $link="../public/img/".$row['img'];
        if($row['supp']==0 && $row['etat']=='oui' && $row['termine']=='en cours' && $row['archive']==0) {
      
        if($i < 4)
        {
          echo '<div class="card">';
          echo '<img class="ann" src='.$link.">";
          echo '<h2 class="titre__body">'.$row['titre'].'</h2>';
          echo '<p class="card__body">'.$row['description']."</p>";
        
          ?>
           <form  method="post" action="<?php echo URL; ?>annoncesController/details_annonces" >
           <input type="hidden" name="annonce_id_afficher" value="<?php echo  $row['id_annonce']; ?>" />
            <button type="submit" class="tag-blue tag" name="submit_show_annonce" value="Update" > Lire la suite </button>      
           </form>
           <?php
           echo '</div>';
           $i++;
        }
        else{
          if($i <= 7)
          {
            echo '<div class="card">';
            echo '<img class="ann" src='.$link.">";
            echo '<h2 class="titre__body">'.$row['titre'].'</h2>';
            echo '<p class="card__body">'.$row['description']."</p>";
         
            ?>
           <form  method="post" action="<?php echo URL; ?>annoncesController/details_annonces" >
           <input type="hidden" name="annonce_id_afficher" value="<?php echo htmlspecialchars($row['id_annonce'], ENT_QUOTES, 'UTF-8'); ?>" />
            <button type="submit" class="tag-blue tag" name="submit_show_annonce" value="Update" > Lire la suite </button>      
           </form>
           <?php
            echo '</div>';
            $i++;
          }
        
else{
  break;
}
        }
      }
        
      }
      echo'</div>' ;
     
   

   
    
}


public  function rechercher()
{
  ?>
  <form action="" method="post" >
      <label for="d">Wilaya de départ:</label><br>
        <input type="text" name="d"  /><br>
        <label for="a">Wilaya darrive:</label><br>
        <input type="text" name="a"  /><br>
        <input type="submit" value="Rechercher" name="rech"/>
        
          <?php
if (isset($_POST['rech'])  )
 {
 
  $depart= $_POST['d'];
  $arriv=$_POST['a'];
  $c= new AnnonceController();
  $res=$c->get_annonce_recherche_controller($depart,$arriv);
  $i=0;
  
 if(!is_bool($res))
  {
    echo'<div class="container">';
  while ($row = $res->fetch(PDO::FETCH_ASSOC) ) 
  {
    
    $i++;
    $link="../images/".$row['img'];
  
    if($i < 5)
    {
      echo '<div class="card">';
      echo '<img class="ann" src='.$link.">";
      echo '<h2 class="titre">'.$row['titre'].'</h2>';
      echo '<p class="card__body">'.$row['description']."</p>";
      echo '<button  class="tag-blue tag" >Lire la suite</button>'; 
      echo '</div>';
     
    }
    else{
      
     
    $i=0;

  
  }
 

}

echo '</div>' ;
  }
}
}

   
}
?>

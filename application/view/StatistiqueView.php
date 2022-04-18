

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
<meta charset="utf-8">
    
    <title>bs4 sevices page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<style>

body {

margin:5%;
padding:5%;
}

  .carde::after {
    display: block;
    position: absolute;
    bottom: -10px;
    left: 20px;
    width: calc(100% - 40px);
    height: 35px;
    background-color: #fff;
    -webkit-box-shadow: 0 19px 28px 5px rgba(64,64,64,0.09);
    box-shadow: 0 19px 28px 5px rgba(64,64,64,0.09);
    content: '';
    z-index: -1;
}
a.carde {
    text-decoration: none;
}

.carde {
    position: relative;
    border: 0;
    border-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09);
    box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09);
}
.carde {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 300px;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,0.125);
    border-radius: .25rem;
}

.box-shadow {
    -webkit-box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09) !important;
    box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09) !important;
}

.ml-auto, .mx-auto {
    margin-left: auto !important;
}
.mr-auto, .mx-auto {
    margin-right: auto !important;
}
.rounded-circle {
    border-radius: 50% !important;
}
.bg-white {
    background-color: #fff !important;
}

.ml-auto, .mx-auto {
    margin-left: auto !important;
}

.mr-auto, .mx-auto {
    margin-right: auto !important;
}
.d-block {
    display: block !important;
}
img, figure {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}

.carde-text {
    padding-top: 12px;
    color: #8c8c8c;
}

.text-sm {
    font-size: 12px !important;
}





  .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;

 /* max-width: 80%px;*/
  margin-block: 2rem;
  gap: 2rem;
}

img {
  max-width: 100%;
  height:50%;
  display: block;
  object-fit: cover;
}

.card {
  height:400px;
  position: relative;
  display: flex;
  flex: 0 0 21%; 
  text-align: center;
  flex-direction: column;
  width: clamp(20rem, calc(20rem + 2vw), 22rem);
  overflow: hidden;
  box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
  border-radius: 1em;
  background: #ECE9E6;
background: linear-gradient(to right, #FFFFFF, #ECE9E6);

}



p.card__body {
 
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
 
 
}

.titre__body{
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  
}
.tag {
  align-self: flex-end;
  padding: .25em .75em;
  border-radius: 1em;
  font-size: .75rem;
  position: absolute;
  bottom: 5%;
  left: 20%;
  text-align: center;
}

.tag + .tag {
 /* margin-left: .5em;*/
  position: absolute;
  bottom: 0;
  left: 0;
}

.tag-blue {
  background: #56CCF2;
  text-align: center;
background: linear-gradient(to bottom, #2F80ED, #56CCF2);
  color: #fafafa;
  border-radius: 2px;
    min-width: 121px;
    font-size: 13px;
    padding: 7px 0 7px 0;
}





.card__body h4 {
  font-size: 1.5rem;
  text-transform: capitalize;
}

.card__footer {
  display: flex;
  padding: 1rem;
  margin-top: auto;
}

.user {
  display: flex;
  gap: .5rem;
}

.user__image {
  border-radius: 50%;
}

.user__info > small {
  color: #666;
}



</style>
<body>
<?php require_once('../application/view/Menu.php') ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section class="container pt-3 mb-3">
   
    <div class="row pt-5 mt-30">
        <div class="col-lg-4 col-sm-6 mb-30 pb-5">
            <a class="carde" href="#">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user fa-3x head-icon"></i></div>
                <div class="carde-body text-center">
                    <h3 class="carde-title pt-1"> <?php echo $countUser?> Utilisateurs</h3>
                 
                </div>
            </a>
        </div>
       
        
        <div class="col-lg-4 col-sm-6 mb-30 pb-5">
            <a class="carde" href="#">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-icon"></i></div>
                <div class="carde-body text-center">
                <h3 class="carde-title pt-1"> <?php echo $countTransp?> Transporteurs</h3>
                   
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-5">
            <a class="carde" href="#">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-icon"></i></div>
                <div class="carde-body text-center">
                <h3 class="carde-title pt-1"> <?php echo $countAnnonce?> Annonces</h3>
                </div>
            </a>
        </div>
        
    </div>
</section>

<?php


echo '<h2 class="h3 block-title text-center">Top Annonces</h2>';
$i=0;
      echo'<div class="container">';
    foreach($statistiques as $annonce)
      {
        $link="../public/img/".$annonce->img;
      
        if($i < 4)
        {
            echo '<div class="card">';
            echo '<img class="ann" src='.$link.">";
            echo '<h2 class="card__header">'.$annonce->titre.'</h2>';
            echo '<p class="card__body">'.$annonce->description.'</p>';
          
            ?>
             <form  method="post" action="<?php echo URL; ?>annoncesController/details_annonces" >
             <input type="hidden" name="annonce_id_afficher" value="<?php echo  $annonce->id_annonce; ?>" />
              <button type="submit" class="tag-blue tag" name="submit_show_annonce" value="Update" > Lire la suite </button>      
             </form>
             <?php
             echo '</div>';
        }
        else{
          $i=0;
        }
        $i++;
        }
      
     
      echo'</div>' ;
     
     
      require_once("../application/view/footer.php") ;
     

?>




      
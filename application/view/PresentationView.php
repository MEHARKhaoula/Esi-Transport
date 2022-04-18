<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../public/css/aboutus.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
 
body {

margin:5%;
padding:5%;
}

   img{
      height:500px;
      width:100%;
   }
   </style>
</head>
<body>
<?php require_once('../application/view/Menu.php') ?>
  
    
 


<section class="" id="section">
   <div class="container text-center">
   <img   src="../public/img/images/presentation/<?php echo  $presentation->img?>" >
      <h2 style="margin-right:35%">
       Presentation de notre site
      </h2>
      <h3 style="margin-right:43%">
         VTC ESI
      </h3>
      <div class="col-md-8 col-md-offset-2">
         <div class="red-border">
            &nbsp;
         </div>
         <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
         <?php echo  $presentation->objectif  ?>
         </p>
         <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
         <?php echo  $presentation->fonctionne  ?>
         </p>
         <video width="100%" height="400" controls>
      <source src="../public/videos/<?php echo  $presentation->video?>" type=video/ogg>
      
    </video>
      </div>
 
</section>
<?php 
 require_once("../application/view/footer.php") ;
 ?>


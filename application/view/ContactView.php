
<link rel="stylesheet" href="../public/css/aboutus.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {

margin:5%;
padding:5%;
}
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand">VTC <b>ESI</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
    <?php if(isset($_SESSION['user_id'])) : ?>
    <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="40" height="40" class="rounded-circle"></a>
				<div class="dropdown-menu">		
        <a href="<?php echo URL; ?>/profilsController/profilUser" class="dropdown-item">Profil</a>			
					<a href="<?php echo URL; ?>/profilsController/showAnnoncesProfil" class="dropdown-item">Annonces en attentes</a>
					<a href="<?php echo URL; ?>/profilsController/showAnnoncesValidees" class="dropdown-item">Transactions</a>
					<a href="<?php echo URL; ?>/demandesController/afficher_demandes" class="dropdown-item">Demandes des transporteurs</a>
					<a href="<?php echo URL; ?>/demandesController/afficher_reponses_clients" class="dropdown-item">Reponses des clients</a>
                </div>
            </div>
            <?php endif ?>
			<a href="<?php echo URL; ?>/home/index" class="nav-item nav-link">Accueil</a>
			<a href="<?php echo URL; ?>/presentationController/show" class="nav-item nav-link">Presentation</a>							 
			<a href="<?php echo URL; ?>/newsController/show" class="nav-item nav-link ">News</a>
			<a href="<?php echo URL; ?>/UsersController/Inscrire" class="nav-item nav-link">Inscription</a>
      <a href="<?php echo URL; ?>/statistiqueController/show" class="nav-item nav-link">Statistique</a>
			<a href="<?php echo URL; ?>/ContactController/show" class="nav-item nav-link">Contact</a>
		</div>
	

	</div>
</nav>

<div class="ct-pageWrapper" id="ct-js-wrapper">


<section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
   <div class="container">
      <div class="col-md-8 col-md-offset-2">
         <h2>
            Contactez nous 
         </h2>
         <br>
         <h3>
            VTC ESI
         </h3>
         <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">
            
         </p><br>
      </div>
      <div class="row ct-u-paddingBoth20">
         <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
               <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
               <p>
               Telephone
               </p>
               <p class="company-icons-subtext hidden-xs">
                 <?php  echo $contact->telephone ?>
               </p>
            </div>
         </div>
         <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
               <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
               <p>
                  Email
               </p>
               <p class="company-icons-subtext hidden-xs">
               <?php  echo $contact->mail ?>
               </p>
            </div>
         </div>
         <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
               <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
               <p>
                  Adresse
               </p>
               <p class="company-icons-subtext hidden-xs">
               <?php  echo $contact->adresse ?>
               </p>
            </div>
         </div>
      </div>
     
      <a class="ct-u-marginTop60 btn btn-solodev-red-reversed btn-fullWidth-sm ct-u-size19" href="/">Contactez nous</a>
   </div>
</section>



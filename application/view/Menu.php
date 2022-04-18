<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a href="#" class="navbar-brand">VTC <b>ESI</b></a>  				
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> 
		<span class="navbar-toggler-icon"></span>
	</button>

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
    <?php if(isset($_SESSION['user_id'])  && !isset($_SESSION['admin']) ) { ?>
    <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="40" height="40" class="rounded-circle"></a>
				<div class="dropdown-menu">		
        <a href="<?php echo URL; ?>/profilsController/profilUser" class="dropdown-item">Profil</a>			
					<a href="<?php echo URL; ?>/profilsController/showAnnoncesProfil" class="dropdown-item">Annonces en attentes</a>
					<a href="<?php echo URL; ?>/profilsController/showAnnoncesValidees" class="dropdown-item">Transactions</a>
					<a href="<?php echo URL; ?>/demandesController/afficher_demandes" class="dropdown-item">Demandes des transporteurs</a>
					<a href="<?php echo URL; ?>/profilsController/listeSignalement" class="dropdown-item"> Mes signalements </a>
					<?php if($_SESSION['type'] == "transporteur")  {?>

                       <a href="<?php echo URL; ?>/demandesController/afficher_reponses_clients" class="dropdown-item">Reponses des clients</a>
					
					 <?php  } ?>
                </div>
            </div>
            <?php } ?>
			<a href="<?php echo URL; ?>/home/index" class="nav-item nav-link">Accueil</a>
			<a href="<?php echo URL; ?>/presentationController/show" class="nav-item nav-link">Presentation</a>							 
			<a href="<?php echo URL; ?>/newsController/show" class="nav-item nav-link ">News</a>
			<a href="<?php echo URL; ?>/UsersController/Inscrire" class="nav-item nav-link">Inscription</a>
      <a href="<?php echo URL; ?>/statistiqueController/show" class="nav-item nav-link">Statistique</a>
			<a href="<?php echo URL; ?>/ContactController/show" class="nav-item nav-link">Contact</a>
		</div>
	<?php if(!isset($_SESSION['user_id']) && !isset($_SESSION['admin']) ) { ?>
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="<?php echo URL; ?>/UsersController/login"  class="nav-link dropdown-toggle mr-4">Connexion</a>
              
			</div>
			<div class="nav-item dropdown"> 
				<a href="<?php echo URL; ?>/UsersController/Inscrire"  class="btn btn-primary dropdown-toggle sign-up-btn">Inscription</a>    
			</div>
        </div>

        <?php }   else { if(isset($_SESSION['admin'])) {?>
          
          <div class="navbar-nav ml-auto action-buttons">
          <div class="nav-item dropdown">
				<a href="<?php echo URL; ?>/adminController/principale"  class="btn btn-primary dropdown-toggle sign-up-btn">Dashboard</a>    
			</div>
			<div class="nav-item dropdown">
				<a href="<?php echo URL; ?>/UsersController/logout"  class="nav-link dropdown-toggle mr-4">Deconnexion</a>
              
			</div>
    
        </div>
        <?php } else { ?>
          <div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="<?php echo URL; ?>/UsersController/logout"  class="nav-link dropdown-toggle mr-4">Deconnexion</a>
              
			</div>

      <?php } ?>
        <?php } ?>

	</div>
</nav>
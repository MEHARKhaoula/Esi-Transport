

<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {

margin:5%;
padding:5%;
}
</style>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	
	<link rel="stylesheet" type="text/css" href="../public/css/my-login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body class="my-login-page">
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
<br> <br>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
								
									</div>
								</div>

								<div class="form-group">
                                <label for="email">Mot de passe</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								   
								    	<?php echo $erreur ?>
							    
								</div>




                                                                      

				
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary ">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Vous n'avez pas un compte? <a href="<?php echo URL; ?>/UsersController/Inscrire">Creer un</a>
								</div>
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>

	<?php 
 require_once("../application/view/footer.php") ;
 ?>
</body>
</html>



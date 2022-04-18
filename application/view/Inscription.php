<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/register/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../public/css/register/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/css/register/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../public/css/register/css/style.css">
    <style>
body {

margin:5%;
padding:5%;
}
</style>
   
  </head>
  <body>
  


    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      h1, h2, h3, h4, h5, h6 {
  font-weight: 400;
}
      </style>
</head>

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
<div class="container">

  
  <form  id="register-form"
                method="POST"
                action="<?php echo URL; ?>/UsersController/inscrire">
                <h1 style="font-weight: 400;"> Inscription </h1>
    <div class="form-group">
      <label for="usr">Nom:</label>
      <input type="text" class="form-control"  name="nom">
    </div>
    <div class="form-group">
      <label for="usr">Prenom:</label>
      <input type="text" class="form-control"  name="prenom">
    </div>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control"  name="email">
    </div>

    <div class="form-group">
      <label for="usr">Telephone:</label>
      <input type="num" class="form-control"  name="phone">
    </div>
    <div class="form-group">
      <label for="usr">Adresse:</label>
      <input type="text" class="form-control"  name="address">
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe:</label>
      <input type="password" class="form-control"  name="pass">
    </div>
    
    <div class="form-group">
    <label class="control control--checkbox">Je veux etre un transporteur
            <input type="checkbox" onchange='handleChange(this);' name="check"  value="non"/>
            <div class="control__indicator"></div>
          </label>
    </div>
    <div id="div1" style="display:none">       

              <div class="form-group">
              <h3> Veuillez entrez les wilayas de départs </h3> 
              <?php foreach($user['wilayas'] as $wil): ?>     
      <label class="control control--checkbox"><?php echo $wil->nom;?>
            <input type="checkbox" name='lang[]'  value="<?php echo $wil->nom;?>"/>
            <div class="control__indicator"></div>
          </label>
      <?php endforeach; ?>
              </div>

              <div class="form-group">
              <h3> Veuillez entrez les wilayas d'arrivés </h3> 
              <?php foreach($user['wilayas'] as $wil): ?>     
      <label class="control control--checkbox"><?php echo $wil->nom;?>
            <input type="checkbox" name='lang2[]'  value="<?php echo $wil->nom;?>"/>
            <div class="control__indicator"></div>
          </label>
      <?php endforeach; ?>
              </div>
           
              <div class="form-group">
              <h3> Cochez si vous voulez etre certifié </h3> 
    <label class="control control--checkbox">oui
            <input type="checkbox" onchange='handleChange2(this);' name="cert"  value="non"/>
            <div class="control__indicator"></div>
          </label>
          </div>
          </div>
          <div class="form-group">
            <button  type="submit" value="submit" name="inscrire" class="btn btn-info">S'inscrire</button> 
            </div>
    </div>
            </div>
            <input type="hidden"  name="type" value="client" id="h">
            <input type="hidden"  name="certifie" value="non" id="j">
           
        </form>
</div>
<?php 
 require_once("../application/view/footer.php") ;
 ?>
</body>
</html>

   
                    

                      
                  




    


            
            
           

             
     
      
    

  
 <script>
    function handleChange(checkbox) {
        if(checkbox.checked == true){
            document.getElementById("div1").style.display = "inline-block";
            document.getElementById("h").value = "transporteur";
        }
        else{
            document.getElementById("div1").style.display = "none";
            document.getElementById("h").value = "client";
            }
    }
    
    function handleChange2(checkbox) {
        if(checkbox.checked == true){
           
            document.getElementById("j").value = "oui";
        }
        else{
            document.getElementById("j").value = "non";
            }
    }
    
        </script>
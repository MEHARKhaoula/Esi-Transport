<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<style> 
.center{
  margin-left:50%;
}


 .form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #33cabb;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	border-color: #dfe3e8;
	border-radius: 4px !important;
	box-shadow: none
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .sign-up-btn {
	min-width: 110px;
	max-height: 36px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}
.navbar .navbar-form {
	border: none;
}
.navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.navbar .action-form a {		
	color: #33cabb;
	padding: 0 !important;
	font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #33cabb !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #31bfb1 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
	color: #fff;
	margin: 0;
	padding: 0 !important;
	font-size: 13px;
	border: none;
	transition: all 0.4s;
	text-align: center;
	line-height: 34px;
	width: 47%;
	text-decoration: none;
}
.navbar .social-btn .facebook-btn {
	background: #507cc0;
}
.navbar .social-btn .facebook-btn:hover {
	background: #4676bd;
}
.navbar .social-btn .twitter-btn {
	background: #64ccf1;
}
.navbar .social-btn .twitter-btn:hover {
	background: #4ec7ef;
}
.navbar .social-btn .btn i {
	margin-right: 5px;
	font-size: 16px;
	position: relative;
	top: 2px;
}
.or-seperator {
	margin-top: 32px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	color: #666;
	padding: 0 8px;
	width: 30px;
	height: 30px;
	font-size: 13px;
	text-align: center;
	line-height: 26px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -15px;
	z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
	display: none;
}
.form-check-label input {
	position: relative;
	top: 1px;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu .action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.navbar .form-inline {
		display: block;
	}
	.navbar .input-group {
		width: 100%;
	}
}
 




body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #F9F7F0;
}

.topnav a {
  float: left;
  color: #072A40;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>
<link rel="stylesheet" href="<?php echo URL ?>css/style.css"> 
   
    <link rel="stylesheet" href="<?php echo URL ?>css/diaporama.css">
    <link rel="stylesheet" href="<?php echo URL ?>css/annonce.css">
    <link rel="stylesheet" href="<?php echo URL ?>css/annonce_card.css">
</head>
<body>
 
<?php
require_once("../application/view/Menu.php") ;
?>

       


  
     <?php
  
       
        
       
        echo'<div class="slideshow-container">';
        while ($row = $homeElements['diaporama']->fetch(PDO::FETCH_ASSOC) ) 
        {
         $link= URL ."img/images/diaporamas/".$row['img'];  ?>
         <div class="mySlides fade">
        
       <a href="<?php echo URL."newsController/detail_news/".$row['id_contenu'];?>"> <img class="dia" src=<?php echo$link?> > </a>
  
       </div>  
       <?php   

        } 
?>
        </div>
        
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
     <script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); 
      }
      </script>
     
     
    <br>
    <form action="<?php echo URL; ?>/annoncesController/rechercher" method="post" >
    <div class="row" >
  <div class="col">
    <input type="text" class="form-control" placeholder="Wilaya de départ" name="d">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Wilaya darrive" name="a">
  </div>
  <div class="col">
  <input type="submit" value="Rechercher" class="btn btn--radius-2 btn--blue-2" style="height:40px"name="rech"/> 
  </div>
</div>
</form>
    
    <?php
    require_once("../application/view/Annonce.php") ;
    $c= new AnnonceView($homeElements);
    $c->afficher_annonces() ;
    ?>
   
        <div class="wrapper wrapper--w900">
            
           
        <?php if(isset($_SESSION['user_id']))  { ?>
                <form action="<?php echo URL; ?>home/add" method="post" id="form1"  enctype="multipart/form-data">

                        <div class="form-row">
                            <div class="name">Titre</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="titre" placeholder="titre">
                            </div>
                            </div>
                          

                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            </div>

                            <div class="form-row">
                            <div class="name">Départ</div>
                            <div class="value">
                                
                                <SELECT name="depart" size="1" class="form-control"> 
          
          <?php foreach ($homeElements['wilayas'] as $wilaya) { 
           
           echo"<OPTION value='".$wilaya->nom."' >" .$wilaya->nom."</option>";
          }
            
          ?>
          </select>
                                </div>
                            </div>
                      


                        <div class="form-row">
                            <div class="name" >Arrive</div>
                            <div class="value">
                            <SELECT name="arrive" class="form-control" size="1"> 
          
          <?php foreach ($homeElements['wilayas'] as $wilaya) { 
           
           echo"<OPTION value='".$wilaya->nom."' >" .$wilaya->nom."</option>";
          }
          ?>
              </select>
                            </div>
                        </div>
                    

                        <div class="form-row">
                            <div class="name">Type de transport</div>
                            <div class="value">
                            <SELECT name="type" class="form-control" size="1">
        <OPTION value="colis">colis
        <OPTION value="demenagement">demenagement
        <OPTION value="lettre">lettre
        <OPTION value="colis léger">colis léger
        <OPTION value="meuble">meuble
        <OPTION value="electromenager">electromenager
        </SELECT>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Moyen transport</div>
                            <div class="value">
                            <SELECT name="moyen" size="1" class="form-control">
        <OPTION value="voiture">voiture
        <OPTION value="camion">camion
        <OPTION value="bus">bus
          <OPTION value="avion">avion
         
        </SELECT>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Poids</div>
                            <div class="value">
                            <SELECT name="poids" size="1" class="form-control">
        <?php foreach ($homeElements['poids'] as $poids) { 
           
           echo"<OPTION value=".htmlspecialchars($poids->fourchette, ENT_QUOTES, 'UTF-8').">".htmlspecialchars($poids->fourchette, ENT_QUOTES, 'UTF-8')."</option>";
          }
            
          ?>
          </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Volume</div>
                            <div class="value">
                            <SELECT name="volume" size="1" class="form-control">
          
          <?php foreach ($homeElements['volume'] as $volume) { 
             
             echo"<OPTION value='".htmlspecialchars($volume->fourchette, ENT_QUOTES, 'UTF-8')."' >".htmlspecialchars($volume->fourchette, ENT_QUOTES, 'UTF-8')."</option>";
            }
              
            ?>
            </select> 
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">Choisir Image</div>
                            <div class="value">

                                <div class="input-group js-input-file">
                                  
                                    <input  class="input-file" type="file" name="uploadfile" id="file" value=""/>
                                    <label class="label--file" for="file">Choose file</label>
                                   
                              </div>

                            </div>
                        </div> 
                     
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                <button type="submit" onclick="handleChange()" class="btn btn--radius-2 btn--blue-2"> Publier</button> 
                                </div>
                            </div>
                            </div>
                     
                    </form>
               <?php }?>
                    </div>
                            </div>
                        </div>
                      
        

     
       
     

       

       
          <br>
        
    
    <div class="center"> 
    <form  action="<?php echo URL; ?>presentationController/show" method="post">
<button type="submit" class="btn btn--radius-2 btn--blue-2"> Comment cela fonctionne</button> 
        </form>
        </div>
        <?php
 require_once("../application/view/footer.php") ;
 ?>
<script>
    function handleChange() {
        if(document.getElementById("form1").style.display === "none"){
            document.getElementById("form1").style.display = "inline-block";
         
        }
        else{
            document.getElementById("form1").style.display = "none";
           
            }
    }


    </script>

   
    </div>
 
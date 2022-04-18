
<?php
 require APP . 'view/_templates/header.php';
?>

<div class="topnav">
        <a  href="<?php echo URL; ?>/home/index"> Accueil</a>
        <a href="<?php echo URL; ?>/presentationController/show">Presentation</a>
        <a href="<?php echo URL; ?>/news/show"> News</a>
        <a href="<?php echo URL; ?>/insc"> Inscription</a> 
        <a href="<?php echo URL; ?>/insc"> Statistique</a> 
        <a href="<?php echo URL; ?>/insc"> Contact</a> 

    </div>
<div class="main-container"> 

   
    <header class="block">
        <ul class="header-menu horizontal-list">
        <li>
                <a class="header-menu-tab" href="#"><span class="icon entypo-cog scnd-font-color"></span>Mes annonces en attente</a>

            </li>
        <li>
                <a class="header-menu-tab" href="<?php echo URL."users/profilUser/" . htmlspecialchars($_SESSION['user_id'], ENT_QUOTES, 'UTF-8');?>"><span class="icon entypo-cog scnd-font-color"></span>Mon profil</a>

            </li>
            <li>
                <a class="header-menu-tab" href="<?php echo URL."demandes/afficher_demandes";?>"><span class="icon entypo-cog scnd-font-color"></span>Demandes des transporteurs</a>

            </li>
            <?php if($_SESSION['type']=="transporteur"){?>

            <li>
                <a class="header-menu-tab" href="<?php echo URL."demandes/afficher_reponses_clients";?>"><span class="icon fontawesome-user scnd-font-color"></span>Demandes et réponses des clients</a>
            </li>
            <?php }?>
           
            <li>
                <a class="header-menu-tab" href="<?php echo URL."transactions/afficher_transactions";?>"><span class="icon fontawesome-star-empty scnd-font-color"></span>Mes transactions validées</a>
            </li>
        </ul>
        <div class="profile-menu">
        <?php if(isset($_SESSION['user_id']) ) ?>
            <p><?php echo $_SESSION['username'] ?> <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
            <div class="profile-picture small-profile-picture">
                <img width="40px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
            </div>
        </div>
    </header>

   
  
        <div class="tweets block"> 
            <h2 class="titular"><span class="icon zocial-twitter"></span>Liste des annonces</h2>
           
            <?php for ($numero = 0; $numero < $data['count']; $numero++) { if( $data['annonces'][$numero]->transaction==0) {?> 
                 <div class="tweet first">
                <h2><?php echo $data['annonces'][$numero]->titre ;?></h2>
                <p><?php echo $data['annonces'][$numero]->description ;?></p>
               <p><?php echo $data['annonces'][$numero]->date ;?></p>

    <form action="<?php echo URL; ?>annonces/delete" method="post" id="form1" >
       <input type="hidden" name="annonce_id" value="<?php echo htmlspecialchars($data['annonces'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
            <button type="submit" name="submit_delete_annonce" value="Update" > Supprimer </button>      
</form>


<form action="<?php echo URL; ?>annonces/edit" method="post"  >
       <input type="hidden" name="annonce_id2" value="<?php echo htmlspecialchars($data['annonces'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
            <button type="submit" name="submit_edit_annonce" value="Update" > Modifier </button>      
</form> 
<button id="1" class="transpo" name="1" onclick="handleChange(this)" value="<?php echo $numero; ?>">La liste des transporteurs</button>
        
<div  id="<?php echo $numero?>"> 

<?php foreach ($data['transporteurs'][$numero] as $transporteur) {?> 
    <form action="<?php echo URL; ?>demandes/envoyer" method="post"  >
    <input type="hidden" name="id_annonce" value="<?php echo htmlspecialchars($data['annonces'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
    <input type="hidden" name="transporteur_id" value="<?php echo htmlspecialchars($transporteur->id_transporteur, ENT_QUOTES, 'UTF-8'); ?>" />
    <input type="hidden" name="id_user" value="<?php echo htmlspecialchars($data['annonces'][$numero]->id_client, ENT_QUOTES, 'UTF-8'); ?>" />
    <p>Le transporteur numero <?php echo htmlspecialchars($transporteur->id_transporteur, ENT_QUOTES, 'UTF-8'); ?> </p>
    <button  name="submit_transporteur" value="<?php echo $numero?>" > contacter </button>  
</form>
    
    <?php } ?>
</form> 
</div>
               </div>
              

             <?php }} ?> 
       
        </div> 
<script type="text/javascript">
handleChange(button) {
    var f = button.value;
    if(document.getElementById(f).style.display === "none"){
            document.getElementById(f).style.display = "inline-block";
         
        }
        else{
            document.getElementById(f).style.display = "none";
           
            }

   
});
</script>
</body>

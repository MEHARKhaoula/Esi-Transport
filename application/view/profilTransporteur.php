<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
body {

margin:5%;
padding:5%;
}
</style>
    <link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require_once('../application/view/Menu.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<div class="container">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">Type: Transporteur<br></h4>
                    <p class="sm-width-95 sm-margin-auto"><?php if(isset($TR['transporteur'])) { echo "Demande de certification: ".$TR['transporteur']->certifie."<br>";
                    echo "Statut: ".$TR['transporteur']->statut;
                    } ?></p>
        <p class="sm-width-95 sm-margin-auto">

                  <?php 
                   require_once (APP . 'model/User.php');
                  $model = new User();
                  $note= $model->findNote($TR['transporteur']->transporteur_id) ;
                   echo "Note: ".$note; ?>
                 
                    

                  </p>
                 <form id=""  action="<?php echo URL; ?>adminController/modifier" method="post">
               
          
         
          <input type="hidden" name="id" value="<?php echo $TR['transporteur']->transporteur_id;?>">
          
          <div style="display:table-cell"> <?php if($TR['transporteur']->statut=="en attente") {?> <SELECT name="statut" size="1">
        <OPTION value="en attente">en attente
        <OPTION value="en cours de traitement">en cours de traitement
        <OPTION value="valide">valide
        <OPTION value="refuse">refuse
        </SELECT> <br>   <div > <button type="submit" name="submit_documents" value="Update" > Modifier </button>    </div> <?php } else {  if ($TR['transporteur']->statut=="en cours de traitement")  { ?> 
        <SELECT name="statut" size="1">
        <OPTION value="en attente">en attente
        <OPTION value="en cours de traitement" selected>en cours de traitement
        <OPTION value="valide">valide
        <OPTION value="refuse">refuse
        </SELECT> <br>
        <div > <button type="submit" name="submit_documents" value="Update" > Modifier </button>    </div>
        <?php } else {if (  $TR['transporteur']->certifie=="oui" && $TR['transporteur']->statut=="valide") { ?>  
        <SELECT name="statut" size="1" >

        <OPTION value="certifie" selected>certifie

        </SELECT>
        <div > <button type="submit" name="submit_documents" value="Update" > Modifier </button>    </div>
        <?php }  ?> 
       <?php    } ?> 
       <?php    } ?>
      </div> 
        <br>
     
      <?php if (  $TR['transporteur']->certifie=="oui" && $TR['transporteur']->statut=="refuse" && $TR['transporteur']->just=="vide")  {?> 
        <p> Ecrivez votre justificatif </p> <br>
     <input type="text" name="just"  >   
     <div > <button type="submit" name="submit_documents" value="Update" > Modifier </button>    </div>
      <?php }?>

      <?php if (  $TR['transporteur']->certifie=="oui" && $TR['transporteur']->statut=="refuse" && $TR['transporteur']->just!=="vide")  {?> 
        <p> Justificatif: </p> 
        <p> <?php echo $TR['transporteur']->just ?> </p>
      <?php }?>
     
     
              </form>
       
         
          
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h4 class="font-size38 sm-font-size32 xs-font-size30"><?php echo htmlspecialchars($TR['transporteur']->nom, ENT_QUOTES, 'UTF-8');
                    echo " ".htmlspecialchars($TR['transporteur']->prenom, ENT_QUOTES, 'UTF-8'); ?></h4>
                    <p class="no-margin-bottom"></p>
                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Nom:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?php echo htmlspecialchars($TR['transporteur']->nom, ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Prenom:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?php echo htmlspecialchars($TR['transporteur']->prenom, ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                </div>

                            </li>
                            
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-map-marker-alt text-green"></i>
                                        <strong class="margin-10px-left text-green">Address:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?php echo htmlspecialchars($TR['transporteur']->adresse, ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-mobile-alt text-purple"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?php echo htmlspecialchars($TR['transporteur']->tel, ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><a href="javascript:void(0)"><?php echo htmlspecialchars($TR['transporteur']->email, ENT_QUOTES, 'UTF-8'); ?></a></p>
                                    </div>
                                </div>
                            </li>
                            <?php if(isset($TR['wilayas'])) {?>
                            <li>

<div class="row">
    <div class="col-md-5 col-5">
      
        <i class="fas fa-map-marker-alt text-green"></i>
        <strong class="margin-10px-left text-green">Wilayas départ:</strong>
    </div>
    <div class="col-md-7 col-7">
        <p><?php foreach($TR['wilayas'] as $wilaya) {
            echo $wilaya->nom_wilaya."<br>"; }?>
        </p>
    </div>
</div>

</li>

<li>

<div class="row">
    <div class="col-md-5 col-5">
      
        <i class="fas fa-map-marker-alt text-green"></i>
        <strong class="margin-10px-left text-green">Wilayas arrives:</strong>
    </div>
    <div class="col-md-7 col-7">
        <p><?php foreach($TR['arrive'] as $wilaya) {
            echo $wilaya->nom_wilaya."<br>"; }?>
        </p>
    </div>
</div>

</li>
<?php }?>

                        </ul>
                    </div>

                  

                    

                </div>
            </div>

            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>

<style type="text/css">
body{
    font-size: 16px;
    color: #6f6f6f;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.8px;
    margin-top:20px;
}
.font-size38 {
    font-size: 38px;
}
.team-single-text .section-heading h4,
.section-heading h5 {
    font-size: 36px
}

.team-single-text .section-heading.half {
    margin-bottom: 20px
}

@media screen and (max-width: 1199px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 32px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 15px
    }
}

@media screen and (max-width: 991px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 28px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 10px
    }
}

@media screen and (max-width: 767px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 24px
    }
}


.team-single-icons ul li {
    display: inline-block;
    border: 1px solid #02c2c7;
    border-radius: 50%;
    color: #86bc42;
    margin-right: 8px;
    margin-bottom: 5px;
    -webkit-transition-duration: .3s;
    transition-duration: .3s
}

.team-single-icons ul li a {
    color: #02c2c7;
    display: block;
    font-size: 14px;
    height: 25px;
    line-height: 26px;
    text-align: center;
    width: 25px
}

.team-single-icons ul li:hover {
    background: #02c2c7;
    border-color: #02c2c7
}

.team-single-icons ul li:hover a {
    color: #fff
}

.team-social-icon li {
    display: inline-block;
    margin-right: 5px
}

.team-social-icon li:last-child {
    margin-right: 0
}

.team-social-icon i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 15px;
    border-radius: 50px
}

.padding-30px-all {
    padding: 30px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.text-center {
    text-align: center!important;
}
img {
    max-width: 100%;
    height: auto;
}


.list-style9 {
    list-style: none;
    padding: 0
}

.list-style9 li {
    position: relative;
    padding: 0 0 15px 0;
    margin: 0 0 15px 0;
    border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
}

.list-style9 li:last-child {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0
}


.text-sky {
    color: #02c2c7
}

.text-orange {
    color: #e95601
}

.text-green {
    color: #5bbd2a
}

.text-yellow {
    color: #f0d001
}

.text-pink {
    color: #ff48a4
}

.text-purple {
    color: #9d60ff
}

.text-lightred {
    color: #ff5722
}

a.text-sky:hover {
    opacity: 0.8;
    color: #02c2c7
}

a.text-orange:hover {
    opacity: 0.8;
    color: #e95601
}

a.text-green:hover {
    opacity: 0.8;
    color: #5bbd2a
}

a.text-yellow:hover {
    opacity: 0.8;
    color: #f0d001
}

a.text-pink:hover {
    opacity: 0.8;
    color: #ff48a4
}

a.text-purple:hover {
    opacity: 0.8;
    color: #9d60ff
}

a.text-lightred:hover {
    opacity: 0.8;
    color: #ff5722
}

.custom-progress {
    height: 10px;
    border-radius: 50px;
    box-shadow: none;
    margin-bottom: 25px;
}
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}
</style>

<script type="text/javascript">

</script>

<?php 
 require_once("../application/view/footer.php") ;
 ?>
</body>
</html>
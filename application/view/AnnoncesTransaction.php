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
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require_once('../application/view/Menu.php') ?>
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">

<div class="container">

    <div class="row">
      
        <div class="col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Mes annonces validées</h4>

                        <?php for ($numero = 0; $numero < $ANNON['count']; $numero++) { if( $ANNON['annonces'][$numero]->transaction==1 && $ANNON['annonces'][$numero]->supp==0) {?> 
                        <div class="bg-white card mb-4 order-list shadow-sm">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>
                                <div class="media">
                                    <a href="#">
                                        <img class="mr-4" src=<?php echo"../public/img/".$ANNON['annonces'][$numero]->img ?> alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            <span class="float-right text-info"><?php echo $ANNON['annonces'][$numero]->termine ;?> <i class="icofont-check-circled text-success"></i></span>
                                        </a>
                                        <h6 class="mb-2">
                                            <a href="#"></a>
                                            <a href="<?php echo URL."annoncesController/details_annonces_/".$ANNON['annonces'][$numero]->id_annonce?>"><?php echo $ANNON['annonces'][$numero]->titre ;?></a>
                                        </h6>
                                        <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> <?php echo $ANNON['annonces'][$numero]->description ;?>
                                        </p>
                                        <p class="text-gray mb-3"><i class="icofont-list"></i> Annonce #<?php echo $ANNON['annonces'][$numero]->id_annonce ;?> </p>
                                        <p class="text-gray mb-3"><i class="icofont-clock-time ml-2"></i>  Validee par le transporteur #<a href="<?php echo URL."profilsController/profilTransporteur/".$ANNON['annonces'][$numero]->id_transport?>"><?php echo $ANNON['annonces'][$numero]->id_transport ;?>  </a>
                                       
                                        <hr>
           
                                        <?php if ($ANNON['annonces'][$numero]->termine == "terminee") { ?>
                                        <div class="float-right">
                                        
                                        <form action="<?php echo URL; ?>signalementController/signalerTransport" method="post"  >
                                        <input type="hidden" name="id_client" value="<?php echo $_SESSION['user_id']; ?>" />
   <input type="hidden" name="annonce_id" value="<?php echo htmlspecialchars($ANNON['annonces'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
   <input type="hidden" name="id_transport" value="<?php echo htmlspecialchars($ANNON['annonces'][$numero]->id_transport, ENT_QUOTES, 'UTF-8'); ?>" />
        <button  class="btn btn-sm btn-outline-primary" type="submit" name="submit_delete_annonce" value="Update" > Signaler </button>      
</form>
                                    </div>
                                    <?php if ($ANNON['annonces'][$numero]->note == 100) { ?>
                                    <div class="float-right">
                                        
                                        <form action="<?php echo URL; ?>notesController/Noter" method="post"  >
                                      
   <input type="hidden" name="id_annonce" value="<?php echo htmlspecialchars($ANNON['annonces'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
   <input type="hidden" name="id_transport" value="<?php echo htmlspecialchars($ANNON['annonces'][$numero]->id_transport, ENT_QUOTES, 'UTF-8'); ?>" />
   <input type="num" name="note" />
        <button  class="btn btn-sm btn-outline-primary" type="submit" name="submit_delete_annonce" value="Update" > Noter </button>      
</form>
                                    </div>
                                    <?php } else {echo"Note: ".$ANNON['annonces'][$numero]->note ; } ?>
                                    <?php } ?>
                                       

                                       
                                        <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Tarif:</span> <?php echo $ANNON['annonces'][$numero]->tarif ;?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                <?php } } ?>






                       
                       
                    </div>


                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <?php if(isset($_SESSION['t_id'])) { ?>       <h4 class="font-weight-bold mt-0 mb-4">Mes annonces avec les clients</h4> 

                        <?php } if(isset($_SESSION['t_id'])) {for ($numero = 0; $numero < $ANNON['count2']; $numero++) { if( $ANNON['annoncesT'][$numero]->transaction==1 &&   $ANNON['annoncesT'][$numero]->supp==0) {?> 
                        <div class="bg-white card mb-4 order-list shadow-sm">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>
                                <div class="media">
                                    <a href="#">
                                        <img class="mr-4" src=<?php echo"../public/img/".$ANNON['annoncesT'][$numero]->img ?> alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            <span class="float-right text-info"><?php echo $ANNON['annoncesT'][$numero]->termine ;?> <i class="icofont-check-circled text-success"></i></span>
                                        </a>
                                        <h6 class="mb-2">
                                            <a href="#"></a>
                                            <a href="<?php echo URL."annoncesController/details_annonces_/".$ANNON['annoncesT'][$numero]->id_annonce?>"><?php echo $ANNON['annoncesT'][$numero]->titre ;?></a>
                                        </h6>
                                        <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> <?php echo $ANNON['annoncesT'][$numero]->description ;?>
                                        </p>
                                        <p class="text-gray mb-3"><i class="icofont-list"></i> Annonce #<?php echo $ANNON['annoncesT'][$numero]->id_annonce ;?> </p>
                                        <p class="text-gray mb-3"> Pourcentage:  <?php if($ANNON['annoncesT'][$numero]->type == "garantie") {echo "40%";} else {echo "0%" ;}?> </p>
                                        <p class="text-gray mb-3"><i class="icofont-clock-time ml-2"></i>  Validee par le client #<a href="<?php echo URL."profilsController/profilClient/".$ANNON['annoncesT'][$numero]->id_client?>"><?php echo $ANNON['annoncesT'][$numero]->id_client ;?>  </a>
                                       
                                        <hr>
           <?php if ($ANNON['annoncesT'][$numero]->termine == "en cours") { ?>
                                        <div class="float-right">
                                        
                                        <form action="<?php echo URL; ?>annoncesController/terminer" method="post" id="form1" >
   <input type="hidden" name="annonce_id" value="<?php echo htmlspecialchars($ANNON['annoncesT'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
        <button  class="btn btn-sm btn-outline-primary" type="submit" name="submit_delete_annonce" value="Update" > Terminer </button>      
</form>

                                    </div>

                                    


                               
                                    <?php } if ($ANNON['annoncesT'][$numero]->termine == "terminee") { ?>
                                    <div class="float-right">
                                        
                                        <form action="<?php echo URL; ?>signalementController/signalerClient" method="post"  >
                                        <input type="hidden" name="id_client" value="<?php echo htmlspecialchars($ANNON['annoncesT'][$numero]->id_client, ENT_QUOTES, 'UTF-8'); ?>" />
                                       <input type="hidden" name="annonce_id" value="<?php echo htmlspecialchars($ANNON['annoncesT'][$numero]->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
                                       <input type="hidden" name="id_transport" value="<?php echo htmlspecialchars($_SESSION['t_id'], ENT_QUOTES, 'UTF-8'); ?>" />
                                            <button  class="btn btn-sm btn-outline-primary" type="submit" name="submit_delete_annonce" value="Update" > Signaler </button>      
                                        </form>
                                                                        </div>
                                                                        <?php } ?>
                                       
                                        <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Tarif:</span> <?php echo $ANNON['annoncesT'][$numero]->tarif ;?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                <?php } } } ?>






                       
                       
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>
<?php 
 require_once("../application/view/footer.php") ;
 ?>
<style type="text/css">
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
body{
    margin-top:20px;
    background:#eee;
}
/* My Account */
.payments-item img.mr-3 {
    width: 47px;
}
.order-list .btn {
    border-radius: 2px;
    min-width: 121px;
    font-size: 13px;
    padding: 7px 0 7px 0;
}
.osahan-account-page-left .nav-link {
    padding: 18px 20px;
    border: none;
    font-weight: 600;
    color: #535665;
}
.osahan-account-page-left .nav-link i {
    width: 28px;
    height: 28px;
    background: #535665;
    display: inline-block;
    text-align: center;
    line-height: 29px;
    font-size: 15px;
    border-radius: 50px;
    margin: 0 7px 0 0px;
    color: #fff;
}
.osahan-account-page-left .nav-link.active {
    background: #f3f7f8;
    color: #282c3f !important;
}
.osahan-account-page-left .nav-link.active i {
    background: #282c3f !important;
}
.osahan-user-media img {
    width: 90px;
}
.card offer-card h5.card-title {
    border: 2px dotted #000;
}
.card.offer-card h5 {
    border: 1px dotted #daceb7;
    display: inline-table;
    color: #17a2b8;
    margin: 0 0 19px 0;
    font-size: 15px;
    padding: 6px 10px 6px 6px;
    border-radius: 2px;
    background: #fffae6;
    position: relative;
}
.card.offer-card h5 img {
    height: 22px;
    object-fit: cover;
    width: 22px;
    margin: 0 8px 0 0;
    border-radius: 2px;
}
.card.offer-card h5:after {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-bottom: 4px solid #daceb7;
    content: "";
    left: 30px;
    position: absolute;
    bottom: 0;
}
.card.offer-card h5:before {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #daceb7;
    content: "";
    left: 30px;
    position: absolute;
    top: 0;
}
.payments-item .media {
    align-items: center;
}
.payments-item .media img {
    margin: 0 40px 0 11px !important;
}
.reviews-members .media .mr-3 {
    width: 56px;
    height: 56px;
    object-fit: cover;
}
.order-list img.mr-4 {
    width: 70px;
    height: 70px;
    object-fit: cover;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    border-radius: 2px;
}
.osahan-cart-item p.text-gray.float-right {
    margin: 3px 0 0 0;
    font-size: 12px;
}
.osahan-cart-item .food-item {
    vertical-align: bottom;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #000000;
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.rounded-pill {
    border-radius: 50rem!important;
}
a:hover{
    text-decoration:none;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
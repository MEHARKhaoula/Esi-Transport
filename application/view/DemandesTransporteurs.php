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
    <title>Mes demandes en attente</title>
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
                        <h4 class="font-weight-bold mt-0 mb-4">Demandes des transporteurs</h4>

                        <?php for ($numero = 0; $numero < $transpo['count']; $numero++) {  if($transpo['demandes'][$numero]->accepte==0) {?>
                        <div class="bg-white card mb-4 order-list shadow-sm">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>
                                <div class="media">
                                    
                                    <div class="media-body">
                                        
                                        <h6 class="mb-2">
                                            <a href="#"></a>
                                            <a href="<?php echo URL."profilsController/profilTransporteur/".$transpo['transporteurs'][$numero]->transporteur_id?>" class="text-black"><?php echo $transpo['transporteurs'][$numero]->nom." ".$transpo['transporteurs'][$numero]->prenom ;?></a>
                                        </h6>
                                        <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> <?php echo $transpo['demandes'][$numero]->texte ;?>
                                        </p>
                                        <p class="text-gray mb-3"><i class="icofont-list"></i> Demande #<?php echo htmlspecialchars($transpo['demandes'][$numero]->id, ENT_QUOTES, 'UTF-8'); ?> </i></p>
                                       
                                        <hr>
           
                                        <div class="float-right">
                                        
      
<form action="<?php echo URL; ?>demandesController/accepter" method="post" id="form1" >
       <input type="hidden" name="demande_id" value="<?php echo htmlspecialchars($transpo['demandes'][$numero]->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <button class="btn btn-sm btn-outline-primary" type="submit" name="submit_accepte" value="Update" > Accepter </button>      
</form>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                </div>
                                </div>
                                
                                <?php }  ?>
                                <?php }  ?>





                           
                        
                       
                       
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
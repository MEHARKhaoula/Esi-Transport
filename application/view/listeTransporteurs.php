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
    <link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require_once('../application/view/Menu.php') ?>
<div class="container">
    <div class="profile">
   

        <div class="profile-container">
          

            <div class="profile-content"> 
          <?php  for ($numero = 0; $numero < $TRANSP['count']; $numero++) { ?>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade active show" id="profile-followers">
                                <div class="list-group">
                                    <div class="list-group-item d-flex align-items-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="50px" class="rounded-sm ml-n2" />
                                        <div class="flex-fill pl-3 pr-3">
                                            <div><a href="<?php echo URL."profilsController/profilTransporteur/".$TRANSP['transporteurs'][$numero]->transporteur_id?> class="text-dark font-weight-600"> <?php echo $TRANSP['transporteurs'][$numero]->nom." ".$TRANSP['transporteurs'][$numero]->prenom;?></a></div>
                                            <div class="text-muted fs-13px"><?php if($TRANSP['transporteurs'][$numero]->statut=="certifie"){echo "Statut: certifie";} else{echo "Statut: non certifie";}?></div>
                                        </div>
                                        <form action="<?php echo URL; ?>demandesController/envoyer" method="post"  >
    <input type="hidden" name="id_annonce" value="<?php echo htmlspecialchars($TRANSP['id'], ENT_QUOTES, 'UTF-8'); ?>" />
    <input type="hidden" name="transporteur_id" value="<?php echo htmlspecialchars($TRANSP['transporteurs'][$numero]->transporteur_id, ENT_QUOTES, 'UTF-8'); ?>" />
    <input type="hidden" name="id_user" value="<?php echo htmlspecialchars($_SESSION['user_id'], ENT_QUOTES, 'UTF-8'); ?>" />
   
    <button  class="btn btn-outline-primary" name="submit_transporteur" value="<?php echo $numero?>" > Demander </button>  
</form>
                                       
                                    </div>
                                    <?php } ?>
                                </div>
                               
                            </div>
                        </div>
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
    background-color: #ebeef4;
    margin-top:20px;
}
.nav-tabs {
    border-bottom: 1px solid #c9d2e3;
}
.profile .profile-header {
    position: relative;
}
.profile .profile-header .profile-header-cover {
    background: url(https://bootdey.com/img/Content/bg1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 10.625rem;
    position: relative;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-cover {
        height: 6.25rem;
    }
}
.profile .profile-header .profile-header-cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(33, 40, 55, 0.35);
}
.profile .profile-header .profile-header-content {
    position: relative;
    padding: 0 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: flex-end;
    align-items: flex-end;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content {
        display: block;
        padding: 0 20px;
    }
}
.profile .profile-header .profile-header-content .profile-header-img {
    width: 12.5rem;
    height: 12.5rem;
    overflow: hidden;
    z-index: 10;
    margin-top: -8.75rem;
    padding: 0.1875rem;
    background: #fff;
    -webkit-border-radius: 9px;
    border-radius: 9px;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-img {
        width: 4.375rem;
        height: 4.375rem;
        margin: -3.75rem 0 0;
    }
}
.profile .profile-header .profile-header-content .profile-header-img img {
    max-width: 100%;
    width: 100%;
    -webkit-border-radius: 6px;
    border-radius: 6px;
}
.profile .profile-header .profile-header-content .profile-header-tab {
    position: relative;
    margin-left: 50px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab {
        margin: -0.625rem -20px 0;
        padding: 0 20px;
        overflow: scroll;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link {
    padding: 0.8125rem 0.625rem 0.5625rem;
    text-align: center;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link {
        padding: 0.9375rem 0.625rem 0.3125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-field {
    font-weight: 600;
    font-size: 0.8125rem;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-field {
        font-size: 0.6875rem;
        margin-bottom: -0.125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-value {
    font-size: 1.25rem;
    font-weight: 400;
    letter-spacing: -0.5px;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link .nav-value {
        font-size: 1.125rem;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link.active {
    color: #212837;
    border-color: #212837;
}
@media (max-width: 991.98px) {
    .profile .profile-header .profile-header-content .profile-header-tab .nav-item .nav-link.active {
        background: 0 0;
    }
}
.profile .profile-header .profile-header-content .profile-header-tab .nav-item + .nav-item {
    margin-left: 0.9375rem;
}
.profile .profile-container {
    padding: 30px 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
@media (max-width: 991.98px) {
    .profile .profile-container {
        padding: 20px 20px;
    }
}
.profile .profile-container .profile-sidebar {
    width: 13.75rem;
}
@media (max-width: 991.98px) {
    .profile .profile-container .profile-sidebar {
        display: none;
    }
}
.profile .profile-container .profile-content {
    padding-left: 30px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
@media (max-width: 991.98px) {
    .profile .profile-container .profile-content {
        padding-left: 0;
    }
}
.profile .profile-img-list {
    list-style-type: none;
    margin: -0.0625rem -1.3125rem;
    padding: 0;
}
.profile .profile-img-list:after,
.profile .profile-img-list:before {
    content: "";
    display: table;
    clear: both;
}
.profile .profile-img-list .profile-img-list-item {
    float: left;
    width: 25%;
    padding: 0.0625rem;
}
.profile .profile-img-list .profile-img-list-item.main {
    width: 50%;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link {
    display: block;
    padding-top: 75%;
    overflow: hidden;
    position: relative;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content,
.profile .profile-img-list .profile-img-list-item .profile-img-list-link img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content:before,
.profile .profile-img-list .profile-img-list-item .profile-img-list-link img:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid rgba(60, 78, 113, 0.15);
}
.profile .profile-img-list .profile-img-list-item.with-number .profile-img-number {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    color: #fff;
    font-size: 1.625rem;
    font-weight: 500;
    line-height: 1.625rem;
    margin-top: -0.8125rem;
    text-align: center;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
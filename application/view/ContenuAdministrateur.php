
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
	

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
body{
   margin:5%;
   padding:5%;
}
</style>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
	<link href="<?php echo URL ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL ?>/assets/css/bootstrap-override.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL ?>/assets/css/bootstrap-table.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL ?>/src/bootstrap-table-filter.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL ?>/assets/css/select2.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL ?>/assets/css/jquery-ui-1.10.3.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php require_once('../application/view/Menu.php') ?>
	<div class="container">

		
		
		
		
		
	
		<table id="itemsTable" class="table"
			data-toggle="table"
			data-url="data.json"
		
			data-filter="true"
			data-icons-prefix="fa">
			<thead>
				<tr>
					<th data-field="id" data-align="center" data-sortable="true">ID</th>
                    <th data-field="name" data-align="center" data-sortable="true" data-filter-type="input">Nom diaporama</th>
					<th data-field="prenom" data-align="center" data-sortable="true" data-filter-type="input">Id annonce</th>
                    <th data-field="email" data-align="center" data-sortable="true" data-filter-type="input">Modifier diaporama</th>
					<th data-field="bloquer" data-align="center"  data-filter-type="input">Modifier lien</th>
				</tr>

			</thead>
			<?php foreach($d as $dia) {?>

            <tr>
			
			<td> <a href="<?php echo URL."adminController/afficher_profil_user/".$dia->id_diapo?>"> <?php echo $dia->id_diapo?> </a></td>
			<td> <?php echo  $dia->img ?></td>
			<td> <?php echo $dia->id_contenu ?></td>
			<td>   <form   action="<?php echo URL; ?>adminController/modifier_diaporama" method="post" enctype="multipart/form-data" >  <input type="hidden" name=user_id value="<?php echo $dia->id_diapo ;?>"  >  <input    type="file" name="uploadfile" id="file" value=""/> 
          <button type="submit" class="btn btn-primary" name="valider" value="Update" > Modifier </button>
        </form>  </td>
        <td>   <form id=""  action="<?php echo URL; ?>adminController/modifier_diaporama" method="post">  <input type="hidden" name=user_id value="<?php echo $dia->id_diapo ;?>" enctype="multipart/form-data" >  <input   type="num" name="lien"  value=""/> 
          <button type="submit" class="btn btn-primary" name="modifier_lien" value="Update" > Modifier </button>
        </form>  </td>
			
		</tr>
		<?php }?>
		</table>
      <br>
		<h1>  Modifier les infos de la page contact</h1>
      <form action="<?php echo URL; ?>adminController/modifier_contact" method="post"   enctype="multipart/form-data">

<div class="form-row">
    <div class="name">Telephone</div>
    <div class="value">
        <input class="input--style-6" type="num" name="phone" placeholder="Telephone">
    </div>
    </div>
  

<div class="form-row">
    <div class="name">Email</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-6" type="text"  name="email" placeholder="Email">
        </div>
    </div>
    </div>

    <div class="form-row">
    <div class="name">Adresse</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-6" type="text" name="adresse" placeholder="Adresse">
        </div>
    </div>
    </div>

    <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                <button type="submit" onclick="handleChange()" class="btn btn-primary" name="modifier_contact"> Modifier</button> 
                                </div>
                            </div>
                            </div>

         </form>

         <br>
         <h1>  Modifier les infos de la page presentation</h1>
      <form action="<?php echo URL; ?>adminController/modifier_presentation" method="POST"   enctype="multipart/form-data">

<div class="form-row">
    <div class="name">Comment le site fonctionne</div>
    <div class="value">
        <input class="textarea--style-6" type="text" name="comment" placeholder="description">
    </div>
    </div>

    <div class="form-row">
    <div class="name">Les objectifs du site</div>
    <div class="value">
        <input class="textarea--style-6" type="text" name="objectif" placeholder="description">
    </div>
    </div>

    <div class="form-row">
                            <div class="name">Choisir Image</div>
                            <div class="value">

                                <div class="input-group js-input-file">
                                  
                                    <input  class="input-file label--file" type="file" name="uploadfile" id="file" />
                              </div>
                            </div>

                        </div> 


                        <div class="form-row">
                            <div class="name">Choisir Video</div>
                            <div class="value">

                                <div class="input-group js-input-file">
                                  
                                    <input  class="input-file label--file" type="file" name="videofile" id="file" />
                              </div>
                            </div>

                        </div> 

                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                <button type="submit"  class="btn btn-primary" name="modifier_presentation"> Modifier</button> 
                                </div>
                            </div>
                            </div>

         </form>
	</div>
   <?php 
 require_once("../application/view/footer.php") ;
 ?>
	<script src="../assets/js/jquery-1.11.3.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/bootstrap-table.js"></script>
	<script src="../assets/js/bootstrap-table-en-US.js"></script>
	<script src="../assets/js/select2.js"></script>
	<script src="../assets/js/jquery-ui-1.10.3.min.js"></script>
	<script src="../src/bootstrap-table-filter.js"></script>
	<script type="text/javascript">
        var itemPrices = [{ id: 1, text: '$1' }, { id: 2, text: '$2' }];

		$('#itemsTable').on('column-search.bs.table', function () {
				console.log('hello event');
        });
	</script>
</body>
</html>
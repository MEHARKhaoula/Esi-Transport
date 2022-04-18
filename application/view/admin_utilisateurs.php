 <head>
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {

margin:5%;
padding:5%;
}
.center{
    margin:5%;
}
img{
    margin-bottom:5%; margin-right:5%;
}
</style>
</head>
<body>
<?php require_once('../application/view/Menu.php') ?>
<div class="center">
<a  href="<?php echo URL; ?>adminController/afficher_admin_clients" >   <img src="../public/img/images/admin/clients.jpg" width="40%" height="40%" > </a>
<a href="<?php echo URL; ?>adminController/afficher_admin_transporteur" > <img src="../public/img/images/admin/transporteur.png"  width="40%" height="40%" > </a>


</div>

<?php 
 require_once("../application/view/footer.php") ;
 ?>
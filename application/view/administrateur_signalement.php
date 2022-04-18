
<!DOCTYPE html>
<html>
<head>
<style>
body {

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
                    <th data-field="annonce" data-align="center" data-sortable="true" data-filter-type="input">Id_annonce</th>
                    <th data-field="id_user" data-align="center" data-sortable="true" data-filter-type="input">Id_utilisateur</th>
					<th data-field="nom" data-align="center" data-sortable="true" data-filter-type="input">Nom_utilisateur</th>
                    <th data-field="id_signale" data-align="center" data-sortable="true" data-filter-type="input">Id_signalé</th>
					<th data-field="nom_signale" data-align="center" data-sortable="true" data-filter-type="input">Nom_signalé</th>
					<th data-field="type" data-align="center" data-sortable="true" data-filter-type="input">Type</th>
				</tr>
			</thead> 
			<?php for($i = 0; $i < $count; $i++) {?>

            <tr>
			
			<td> <a href="<?php echo URL."signalementController/show_details/".$signalements[$i]['id']?>"> <?php echo $signalements[$i]['id'];?></a></td>
			<td> <a href="<?php echo URL."annoncesController/details_annonces_/".$signalements[$i]['annonce']?>"><?php echo $signalements[$i]['annonce']?></a></td>
			<?php if($signalements[$i]['type'] =="transporteur") { ?>
			<td> <a href="<?php echo URL."profilsController/profilTransporteur/".$signalements[$i]['transporteur']->transporteur_id?>"><?php echo $signalements[$i]['transporteur']->transporteur_id;?> </a></td>
			<?php } else { ?>
				<td> <a href="<?php echo URL."profilsController/profilClient/".$signalements[$i]['user']->user_id?>"> <?php echo $signalements[$i]['user']->user_id ?></a></td>
				<?php }  ?>
				<?php if($signalements[$i]['type'] =="transporteur") { ?>
			<td> <?php echo $signalements[$i]['transporteur']->nom." ".$signalements[$i]['transporteur']->prenom?> </td>
			<?php } else { ?>
				<td> <?php echo $signalements[$i]['user']->nom." ".$signalements[$i]['user']->prenom?></td>
				<?php }  ?>

				<?php if($signalements[$i]['type'] =="transporteur") { ?>
				<td> <a href="<?php echo URL."profilsController/profilClient/".$signalements[$i]['user']->user_id?>"><?php echo $signalements[$i]['user']->user_id ?></a></td>
		
			<?php } else { ?>
				<td> <a href="<?php echo URL."profilsController/profilTransporteur/".$signalements[$i]['transporteur']->transporteur_id?>"><?php echo  $signalements[$i]['transporteur']->transporteur_id ?></a></td>
				<?php }  ?>
				<?php if($signalements[$i]['type'] =="client") { ?>
			<td> <?php echo $signalements[$i]['transporteur']->nom." ".$signalements[$i]['transporteur']->prenom?> </td>
			<?php } else { ?>
				<td> <?php echo $signalements[$i]['user']->nom." ".$signalements[$i]['user']->prenom?></td>
				<?php }  ?>
				<td> <?php echo $signalements[$i]['type']?> </td>
			
		</tr>
		<?php }?>
		</table>
		
		
		
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
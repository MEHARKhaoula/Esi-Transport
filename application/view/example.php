
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
			data-height="320"
			data-filter="true"
			data-icons-prefix="fa">
			<thead>
				<tr>
					<th data-field="id" data-align="center" data-sortable="true">ID</th>
                    <th data-field="name" data-align="center" data-sortable="true" data-filter-type="input">Nom</th>
					<th data-field="prenom" data-align="center" data-sortable="true" data-filter-type="input">Prenom</th>
                    <th data-field="email" data-align="center" data-sortable="true" data-filter-type="input">Email</th>
                    <th data-field="demande" data-align="" data-sortable="true" data-filter-type="input">Demande de certification</th>
					<th data-field="statut" data-align="" data-sortable="true" data-filter-type="input">Statut</th>
					<th data-field="inscription" data-align="" data-sortable="true" data-filter-type="input">Inscription</th>
				</tr>

			</thead>
			<?php foreach($t as $transporteur) {?>

            <tr>
			
			<td> <a href="<?php echo URL."profilsController/profilTransporteur/".$transporteur->transporteur_id?>"> <?php echo $transporteur->transporteur_id?> </a></td>
			<td> <?php echo  $transporteur->nom ?></td>
			<td> <?php echo $transporteur->prenom ?></td>
			<td><?php echo  $transporteur->email?></td>
			<td><?php echo  $transporteur->certifie?></td>
			<td><?php echo  $transporteur->statut?></td>
			
			
			
	
				<td><?php   if( $transporteur->insc==0)  {?>  <form id=""  action="<?php echo URL; ?>adminController/modifier_transporteur" method="post"> <input type="hidden" name="demande" value="<?php echo $transporteur->certifie ?>" > <input type="hidden" name=id_trans value="<?php echo $transporteur->transporteur_id ;?>" ><button type="submit" name="valider" value="Update" class="btn btn-primary" > Valider </button> </form> <?php }else{ echo 'validée';  }?></td>

			
			
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
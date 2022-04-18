
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
	<!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> -->
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
                    <th data-field="name" data-align="center" data-sortable="true" data-filter-type="input">Titre</th>
                    <th data-field="client" data-align="center" data-sortable="true" data-filter-type="input">Client</th>
                    <th data-field="transport" data-align="center" data-sortable="true" data-filter-type="input">Transporteur</th>
					<th data-field="type" data-align="center" data-sortable="true" data-filter-type="input">Type</th>
                    <th data-field="tarif" data-align="center" data-sortable="true" data-filter-type="input">Tarif</th>
					<th data-field="etat" data-align="center" data-sortable="true" data-filter-type="input">Valider</th>
					<th data-field="supprimer" data-align="center" data-sortable="true" data-filter-type="input">Supprimer</th>
                    <th data-field="transaction" data-align="center" data-sortable="true" data-filter-type="input">Transaction</th>
                    <th data-field="date" data-align="center" data-sortable="true" data-filter-type="input">Date</th>
                    <th data-field="termine" data-align="center" data-sortable="true" data-filter-type="input">Termine</th>
				</tr>

			</thead>
			<?php foreach($annonces as $annonce) { ?>

            <tr>
			
			<td> <a href="<?php echo URL."annoncesController/details_annonces_/".$annonce->id_annonce?>"> <?php echo $annonce->id_annonce?> </a></td>
			<td> <?php echo  $annonce->titre ?></td>
			<td> <a href="<?php echo URL."profilsController/profilClient/".$annonce->id_client?>"> <?php echo $annonce->id_client ?></td>
			<td> <a href="<?php echo URL."profilsController/profilTransporteur/".$annonce->id_transport?>"> <?php echo  $annonce->id_transport ?> </a></td>
			<td><?php echo  $annonce->type ?></td>
            <td>  <?php echo $annonce->tarif;  ?></td>
            <td> <?php   if( $annonce->etat=="non")  {?>  <form id=""  action="<?php echo URL; ?>adminController/modifier_annonce" method="post">  <input type="hidden" name=id_annonce value="<?php echo $annonce->id_annonce ;?>" ><button class="btn btn-primary  " type="submit" name="valider" value="Update" > Valider </button> </form> <?php }else{ echo 'validée';  }?> </td>
			<td> <?php   if( $annonce->supp==0)  {?>  <form id=""  action="<?php echo URL; ?>adminController/supprimer_annonce" method="post">  <input type="hidden" name=id_annonce value="<?php echo $annonce->id_annonce ;?>" ><button type="submit" class="btn btn-primary  " name="valider" value="Update" > Annuler </button> </form>  <?php }else{ echo 'supprimée';  }?> </td>
			<td><?php  if( $annonce->transaction==0)  {echo  "non validée"; } else{echo  "validée";}?></td>
            <td><?php echo  $annonce->date ?></td>
            <td><?php echo  $annonce->termine ?></td>
			
		</tr>
		
		<?php } ?>
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
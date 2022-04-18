
<!DOCTYPE html>
<html>
<head>
<style>
body {

margin:5%;
padding:5%;
}
</style>
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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

		
		
		
		
    <button type="button" class="btn btn-primary" onclick="handleChange()"> Ajouter News</button> 
	
		<table id="itemsTable" class="table"
			data-toggle="table"
			data-url="data.json"
			
			data-filter="true"
			data-icons-prefix="fa">
			<thead>
				<tr>
					<th data-field="id" data-align="center" data-sortable="true">ID</th>
                    <th data-field="name" data-align="center" data-sortable="true" data-filter-type="input">Titre</th>
                    <th data-field="date" data-align="center" data-sortable="true" data-filter-type="input">Date</th>
				</tr>

			</thead>
			<?php foreach($news as $new) {?>

            <tr>
			
			<td> <a href="<?php echo URL."newsController/detail_news/".$new->id?>"> <?php echo $new->id?> </a></td>
			<td> <?php echo  $new->titre ?></td>
            <td> <?php echo  $new->date ?></td>
			
		</tr>
		<?php }?>
		</table>
		
		
		
	</div>
	

    <form action="<?php echo URL; ?>/newsController/add" method="post" id="form1" style="display:none;" enctype="multipart/form-data">
      <label for="titre">Titre:</label><br>
        <input type="text" name="titre" placeholder="titre" /><br>
        <label for="description">Detail:</label><br>
        <input type="textarea" name="description" placeholder="description" /><br>
        <input type="file" name="uploadfile" value=""/> <br> <br>
        <input type="submit" value="Publier" class="btn btn-primary" name="submit"/> <br>
</form>
	<script src="../assets/js/jquery-1.11.3.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/bootstrap-table.js"></script>
	<script src="../assets/js/bootstrap-table-en-US.js"></script>
	<script src="../assets/js/select2.js"></script>
	<script src="../assets/js/jquery-ui-1.10.3.min.js"></script>
	<script src="../src/bootstrap-table-filter.js"></script>
	<script type="text/javascript">
         function handleChange() {
        if(document.getElementById("form1").style.display === "none"){
            document.getElementById("form1").style.display = "inline-block";
         
        }
        else{
            document.getElementById("form1").style.display = "none";
           
            }
    }

        var itemPrices = [{ id: 1, text: '$1' }, { id: 2, text: '$2' }];

		$('#itemsTable').on('column-search.bs.table', function () {
				console.log('hello event');
        });

        
	</script>
	 <?php 
 require_once("../application/view/footer.php") ;
 ?>
</body>
</html>
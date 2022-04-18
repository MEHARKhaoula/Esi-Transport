
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
	body {

margin:5%;
padding:5%;
}
.container {
	width: 1024px;
	padding: 2em;
}

.bold-blue {
	font-weight: bold;
	color: #0277BD;
}

  </style>
  <body>
	  
            <div style="display:table;width:80%;">
            <div style="display: table-header-group">
              <div style="display:table-row;">
                <div style="display:table-cell">Id</div>
                <div style="display:table-cell">Nom</div>
                <div style="display:table-cell">Prenom</div>
                <div style="display:table-cell">email</div>
               
                <div style="display:table-cell">Demande de certification</div>
                <div style="display:table-cell">Statut</div>
                <div style="display:table-cell">Justificatif</div>
                <div style="display:table-cell">Modifier</div>
               
              </div>
            </div>
            <br>
            <div style="display: table-row-group;">
            <form id="" style="display:table-row;" action="<?php echo URL; ?>adminController/rechercher" method="post">
                <div style="display:table-cell"><input name="id" type="text"></div>
                <div style="display:table-cell"><input name="nom" type="text"></div>
                <div style="display:table-cell"><input name="prenom" type="text"></div>
                <div style="display:table-cell"><input name="email" type="email"></div>
     
                <div style="display:table-cell"><input name="demande" type="text"></div>
                <div style="display:table-cell"><input name="statut" type="text"></div>
                <div style="display:table-cell">Justificatif</div>
               <div style="display:table-cell"> <button type="submit" name="submit_documents" value="Update" > rechercher </button>    </div>

               
</form>
            </div>
            <br>
            <div style="display: table-row-group;">
            <?php foreach ($data as $transporteur) {?>
              <form id="" style="display:table-row;" action="<?php echo URL; ?>adminController/modifier" method="post">
                <div style="display:table-cell"> <?php echo $transporteur->transporteur_id ;?></div>
                <div style="display:table-cell"> <?php echo $transporteur->nom ;?> </div>
                <div style="display:table-cell"><?php echo $transporteur->prenom ;?></div>
          <div style="display:table-cell"><?php echo $transporteur->email ;?></div>
         
          <input type="hidden" name="id" value="<?php echo $transporteur->transporteur_id;?>">
          <div style="display:table-cell"><?php echo $transporteur->certifie ;?> </div> 
          <div style="display:table-cell"> <?php if($transporteur->statut=="en attente") {?> <SELECT name="statut" size="1">
        <OPTION value="en attente">en attente
        <OPTION value="en cours de traitement">en cours de traitement
        <OPTION value="valide">valide
        <OPTION value="refuse">refuse
        </SELECT> <br>   <?php } else {  if ($transporteur->statut=="en cours de traitement")  { ?> 
        <SELECT name="statut" size="1">
        <OPTION value="en attente">en attente
        <OPTION value="en cours de traitement" selected>en cours de traitement
        <OPTION value="valide">valide
        <OPTION value="refuse">refuse
        </SELECT> <br>
        <?php } else {if (  $transporteur->certifie=="oui" && $transporteur->statut=="valide") { ?>  
        <SELECT name="statut" size="1" >

        <OPTION value="certifie" selected>certifie

        </SELECT>
        <?php }  else { echo $transporteur->statut;} ?> 
       <?php    } ?> 
       <?php    } ?>
      </div> 
        
        
      <div style="display:table-cell"> <input type="text" name="just"  >   </div>
          <div style="display:table-cell"> <button type="submit" name="submit_documents" value="Update" > Modifier </button>    </div>
              </form>
       
          <?php } ?>
          
        
            </div>
          </div>
          <a href="<?php echo URL ?>documents/OK-CONTRAT-DE-PRESTATION-DE-SERVICE-DE-TRANSPORT-VTC.pdf" download>  download</a>



          <div class="container">
<h1>Bootstrap Table</h1>
<p> Mémo pour les options du Bootstrap Table : <a href="http://bootstrap-table.wenzhixin.net.cn/documentation/">Bootstrap Table Documentation</a></p>
<p>Eléments de Bootstrap Table utilisés : <a href="http://jsfiddle.net/wenyi/e3nk137y/3178/">Data Checkbox</a>, pour cocher les éléments à sélectionner, <a href="https://github.com/wenzhixin/bootstrap-table-examples/blob/master/extensions/filter-control.html">extension Filter control</a>, pour les filtres via les colonnes, <a href="https://github.com/kayalshri/tableExport.jquery.plugin">extension Data export</a> pour exporter</p>

<div id="toolbar">
		<select class="form-control">
				<option value="">Export Basic</option>
				<option value="all">Export All</option>
				<option value="selected">Export Selected</option>
		</select>
</div>

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar">
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="prenom" data-filter-control="input" data-sortable="true">Prénom</th>
			<th data-field="date" data-filter-control="select" data-sortable="true">Date</th>
			<th data-field="examen" data-filter-control="select" data-sortable="true">Examen</th>
			<th data-field="note" data-sortable="true">Note</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
			<td>Valérie</td>
			<td>01/09/2015</td>
			<td>Français</td>
			<td>12/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
			<td>Eric</td>
			<td>05/09/2015</td>
			<td>Philosophie</td>
			<td>8/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
			<td>Valentin</td>
			<td>05/09/2015</td>
			<td>Philosophie</td>
			<td>4/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="3" name="btSelectItem" type="checkbox"></td>
			<td>Valérie</td>
			<td>05/09/2015</td>
			<td>Philosophie</td>
			<td>10/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="4" name="btSelectItem" type="checkbox"></td>
			<td>Eric</td>
			<td>01/09/2015</td>
			<td>Français</td>
			<td>14/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="5" name="btSelectItem" type="checkbox"></td>
			<td>Valérie</td>
			<td>07/09/2015</td>
			<td>Mathématiques</td>
			<td>19/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="6" name="btSelectItem" type="checkbox"></td>
			<td>Valentin</td>
			<td>01/09/2015</td>
			<td>Français</td>
			<td>11/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="7" name="btSelectItem" type="checkbox"></td>
			<td>Eric</td>
			<td>01/10/2015</td>
			<td>Philosophie</td>
			<td>8/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="8" name="btSelectItem" type="checkbox"></td>
			<td>Valentin</td>
			<td>07/09/2015</td>
			<td>Mathématiques</td>
			<td>14/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox"></td>
			<td>Valérie</td>
			<td>01/10/2015</td>
			<td>Philosophie</td>
			<td>12/20</td>
		</tr>
		<tr>
			<td class="bs-checkbox "><input data-index="10" name="btSelectItem" type="checkbox"></td>
			<td>Eric</td>
			<td>07/09/2015</td>
			<td>Mathématiques</td>
			<td>14/20</td>
		</tr>
		<tr>
		<td class="bs-checkbox "><input data-index="11" name="btSelectItem" type="checkbox"></td>
			<td>Valentin</td>
			<td>01/10/2015</td>
			<td>Philosophie</td>
			<td>10/20</td>
		</tr>
	</tbody>
</table>
</div>
<script>
 
</script>
<script>
   init({
    title: 'Filter Control',
    desc: 'Use Plugin: bootstrap-table-filter-control to filter table fields.',
    links: [
      'bootstrap-table.min.css'
    ],
    scripts: [
      'bootstrap-table.min.js',
      'extensions/filter-control/bootstrap-table-filter-control.min.js'
    ]
  })
  var $table = $('#table');
    $(function () {
        $('#toolbar').find('select').change(function () {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

		var trBoldBlue = $("table");

	$(trBoldBlue).on("click", "tr", function (){
			$(this).toggleClass("bold-blue");
	});
  </script>

</body>
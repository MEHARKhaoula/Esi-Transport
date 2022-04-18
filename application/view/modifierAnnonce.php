

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/main.css" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<style>

  body{
   padding : 5%;
    margin : 5%;
    
  }
  .titre{
      margin-left:5%;
  }
  </style>
<body>

    <br>
<h1 class="titre"> Veuillez introduire les nouveaux informations </h1>
<form action="<?php echo URL; ?>annoncesController/edit_annonces" method="post" id="form1"  enctype="multipart/form-data">

<div class="form-row">
    <div class="name">Titre</div>
    <div class="value">
        <input class="input--style-6" type="text" name="titre" placeholder="titre" value="<?php echo $annonceEdite['titre']?>">
    </div>
    </div>
  

<div class="form-row">
    <div class="name">Description</div>
    <div class="value">
        <div class="input-group">
            <textarea class="textarea--style-6" name="description"  value="<?php echo $annonceEdite['description']?>" > <?php echo $annonceEdite['description']?></textarea>
        </div>
    </div>
    </div>

    <div class="form-row">
    <div class="name">Départ</div>
    <div class="value">
        
        <SELECT name="depart" size="1" class="form-control"> 
        <?php foreach ($annonceEdite['wilayas'] as $wilaya) { 
         if($annonceEdite['depart']===$wilaya->nom) {
         echo'<OPTION value='.$wilaya->nom.' selected>' .$wilaya->nom;
        }
          else{
          echo "<OPTION value=".$wilaya->nom.">".$wilaya->nom;
          }

        
        }?>

</select>
        </div>
    </div>



<div class="form-row">
    <div class="name" >Arrive</div>
    <div class="value">
    <SELECT name="arrive" class="form-control" size="1"> 

    <?php foreach ($annonceEdite['wilayas'] as $wilaya) { 
         if($annonceEdite['arrive']===$wilaya->nom) {
         echo'<OPTION value='.$wilaya->nom.' selected>' .$wilaya->nom;
        }
          else{
          echo "<OPTION value=".$wilaya->nom.">".$wilaya->nom;
          }

        
        }?>
        
</select>
    </div>
</div>


<div class="form-row">
    <div class="name">Type de transport</div>
    <div class="value">
    <SELECT name="type" class="form-control" size="1">
<OPTION value="colis">colis
<OPTION value="demenagement">demenagement
<OPTION value="lettre">lettre
<OPTION value="colis léger">colis léger
<OPTION value="meuble">meuble
<OPTION value="electromenager">electromenager
</SELECT>
    </div>
</div>


<div class="form-row">
    <div class="name">Moyen de transport</div>
    <div class="value">
    <SELECT name="moyen" size="1" class="form-control">
<OPTION value="voiture">voiture
<OPTION value="camion">camion
<OPTION value="bus">bus
<OPTION value="avion">avion

</SELECT>
    </div>
</div>


<div class="form-row">
    <div class="name">Poids</div>
    <div class="value">
  
    <SELECT name="poids" size="1" class="form-control"> 
        <?php foreach ($annonceEdite['POIDS'] as $poids) { 
         if($annonceEdite['poids']===$poids->fourchette) { 
        echo"<OPTION  selected value=".htmlspecialchars($poids->fourchette, ENT_QUOTES, 'UTF-8').">".htmlspecialchars($poids->fourchette, ENT_QUOTES, 'UTF-8')."</option>";
        }
        else{
          echo"<OPTION   value=".htmlspecialchars($poids->fourchette, ENT_QUOTES, 'UTF-8').">".htmlspecialchars($poids->fourchette, ENT_QUOTES, 'UTF-8')."</option>";
        }
      }?>


      </SELECT>
    </div>
</div>

<div class="form-row">
    <div class="name">Volume</div>
    <div class="value">
    <SELECT name="volume" size="1" class="form-control">

    <?php foreach ($annonceEdite['VOLUME'] as $vol) { 
         if($annonceEdite['volume']===$vol->fourchette) { 
        echo"<OPTION  selected value=".htmlspecialchars($vol->fourchette, ENT_QUOTES, 'UTF-8').">".htmlspecialchars($vol->fourchette, ENT_QUOTES, 'UTF-8')."</option>";
        }
        else{
          echo"<OPTION   value=".htmlspecialchars($vol->fourchette, ENT_QUOTES, 'UTF-8').">".htmlspecialchars($vol->fourchette, ENT_QUOTES, 'UTF-8')."</option>";
        }
      }?>
</select> 
    </div>
</div>



<div class="form-row">
    <div class="name">Choisir Image</div>
    <div class="value">

        <div class="input-group js-input-file">
          
            <input  class="input-file" type="file" name="uploadfile" id="file" value=""/>
            <label class="label--file" for="file">Choose file</label>
           
      </div>

    </div>
</div> 

<div class="form-row">
    <div class="name"></div>
    <div class="value">
        <div class="input-group">
        <button type="submit" onclick="handleChange()" value="Publier"  name="submit_edit" class="btn btn--radius-2 btn--blue-2"> Publier</button> 
       
       
        </div>
    </div>
    </div>
    <input type="hidden" value="<?php echo $annonceEdite['id']?>" name="annonce_id_edit"/>
</form>

<?php 
 require_once("../application/view/footer.php") ;
 ?>



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
<link rel="stylesheet" href="<?php echo URL ?>css/menu.css">
<style>

body {

margin:5%;
padding:5%;
}

.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;

 /* max-width: 80%px;*/
  margin-block: 2rem;
  gap: 2rem;
}

img {
 width: 100%;
  height:300px;
  display: block;
  object-fit: cover;
}

.card {
  
  position: relative;
 
 margin:5%;
 text-align:center;
  width: 80%;
  overflow: hidden;
  box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
  border-radius: 1em;
  background: #ECE9E6;
background: linear-gradient(to right, #FFFFFF, #ECE9E6);

}



p.card__body {
  
	
  overflow: hidden;
  text-overflow: ellipsis;
 
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  
 
 
}

.titre__body{
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  
}
.tag {
  align-self: flex-end;
  padding: .25em .75em;
  border-radius: 1em;
  font-size: .75rem;
  position: absolute;
  bottom: 5%;
  left: 20%;
  text-align: center;
}

.tag + .tag {
 /* margin-left: .5em;*/
  position: absolute;
  bottom: 0;
  left: 0;
}

.tag-blue {
  background: #56CCF2;
  text-align: center;
background: linear-gradient(to bottom, #2F80ED, #56CCF2);
  color: #fafafa;
  border-radius: 2px;
    min-width: 121px;
    font-size: 13px;
    padding: 7px 0 7px 0;
}





.card__body h4 {
  font-size: 1.5rem;
  text-transform: capitalize;
}

.card__footer {
  display: flex;
  padding: 1rem;
  margin-top: auto;
}

.user {
  display: flex;
  gap: .5rem;
}

.user__image {
  border-radius: 50%;
}

.user__info > small {
  color: #666;
}
	</style>
	</head>
	<body>
  <?php require_once('../application/view/Menu.php') ?>
<div class="card">


<article>

	<h2>Détail signalement</h2>
	<p class="ingredients"><?php
echo $detail;
?>
</p>
	
 

</article>

</div>
</body>
<div class="tweets block"> 
            <h2 class="titular"><span class="icon zocial-twitter"></span>Liste des annonces</h2>
           
            <?php foreach ( $data as $annonce) {?> 
                 <div class="tweet first">
                <h2><?php echo $annonce->titre ;?></h2>
                <p><?php echo $annonce->description ;?></p>
               <p><?php echo $annonce->date ;?></p>

    <form action="<?php echo URL; ?>annonces/delete" method="post" id="form1" >
       <input type="hidden" name="annonce_id" value="<?php echo htmlspecialchars($annonce->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
            <button type="submit" name="submit_delete_annonce" value="Update" > Supprimer </button>      
</form>


<form action="<?php echo URL; ?>annonces/edit" method="post"  >
       <input type="hidden" name="annonce_id2" value="<?php echo htmlspecialchars($annonce->id_annonce, ENT_QUOTES, 'UTF-8'); ?>" />
            <button type="submit" name="submit_edit_annonce" value="Update" > Modifier </button>      
</form>
               </div>
              

             <?php } ?> 
            
        </div> 



        <a href="/images/myw3schoolsimage.jpg" download>  download</a>
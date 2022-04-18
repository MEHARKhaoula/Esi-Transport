
<p> mes demandes </p>
<?php foreach ( $data as $demande) {?> 
  <?php if ($demande->accepte==0){?> 
                 <div class="tweet first">
                <p>le transporteur <?php echo $demande->transporteur_id ;?> </p>
                <p><?php echo $demande->texte ;?></p>
              
    <form action="<?php echo URL; ?>demandes/accepter" method="post" id="form1" >
       <input type="hidden" name="demande_id" value="<?php echo htmlspecialchars($demande->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <button type="submit" name="submit_accepte" value="Update" > Accepter </button>      
</form>



               </div>
              

             <?php } }?> 
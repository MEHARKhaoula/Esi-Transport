
    
            <div style="display:table;width:80%;">
            <div style="display: table-header-group">
              <div style="display:table-row;">
                <div style="display:table-cell">Id</div>
                <div style="display:table-cell">Titre</div>
                <div style="display:table-cell">Details</div>
                <div style="display:table-cell">Id_client</div>
                <div style="display:table-cell">Id_transporteur</div>
                <div style="display:table-cell">Type</div>
                <div style="display:table-cell">Tarif</div>
                <div style="display:table-cell">Valider</div>
                <div style="display:table-cell">Transaction</div>
              </div>
            </div>
            <br>
            <div style="display: table-row-group;">
            <?php foreach ($data as $annonce) {?>
              <form id="" style="display:table-row;" action="<?php echo URL; ?>admin/modifier_annonce" method="post">
                <div style="display:table-cell"> <?php echo $annonce->id_annonce ;?></div>
                <div style="display:table-cell"> <?php echo $annonce->titre ;?> </div>
                <div style="display:table-cell"><?php echo $annonce->description ;?></div>
          <div style="display:table-cell"><?php echo $annonce->id_client ;?></div>
          <div style="display:table-cell"><?php echo $annonce->id_transport ;?></div>
          <div style="display:table-cell"><?php echo $annonce->type ;?> </div> 
          <div style="display:table-cell"><?php echo $annonce->tarif ;?> </div> 
          <input type="hidden" name=id_annonce value="<?php echo $annonce->id_annonce ;?>" >
          <div style="display:table-cell"><?php  if( $annonce->etat=="non")  {?>  <button type="submit" name="valider" value="Update" > Valider </button> <?php }else{ ?> validée <?php }?></div> 
          <div style="display:table-cell">  <?php if($annonce->transaction==0) {?> 
       en attente d'une transaction <?php }else{ ?>   transaction validee <?php }?></div> 
          <div style="display:table-cell"> <button type="submit" name="submit_documents" value="Update" > Modifier </button>    </div>
              </form>
       
          <?php } ?>
          
        
            </div>
          </div>
        
         
             
          <a href="<?php echo URL ?>documents/OK-CONTRAT-DE-PRESTATION-DE-SERVICE-DE-TRANSPORT-VTC.pdf" download>          download</a>
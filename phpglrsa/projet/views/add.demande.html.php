 
    
  
<h3>Uc: Formuler une demande</h3>

    
    <form class="click1" action="<?=WEBROOT?>" method="get">
                <label for="etat">État:</label>
                <select name="type" id="">
                 
                    <option value="Suspension">Suspension</option>
                    <option value="Annulationr">Annulation</option>
                   
                </select>
            
            
                <button id="okBtn" name="action" value="form-filtre-demande" class="butt1">OK</button>
          
      


   <div class="pap">
  <span class="pa">motif: </span>          
          
<textarea name="motif" id="message" cols="40" rows="10"></textarea>
        
</div> 
   

    <!-- <a href="<?=WEBROOT?>?action=liste"  class="bouton-lien">ANULLER</a>
    <a href="file:///C:/wamp64/www/market/index3.html"  class="bouton-lien">VALIDER</a> -->
   <div class="cl">
        <button type="reset">ANNULER</button>
        <button type="submit" name="action" value="form-add-demande">VALIDER</button>
    </div>  
    </form>  
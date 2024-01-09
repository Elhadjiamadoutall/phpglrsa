
    <h3>Uc: Lister ses demandes + filtre par état</h3>
    <table>
        <tr>
            <td>
                <h4>Filtre</h4>
            
        

<form class="click1" action="<?=WEBROOT?>" method="post">
                <label for="">État:</label>
                <select name="etat" id="">
                    <option value="All" <?php echo($etat=='All')?'selected':'';?>>All</option>
                    <option value="Accepte" <?php echo($etat=='Accepte')?'selected':'';?>>accepte</option>
                    <option value="Rejeter" <?php echo($etat=='Rejeter')?'selected':'';?>>Rejeter</option>
                    <option value="Encours" <?php echo($etat=='Encours')?'selected':'';?>>Encours</option>
                </select>
    <button id="okBtn" name="action" value="form-filtre-demande" class="butt1">OK</button>      
</form>
    
    
    <table class="tabl">
        <tr>
            
    

            <th>Date</th>
            <th>Type</th>
            <th>État</th>
            <th>action </th>
            
        </tr>
        <?php foreach($demandeEtu as $value):?>
        <tr>
            <td><?=$value["type"]?></td>
            <td><?=$value["date"]?></td>
            <td><?=$value["etat"]?></td>
            <td><button class="det"><a href="<?=WEBROOT?>?action=detail">voir details</a></button></td>
        </tr>
        <?php endforeach ?>
    </table>
    
    <a href="<?=WEBROOT?>?action=add"  class="boutlien">AJOUTER</a>
    



<!-- Modal content -->
<div class="modal-content">
    
    <div class="zone_image">
        <img src="assets/contact.jpg" alt="contact" class="img_contact" />
    </div>
    <div class="zone_contact">
        <h1> Contact </h1>


        <div class="input-container">
            <input type="text" required="" id="nom"/>
            <label>Nom</label>		
        </div>
        <div class="input-container">		
            <input type="text" required="" id="prenom"/>
            <label>Prénom</label>
        </div>
        	
        <select name="categories" id="formulaire_select">
            <option value="Developper">Developper</option>
            <option value="Recruté">Recruté</option>
            <option value="Entrepreneur">Entrepreneur</option>
        </select>
        <label>Catégorie</label>
        
    
        <div class="buttons">
            <button class="button_sidi btn_save" role="button" id="enregistrer_user" onclick="addUser()">Enregistrer</button>
            <button class="button_sidi btn_cancel" role="button" id="annuler_user" onclick="close()">Annuler</button>
        </div>
    </div>
    <span class="close">&times;</span>
</div>
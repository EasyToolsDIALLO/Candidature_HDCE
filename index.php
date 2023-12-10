<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/index.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <title>Carnet de Contact</title>
    <script type="text/javascript" src="javascript/table.js"></script>
</head>
<body>

    <div class="header">
        <h1>Carnet de Contact</h1>
    </div>
    <button class="button_sidi" role="button" id="myBtn">Ajouter un contact</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <?php include "views/formulaire.php"; ?>  
    </div>
    <div id="myUpdateModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="zone_image">
                <img src="assets/contact.jpg" alt="contact" class="img_contact" />
            </div>
            <div class="zone_contact">
                <h1> Update Contact </h1>
                <div class="input-container">
                    <input type="text" required="" id="updatenom"/>
                    <label>Nom</label>		
                </div>
                <div class="input-container">		
                    <input type="text" required="" id="updateprenom"/>
                    <label>Prénom</label>
                </div>
                		
                    
                <select name="categories" id="update_select">
                    <option value="Developper">Developper</option>
                    <option value="Recruté">Recruté</option>
                    <option value="Entrepreneur">Entrepreneur</option>
                </select>
                <label>Catégorie</label>

                
                <div class="buttons">
                    <button class="button_sidi btn_save" role="button" id="update_user" onclick="updateDetails()">Modifier</button>
                    <button class="button_sidi btn_cancel" role="button" id="ann_user" onclick="closeUpdate()">Annuler</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
            <span class="close">&times;</span>
        </div> 

    </div>


    <br><br>
    <input id="myInput" type="text" placeholder="Search..">
    <br><br>

    <div class="container">
    <table id="myTable">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Catégorie</th>
            <!-- Add more table headers as needed -->
        </tr>
        </thead>
        <tbody id="mytbody_data">
            
        <!-- Add more table rows as needed -->
        </tbody>
    </table>
    </div>


    <div id="myFicheModal" class="modal">
        <div class="modal-content">
        
        <div id="modalContent">
            <!-- Modal content goes here -->       
        </div>
        <span class="close">&times;</span>
        </div>
        
    </div>
    
   
    <script type="text/javascript" src="javascript/ficheModal.js"></script>
    <script type="text/javascript" src="javascript/modal.js"></script>
    
    <?php include 'ajax.php' ?>
    
</body>
</html>
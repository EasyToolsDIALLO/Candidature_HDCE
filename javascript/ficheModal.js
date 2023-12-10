
$(document).ready(function() {
  // Open modal when a table row is clicked
  $('#myTable tbody tr').on('click', function() {
    var id = $(this).data('id');
    var name = $(this).data('name');
    var prenom = $(this).data('prenom');
    var categorie = $(this).data('categorie');
    
    var fiche_contact_part1="<div class='zone_image'><img src='assets/fiche.jpg' alt='contact' class='img_contact' /></div><div class='zone_contact'><h1> Fiche de Contact </h1>"
    var fiche_contact_part2="<div class='fiche_body'><h1>Nom: "+name+"</h1><h1>Prénom: "+prenom+"</h1><h1>Catégorie: "+categorie+"</h1></div>"
    var fiche_contact_part3="<div class='buttons'><button class='button_sidi btn_save' role='button' id='modifier_fiche' >Modifier</button>"
    var fiche_contact_part4="<button class='button_sidi btn_cancel ' role='button' id='annuler_fiche'>Annuler</button></div></div>"
    
    var fiche_contact = fiche_contact_part1+fiche_contact_part2+fiche_contact_part3+fiche_contact_part4
    // Update modal content
    $('#modalContent').html(fiche_contact);
    $('#modalContent').css('display', 'flex');

    // Display the modal
    $('#myFicheModal').css('display', 'block');

    $('#annuler_fiche').on('click', function() {
      $('#myFicheModal').css('display', 'none');
    });

    $('#modifier_fiche').on('click', function() {                
          
          getDetails(id);  
    });
    
  });

  // Close modal when the close button is clicked
  $('.close').on('click', function() {
    $('#myFicheModal').css('display', 'none');
  });
 
  // Close modal when clicking outside the modal content
  $(window).on('click', function(event) {
    if (event.target === $('#myFicheModal')[0]) {
      $('#myFicheModal').css('display', 'none');
    }
  });
});
  
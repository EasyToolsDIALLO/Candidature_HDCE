$(document).ready(function(){
	$("#myInput").on("keyup", function() {
	  var value = $(this).val().toLowerCase();
	  $("#mytbody_data tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	  });
	});
  });
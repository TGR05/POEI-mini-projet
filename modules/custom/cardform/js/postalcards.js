(function ($) {
  $(document).ready(function(){

  $("#edit-title-0-value").keypress(update);
  $("#edit-field-recto-0-upload").keypress(update);
  $("#edit-field-verso-0-upload").keypress(update);
  $("#edit-field-nouvelles-0-value").keypress(update);
  $("#edit-field-nom-0-value").keypress(update);
  $("#edit-field-prenom-0-value").keypress(update);
  $("#edit-field-adresse-0-value").keypress(update);

});

function update(){

  //var modelpro = $("#edit-field-img-pro-card-0-upload").val();
  var mot     = (($("#edit-title-0-value").val() != "") 			     ? $("#edit-title-0-value").val() 		        : "sweet word");
  var Recto   = (($("#edit-field-recto-0-upload").val() != "") ? $("#edit-field-recto-0-upload").val() 	: "");
  var Verso    = (($("#edit-field-verso-0-upload").val() != "") 		   ? $("#edit-field-verso-0-upload").val() 		    : "") ;
  var Nouvelles         = (($("#edit-field-nouvelles-0-value").val() != "") 		   ? $("#edit-field-nouvelles-0-value").val() 		    : "News");
  var Nom     = (($("#edit-field-nom-0-value").val() != "") 	 ? $("#edit-field-nom-0-value").val() 		: "Last Name") ;
  var Prenom = (($("#edit-field-prenom-0-value").val() != "") 	     ? $("#edit-field-prenom-0-value").val()         : "First Name");
  var Addresse       = (($("#edit-field-adresse-0-value").val() != "") 			 ? $("#edit-field-adresse-0-value").val() 			  : "Address");



  //When selecting the model, loading the CSS file.

  /*$(function(){
    $(document.head.lastChild).remove();
    $("head").append(
      $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"css/" + modelpro + ".css"})
    );
  });*/

  $('#displayMot').html(mot);
  $('#displayRecto').html(Recto);
  $('#displayVerso').html(Verso);
  $('#displayNouvelles').html(Nouvelles);
  $('#displayNom').html(Nom);
  $('#displayPrenom').html(Prenom);
  $('#displayAddresse').html(Addresse);

}
})(jQuery);



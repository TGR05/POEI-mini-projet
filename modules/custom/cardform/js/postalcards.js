(function ($) {
  $(document).ready(function(){

  $("#edit-title-0-value").keypress(update);
  $("#edit-field-recto-0-upload").keypress(update);
  $("#edit-field-verso-0-upload").keypress(update);
  $("#edit-field-nouvelles-0-value").keypress(update);
  $("#edit-field-nom-0-value").keypress(update);
  $("#edit-field-prenom-0-value").keypress(update);
  $("#edit-field-adresse-0-value").keypress(update);

      var bgimage = $("span.file--image > a").attr('href');  // On définit la variable "bgimage" comme étant égale à la "href" de l'image éventuellement uploadée

      if (bgimage !== undefined) {      // si cette variable est définit
          console.log('checking if there is span.fileuuuh ' + bgimage);
          $('#postalcardrectolayout').css('background-image', 'url( ' + bgimage + ')');   // on met cette href dans l'url de la background image de #postalcardrectolayout
      }
      else {
          console.log('Whaat ???');
          $('#postalcardrectolayout').css('background-image', 'url(/modules/custom/cardform/images/cardmodels/postalcards/Nouvellecal.jpg  )');  // sinon on met une image par défaut
      }

      $(document).ajaxComplete(function(event, xhr, settings) {
          if ($('.field--name-field-recto .ajax-new-content').hasClass('processed')) {
              $('.ajax-new-content').remove();

              $('#postalcardrectolayout').removeAttr('style');
              console.log('No background anymore by removing image and reactivate Select image');
              return;
          }
          $('.field--name-field-recto .ajax-new-content').addClass('processed');

           var bgimage = $("span.file--image > a").attr('href');

          if (bgimage !== undefined) {
              $('#postalcardrectolayout').css('background-image', 'url( ' + bgimage + ')');
              console.log('Deactivate Select background image');
          }
          else {
              $('#postalcardrectolayout').removeAttr('style');
          }
      });
      update();
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
    /*console.log(patternBgImage);
    console.log("/modules/custom/cardform/images/cardmodels/postalcards/" + patternBgImage);
    if (patternBgImage != "_none") {
        if (patternBgImage != null) {
            $('#postalcardrectolayout').css('background-image', 'url("/modules/custom/cardform/images/cardmodels/postalcards/' + patternBgImage + '")');
            console.log("1 " + patternBgImage);
        }
        else {
            patternBgImage = $("span.file--image > a").attr('href');
            console.log("2 " + patternBgImage);
            $('#postalcardrectolayout').css('background-image', 'url( ' + patternBgImage + ')');
        }
    }*/
    //When selecting the position, loading the CSS file with text positions.

    $(function(){
        console.log("Adding position ?");

        if (posText != "_none") {
            $('link[href^="position"]').remove();
            console.log("Append");
            $("head").append(
                //Note: be carefull, Thomas version is "/modules/custom/cardform/css/postalcards/"
                $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"/modules/custom/cardform/css/postalcards/" + posText + ".css"})
            );
        }
        else {
            $('link[href^="position"]').remove();
        }
    });


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



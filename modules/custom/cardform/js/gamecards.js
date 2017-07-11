(function ($) {
  $(document).ready(function(){

  $("#edit-title-0-value").keypress(update);
  $("#edit-field-carac1-0-value").onclick = update();
  $("#edit-field-carac2-0-value").keypress(update);
  $("#edit-field-carac3-0-value").keypress(update);
  $("#edit-field-carac4-0-value").keypress(update);
  $("#edit-field-skill-0-value").keypress(update);
  $("#edit-field-question-0-value").keypress(update);
  $("#edit-field-answer-0-value").keypress(update);
  $("#edit-field-img-game-card-0-upload").keypress(update);
  $("#edit-field-behind-0-upload").keypress(update);

});

function update(){

  //var modelpro = $("#edit-field-img-pro-card-0-upload").val();
  var cardname     = (($("#edit-title-0-value").val() != "") 			     ? $("#edit-title-0-value").val() 		        : "");
  var carac1   = (($("#edit-field-carac1-0-value").val() != "") ? $("#edit-field-carac1-0-value").val() 	: "");
  var carac2   = (($("#edit-field-carac2-0-value").val() != "") ? $("#edit-field-carac2-0-value").val() 	: "");
  var carac3   = (($("#edit-field-carac3-0-value").val() != "") ? $("#edit-field-carac3-0-value").val() 	: "");
  var carac4   = (($("#edit-field-carac4-0-value").val() != "") ? $("#edit-field-carac4-0-value").val() 	: "");
  var skill    = (($("#edit-field-skill-0-value").val() != "") 		   ? $("#edit-field-skill-0-value").val() 		    : "") ;
  var question         = (($("#edit-field-question-0-value").val() != "") 		   ? $("#edit-field-question-0-value").val() 		    : "");
  var answer     = (($("#edit-field-answer-0-value").val() != "") 	 ? $("#edit-field-answer-0-value").val() 		: "") ;
  var gameimg = (($("#edit-field-img-game-card-0-upload").val() != "") 	     ? $("#edit-field-img-game-card-0-upload").val()         : "");
  var behindimg       = (($("#edit-field-behind-0-upload").val() != "") 			 ? $("#edit-field-behind-0-upload").val() 			  : "");



  //When selecting the model, loading the CSS file.

  /*$(function(){
    $(document.head.lastChild).remove();
    $("head").append(
      $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"css/" + modelpro + ".css"})
    );
  });*/

  $('#displayCardname').html(cardname);
  $('#displayCarac1').html(carac1);
  $('#displayCarac2').html(carac2);
  $('#displayCarac3').html(carac3);
  $('#displayCarac4').html(carac4);
  $('#displaySkill').html(skill);
  $('#displayQuestion').html(question);
  $('#displayNom').html(answer);
  $('#displayPrenom').html(gameimg);
  $('#displayAddresse').html(behindimg);

}
})(jQuery);



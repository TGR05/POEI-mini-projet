(function ($) {
  $(document).ready(function(){

  $("#edit-title-0-value").change(update);
  $("#edit-field-carac1-0-value").click(update);
  $("#edit-field-carac1-0-value").change(update);
  $("#edit-field-carac2-0-value").change(update);
  $("#edit-field-carac3-0-value").change(update);
  $("#edit-field-carac4-0-value").change(update);
  $("#edit-field-skill-0-value").change(update);
  $("#edit-field-question-0-value").change(update);
  $("#edit-field-answer-0-value").change(update);
  $("#edit-field-img-game-card-0-upload").change(update);
  $("#edit-field-upload_image_verso").change(update);

  var bgimagerecto = $("span.file--image > a:eq(0)").attr('href');

  if (bgimagerecto !== undefined) {
    $('#gamecardrectolayout').css('background-image', 'url( ' + bgimagerecto + ')');
  }

  var bgimageverso = $("span.file--image > a:eq(1)").attr('href');

  if (bgimageverso !== undefined) {
    $('#gamecardversolayout').css('background-image', 'url( ' + bgimageverso + ')');
  }

  $(document).ajaxComplete(function(event, xhr, settings) {
    //RECTO
    if(~settings.url.indexOf("field_img_game_card")) {
      console.log('entering recto');
      if ($('.field--name-field-img-game-card .ajax-new-content').hasClass('processed')) {
        console.log("remove recto");
        $('.ajax-new-content:eq(0)').remove();
        $('#gamecardrectolayout').removeAttr('style');
        $('.field--name-field-img-game-card .ajax-new-content').removeClass('processed');
        return;
      }
      $('.field--name-field-img-game-card .ajax-new-content').addClass('processed');

      var bgimagerecto = $("span.file--image > a:eq(0)").attr('href');

      if (bgimagerecto !== undefined) {
        $('#gamecardrectolayout').css('background-image', 'url( ' + bgimagerecto + ')');
      }
      return;
    }

   //VERSO
   if(~settings.url.indexOf("field_upload_image_verso")) {
     if ($('.field--name-field-upload-image-verso .ajax-new-content').hasClass('processed')) {
       console.log("remove verso");
       $('.ajax-new-content:eq(1)').remove();
       $('#gamecardversolayout').removeAttr('style');
       $('.field--name-field-upload-image-verso .ajax-new-content').removeClass('processed');
       return;
     }
     $('.field--name-field-upload-image-verso .ajax-new-content').addClass('processed');

     var bgimageverso = $("span.file--image > a:eq(1)").attr('href');

     if (bgimageverso !== undefined) {
       $('#gamecardversolayout').css('background-image', 'url( ' + bgimageverso + ')');
     }
   }
  });
});



function update(){

  var cardname  = (($("#edit-title-0-value").val() != "") 			         ? $("#edit-title-0-value").val() 		           : "");
  var carac1    = (($("#edit-field-carac1-0-value").val() != "")         ? $("#edit-field-carac1-0-value").val() 	       : "");
  var carac2    = (($("#edit-field-carac2-0-value").val() != "")         ? $("#edit-field-carac2-0-value").val() 	       : "");
  var carac3    = (($("#edit-field-carac3-0-value").val() != "")         ? $("#edit-field-carac3-0-value").val() 	       : "");
  var carac4    = (($("#edit-field-carac4-0-value").val() != "")         ? $("#edit-field-carac4-0-value").val() 	       : "");
  var skill     = (($("#edit-field-skill-0-value").val() != "") 		     ? $("#edit-field-skill-0-value").val() 	       : "") ;
  var question  = (($("#edit-field-question-0-value").val() != "") 		   ? $("#edit-field-question-0-value").val()       : "");
  var answer    = (($("#edit-field-answer-0-value").val() != "") 	       ? $("#edit-field-answer-0-value").val() 		     : "") ;
  var rectoImg   = (($("#edit-field-img-game-card-0-upload").val() != "") ? $("#edit-field-img-game-card-0-upload").val() : "");
  var versoImg = (($("#edit-field-upload_image_verso").val() != "") 		 ? $("#edit-field-upload_image_verso").val() 			 : "");


  if(rectoImg !== undefined) {
    if (rectoImg != null) {
      $('#gamecardrectolayout').css('background-image', 'url("' + rectoImg + '")');
    }
    else {
      rectoImg = $("span.file--image > a:eq(0)").attr('href');
      $('#gamecardrectolayout').css('background-image', 'url( ' + rectoImg + ')');
    }
  }

  if(versoImg !== undefined) {
    if (versoImg != null) {
      $('#gamecardrectolayout').css('background-image', 'url("' + versoImg + '")');
    }
    else {
      versoImg = $("span.file--image > a:eq(1)").attr('href');
      $('#gamecardrectolayout').css('background-image', 'url( ' + versoImg + ')');
    }
  }

  $('#displayCardname').html(cardname);
  $('#displayCarac1').html(carac1);
  $('#displayCarac2').html(carac2);
  $('#displayCarac3').html(carac3);
  $('#displayCarac4').html(carac4);
  $('#displaySkill').html(skill);
  $('#displayQuestion').html(question);
  $('#displayAnswer').html(answer);
}
})(jQuery);

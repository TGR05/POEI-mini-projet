(function ($) {
  $(document).ready(function(){

  //$('.right').slideDown('slow');
  $("#edit-field-img-pro-card-0-upload").click(update);
  $("#edit-title-0-value").change(update);
  $("#edit-field-first-name-0-value").change(update);
  $("#edit-field-last-name-0-value").change(update);
  $("#edit-field-job-0-value").change(update);
  $("#edit-field-address-0-value").change(update);
  $("#edit-field-num-0-value").change(update);
  $("#edit-field-mail-0-value").change(update);
  $("#edit-field-models").change(update);
  $("#edit-field-position").change(update);
  $("#edit-field-website-0-value").change(update);

  var bgimage = $("span.file--image > a").attr('href');

  if (bgimage !== undefined) {
    $('#businesscardlayout').css('background-image', 'url( ' + bgimage + ')');
    $('#edit-field-models').attr('disabled', 'disabled');
  }
  else {
    $('#edit-field-models').removeAttr('disabled');
  }

  $(document).ajaxComplete(function(event, xhr, settings) {
      if ($('.field--name-field-img-pro-card .ajax-new-content').hasClass('processed')) {
        $('.ajax-new-content').remove();

        $('#businesscardlayout').removeAttr('style');
        $('#edit-field-models').removeAttr('disabled');
        return;
      }
      $('.field--name-field-img-pro-card .ajax-new-content').addClass('processed');
      var bgimage = $("span.file--image > a").attr('href');

      if (bgimage !== undefined) {
        $('#businesscardlayout').css('background-image', 'url( ' + bgimage + ')');
        $('#edit-field-models').val('none');
        $('#edit-field-models').attr('disabled', 'disabled');
      }
      else {
        $('#businesscardlayout').removeAttr('style');
        $('#edit-field-models').val('none');
        $('#edit-field-models').removeAttr('disabled');
      }
  });
  update();
});

function update(){
  var company            = (($("#edit-title-0-value").val() != "") 			      ? $("#edit-title-0-value").val() 		        : "Company");
  var firstName          = (($("#edit-field-first-name-0-value").val() != "") ? $("#edit-field-first-name-0-value").val() : "First Name");
  var lastName           = (($("#edit-field-last-name-0-value").val() != "")  ? $("#edit-field-last-name-0-value").val() 	: "Last Name") ;
  var job                = (($("#edit-field-job-0-value").val() != "") 		    ? $("#edit-field-job-0-value").val() 		    : "Job");
  var address            = (($("#edit-field-address-0-value").val() != "") 	  ? $("#edit-field-address-0-value").val() 		: "Address") ;
  var phoneNumber        = (($("#edit-field-num-0-value").val() != "") 	      ? $("#edit-field-num-0-value").val()        : "Phone Number");
  var email              = (($("#edit-field-mail-0-value").val() != "") 			? $("#edit-field-mail-0-value").val() 			: "Email Address");
  var patternBgImage     = $("#edit-field-models").val();
  var posText            = $("#edit-field-position").val();
  var website            = (($("#edit-field-website-0-value").val() != "")    ? $("#edit-field-website-0-value").val() 		: "Website") ;

  if (patternBgImage != "_none") {
    if (patternBgImage != null) {
      $('#businesscardlayout').css('background-image', 'url("/cardsfactory/modules/custom/cardform/images/cardmodels/businesscards/' + patternBgImage + '")');
    }
    else {
      patternBgImage = $("span.file--image > a").attr('href');
      $('#businesscardlayout').css('background-image', 'url( ' + patternBgImage + ')');
    }
  }
  //When selecting the position, loading the CSS file with text positions.

  $(function(){
    if (posText != "_none") {
      $('link[href^="position"]').remove();
      $("head").append(
        //Note: be carefull, Thomas version is "/modules/custom/cardform/css/businesscards/"
        $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"/cardsfactory/modules/custom/cardform/css/businesscards/" + posText + ".css"})
      );
    }
    else {
      $('link[href^="position"]').remove();
    }
  });

  $('#displayCompany').html(company);
  $('#displayFirstName').html(firstName);
  $('#displayLastName').html(lastName);
  $('#displayJob').html(job);
  $('#displayAddress').html(address);
  $('#displayPhoneNumber').html(phoneNumber);
  $('#displayEmail').html(email);
  $('#displayWebsite').html(website);
}
})(jQuery);

(function ($) {
  $(document).ready(function(){

  $('.right').hide();
  $("#edit-field-img-pro-card-0-upload").click(update);
  $("#edit-title-0-value").keypress(update);
  $("#edit-field-first-name-0-value").keypress(update);
  $("#edit-field-last-name-0-value").keypress(update);
  $("#edit-field-job-0-value").keypress(update);
  $("#edit-field-address-0-value").keypress(update);
  $("#edit-field-num-0-value").keypress(update);
  $("#edit-field-mail-0-value").keypress(update);
  $("#edit-field-models").change(update);
  $("#edit-field-website-0-value").keypress(update);



      $(document).ajaxComplete(function(event, xhr, settings) {

          if ($('.field--name-field-img-pro-card .ajax-new-content').hasClass('processed')) {
              return;
          }
          console.log('test');
          $('.field--name-field-img-pro-card .ajax-new-content').addClass('processed');

          // get img href


          // set href to src img in template preview

      });
});

function update(){
  $('.right').slideDown('slow');
  var company     = (($("#edit-title-0-value").val() != "") 			     ? $("#edit-title-0-value").val() 		        : "Company");
  var firstName   = (($("#edit-field-first-name-0-value").val() != "") ? $("#edit-field-first-name-0-value").val() 	: "First Name");
  var lastName    = (($("#edit-field-last-name-0-value").val() != "")  ? $("#edit-field-last-name-0-value").val() 	: "Last Name") ;
  var job         = (($("#edit-field-job-0-value").val() != "") 		   ? $("#edit-field-job-0-value").val() 		    : "Job");
  var address     = (($("#edit-field-address-0-value").val() != "") 	 ? $("#edit-field-address-0-value").val() 		: "Address") ;
  var phoneNumber = (($("#edit-field-num-0-value").val() != "") 	     ? $("#edit-field-num-0-value").val()         : "Phone Number");
  var email       = (($("#edit-field-mail-0-value").val() != "") 			 ? $("#edit-field-mail-0-value").val() 			  : "Email Address");
  var pattern     = $("#edit-field-models").val();
  var website     = (($("#edit-field-website-0-value").val() != "")    ? $("#edit-field-website-0-value").val() 		: "Website") ;


  //When selecting the model, loading the CSS file.

  $(function(){
    // alert('haaaaa' + pattern); //
    $(document.head.lastChild).remove();
    $("head").append(
      $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"/modules/custom/cardform/css/businesscards/" + pattern + ".css"})
    );
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

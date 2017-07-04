$(document).ready(function(){
  $('#businesscardlayout').hide();
  //$("#edit-field-img-pro-card-0-upload").click(update);
  $("#edit-title-0-value").keypress(update);
  $("#edit-field-first-name-0-value").keypress(update);
  $("#edit-field-name-0-value").keypress(update);
  $("#edit-field-job-0-value").keypress(update);
  $("#edit-field-address-0-value").keypress(update);
  $("#edit-field-num-0-value").keypress(update);
  $("#edit-field-mail-0-value").keypress(update);
  //$("#website").keypress(update);
});

function update(){
  $('#businesscardlayout').slideDown('slow');
  //var modelpro = $("#edit-field-img-pro-card-0-upload").val();
  var company = 		(($("#edit-title-0-value").val() != "") 			? $("#edit-title-0-value").val() 		: "Company");
  var firstName = 	(($("#edit-field-first-name-0-value").val() != "") 		? $("#edit-field-first-name-0-value").val() 	: "First Name");
  var lastName = 		(($("#edit-field-name-0-value").val() != "") 		? $("#edit-field-name-0-value").val() 		: "Last Name") ;
  var protitle = 		(($("#edit-field-job-0-value").val() != "") 		? $("#edit-field-job-0-value").val() 		: "Professionnal Title");
  var address = 		(($("#edit-field-address-0-value").val() != "") 			? $("#edit-field-address-0-value").val() 		: "Address") ;
  var phoneNumber = (($("#edit-field-num-0-value").val() != "") 	? $("#edit-field-num-0-value").val() : "Phone Number");
  var email = 			(($("#edit-field-mail-0-value").val() != "") 				? $("#edit-field-mail-0-value").val() 			: "Email Address");
  //var website = 		(($("#website").val() != "") 			? $("#website").val() 		: "Website") ;


  //When selecting the model, loading the CSS file.

  /*$(function(){
    $(document.head.lastChild).remove();
    $("head").append(
      $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"css/" + modelpro + ".css"})
    );
  });*/

  $('#displayCompany').html(company);
  $('#displayFirstName').html(firstName);
  $('#displayLastName').html(lastName);
  $('#displayProTitle').html(protitle);
  $('#displayAddress').html(address);
  $('#displayPhoneNumber').html(phoneNumber);
  $('#displayEmail').html(email);
  $('#displayWebsite').html(website);
}

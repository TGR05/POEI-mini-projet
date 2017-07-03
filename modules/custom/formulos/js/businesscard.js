$(document).ready(function(){
  $('#preview').hide();
  $("#modelpro").click(update);
  $("#company").keypress(update);
  $("#firstname").keypress(update);
  $("#lastname").keypress(update);
  $("#protitle").keypress(update);
  $("#address").keypress(update);
  $("#phonenumber").keypress(update);
  $("#email").keypress(update);
  $("#website").keypress(update);
});

function update(){
  $('#preview').slideDown('slow');
  var modelpro = $("#modelpro").val();
  var company = 		(($("#company").val() != "") 			? $("#company").val() 		: "Company");
  var firstName = 	(($("#firstname").val() != "") 		? $("#firstname").val() 	: "First Name");
  var lastName = 		(($("#lastname").val() != "") 		? $("#lastname").val() 		: "Last Name") ;
  var protitle = 		(($("#protitle").val() != "") 		? $("#protitle").val() 		: "Professionnal Title");
  var address = 		(($("#address").val() != "") 			? $("#address").val() 		: "Address") ;
  var phoneNumber = (($("#phonenumber").val() != "") 	? $("#phonenumber").val() : "Phone Number");
  var email = 			(($("#email").val() != "") 				? $("#email").val() 			: "Email Address");
  var website = 		(($("#website").val() != "") 			? $("#website").val() 		: "Website") ;


  //When selecting the model, loading the CSS file.

  $(function(){
    $(document.head.lastChild).remove();
    $("head").append(
      $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"css/" + modelpro + ".css"})
    );
  });

  $('#displayCompany').html(company);
  $('#displayFirstName').html(firstName);
  $('#displayLastName').html(lastName);
  $('#displayProTitle').html(protitle);
  $('#displayAddress').html(address);
  $('#displayPhoneNumber').html(phoneNumber);
  $('#displayEmail').html(email);
  $('#displayWebsite').html(website);
}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Test Card Factory form with preview</title>
<link href="css/businesscardformlayout.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" src="js/businesscard.js"></script>
</head>
<body>
	<div id="container">
	  <h3>Create a business card</h3>
	  <div class="left">
	    <form>
				Choose a model<br/>
				<!-- Depending on the model, display the background and the fields positions.
				TODO: manage the selection with matching background image and css file. -->
	      <select name="modelpro" class="click" id="modelpro">
					<option value=""></option>
	        <option value="bluepro">Blue Model</option>
	        <option value="goldenwinterpro">Golden Winter Model</option>
					<option value="turquoisepro">Turquoise Model</option>
					<option value="colombuspro">Colombus Model</option>
	      </select>
				<br>

				Company<br/>
				<input id="company" class="click" name="company" type="text" placeholder="Company"/>
				<br/>
				<br/>

				First Name<br/>
				<input id="firstname" class="click" name="firstname" type="text" placeholder="First Name"/>
				<br/>
				<br/>

				Last Name<br/>
				<input id="lastname" class="click" name="lastname" type="text" placeholder="Last Name"/>
				<br/>
				<br/>

				Professionnal Title<br/>
				<input id="protitle" class="click" name="protitle" type="text" placeholder="Professionnal Title"/>
				<br/>
				<br/>

				Address<br/>
				<textarea id="address" class="click" placeholder="My address, Zip and City" name="address"></textarea>
				<br/>
				<br/>

				Phone Number<br/>
				<input id="phonenumber" class="click" name="phonenumber" type="text" placeholder="+(00) 00000"/>
				<br/>
				<br/>

				Email<br/>
				<input id="email" class="click" name="email" type="text" placeholder="contact@myemailaddress.me"/>
				<br/>

				Website<br/>
				<input id="website" class="click" name="website" type="text" placeholder="www.mysite.me"/>
				<br/>
	    </form>
	  </div>
	  <div class="right">
			<h3>PREVIEW</h3>
	    <div id="preview">
				<div id="displayCompany"></div>
	      <div id="displayIdentity">
					<span id="displayFirstName"></span> <span id="displayLastName"></span>
				</div>
				<span id="displayProTitle"></span>
				<div id="displayAddress"></div>
				<span id="displayPhoneNumber"></span>
				<span id="displayEmail"></span>
				<span id="displayWebsite"></span>
	    </div>
	  </div>
	  <div class="clear"></div>
	</div>

</body>
</html>

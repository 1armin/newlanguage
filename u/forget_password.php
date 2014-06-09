<?php
// Include utility files
require_once '../config.php';

//include message file
require_once INCLUDE_DIR.'/message.php';

//
$message = message();

?>
<!DOCTYPE html>
<html>
<head>
<title>forget password</title>

<style>
	#continer {
		width: 100%;
	}
	#homelink {
		display: block;
		text-align: center;
		margin: 20px auto;
		font-size: 30px;
	}
	#message {
		display: block;
		width: 300px;
		margin: 100px auto 0 auto;
		font-size: 18px;
		color: red;
		text-align: center;
	}
	#forget_password {
		width: 300px;
		margin: 30px auto 0 auto;
		background: #f3f3f3;
		border: 1px solid #ccc;
		border-radius: 10px;
	}
	#fp_form {
		width: 100%;
		margin-top: 15px;
	}
	#username,#email{
		width: 220px;
		height: 30px;
		padding: 0 15px;
		margin: 10px 24px;
		border-radius: 2px solid;
		font-size: 16px;
	}
	#fp_send {
		width: 200px;
		height: 35px;
		margin: 25px 49px;
	}
	.error {
		width: 220px;
		display: block;
		margin: 0 30px;
		color: red;

	}
</style>

<script src="js/jquery.js"></script>
	<script language="javascript">
		$(document).ready(function(){

			$("#username").focusout(function(){

				var username = $("#username").val();
				var username_pattern = /\W/; // allow letters, numbers, and underscores

    			if (username_pattern.test(username))
    			{
    				$("#usererr").text("username not valide.");
    			}
    			else
    			{
    				$("#usererr").text("");
    			}
  			});

  			$("#email").focusout(function(){

				var email_pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var email = $("#email").val();

				if (!(email_pattern.test(email)) && !(email.length == 0))
				{
    				$("#emailerr").text("Email address not valid.");
    				$("#email").select();
    			}
    			else
    			{
    				$("#emailerr").text("");
    			}
  			});

  			$("#fp_send").click(function(){

				var username = $("#username").val();
				var email    = $("#email").val();

				var username_validation   = false;
				var email_validation      = false;

				var username_pattern = /\W/; // allow letters, numbers, and underscores
				var email_pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


				//username validation
				if ((username == ""))
				{
    			$("#usererr").text("username not entered.");
    			}
    			else if (username_pattern.test(username))
    			{
    				$("#usererr").text("username not valide.");
    			}
    			else
    			{
    				$("#usererr").text("");
    				username_validation = true;
    			}


    			//Email validation
    			if ((email == ""))
    			{
    				$("#emailerr").text("password not entered.");
    			}
    			else if (!email_pattern.test(email))
    			{
    				$("#emailerr").text("Email address not valid.");
    			}
    			else
    			{
    				$("#emailerr").text("");
    				email_validation = true;
    			}

    			if (username_validation && email_validation){
					oForm = document.forms["forget_password"];
    				oForm.submit();
    			}
  			});
		});
		
		//
		//
	</script>
</head>

<body>
	<div id="continer">

		<a href="<?php print( SITE_URL ) ?>" id="homelink">home</a>
		<span id="message"><?php print($message); ?></span>

		<div id="forget_password">

		  <form name="forget_password" id="fp_form" method="post" action="sendmail_forgetpass.php">

			<input name="username" type="text" id="username" placeholder="username">
			<span id="usererr" class="error"></span>
			<input name="email" type="text" id="email" placeholder="email">
			<span id="emailerr" class="error"></span>
			<input name="forget_password" id="fp_send" type="button" value="send" onClick="sendform()">

		  </form>
		</div>
	</div><!-- end continer -->
</body>
</html>
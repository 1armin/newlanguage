<?php
session_start();

// Include utility files
require_once '../config.php';

//include message file
require_once INCLUDE_DIR.'/message.php';


// get message.
$message = message();

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>sign up</title>

	<style>
	   /* html5doctor.com Reset v1.6.1 - http://w3tms.com */
	html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}

	@font-face {
    font-family: 'OpenSansRegular';
    src: url('../font/OpenSans-Regular/OpenSans-Regular.eot');
    src: url('../font/OpenSans-Regular/OpenSans-Regular.eot?#iefix') format('embedded-opentype'),
         url('../font/OpenSans-Regular/OpenSans-Regular.woff') format('woff'),
         url('../font/OpenSans-Regular/OpenSans-Regular.ttf') format('truetype'),
         url('../font/OpenSans-Regular/OpenSans-Regular.svg#OpenSansRegular') format('svg');
    font-weight: normal;
    font-style: normal;

	}
	body {
		background: #46d9f9;
		font-family:'OpenSansRegular', Helvetica, Arial, sans-serif;
	}
	#continer {
		width: 100%;
	}
	#homelink {
		width: 497px;
		height: 127px;
		display: block;
		position: absolute;
		top: 250px;
		left: 80px;
		text-indent: -99999px;
		background: url(img/signuplogo.png) no-repeat;
	}
	#message {
		width: 320px;
		position: absolute;
		top: 50px;
		right: 150px;
		display: block;
	}
	#messagebox {
		display: block;
		font-size: 18px;
		color: red;
		text-align: center;
	}
	#msgclose {
		display: none;
	}
	#fregister {
		width: 320px;
		display: block;
		margin: 100px 150px 0 0;
		padding: 10px 0;
		background: #cdf6ff;
		float: right;
	}
	#rg_username,#rg_password,#rg_repeat_password,#rg_email{
		width: 250px;
		height: 20px;
		padding: 10px 15px;
		margin: 10px 20px;
		border: none;
		font-size: 16px;
		background-color: #fff;
	}
	#rg_password {
		margin-bottom: 5px;
	}
	#rg_repeat_password {
		margin-top: 5px;
	}
	#captcha {
		width:215px;
		height:80px;
		margin: 10px 10px 0 20px;
		border: solid 1px #ccc;
	}
	#refresh{
		width: 40px;
		height: 40px;
		display: inline-block;
		text-indent: -9999px;
		background: url(img/refresh.png);
		background-repeat: no-repeat;
		position: relative;
		bottom: 45px;
		opacity: .5;
	}
	#refresh:hover {
		opacity: .9;
	}
	#fcaptcha {
		width: 200px;
		height: 20px;
		padding: 10px 0 10px 15px;
		margin: -15px 0 0 20px;
		border: none;
		background-color: #fff;
		font-size: 16px;
	}
	#rg_send {
		width: 280px;
		height: 50px;
		margin: 25px 20px 10px 20px;
		border: none;
		background-color: #63c76a;
		font-size: 22px;
		color: #fff;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		transition: all 0.3s;
	}
	#rg_send:hover {
		background-color: #54b55b;
		
	}
	.error {
		width: 220px;
		display: block;
		margin: 0 0 0 30px;
		color: red;

	}
	@media only screen and (max-width: 1100px) {
		#fregister {
			margin: 0 auto;
			float: none;
		}
		#homelink {
			width: 286px;
			height: 58px;
			margin: 30px auto;
			position: static;
			text-indent: -99999px;
			background: url(img/signuplogo2.png) no-repeat;
		}
		#message {
			position: static;
			margin: 20px auto;

		}
	}
	</style>

	<script src="js/jquery.js"></script>

	<script language="javascript">
	
	$(document).ready(function(){

			$("#rg_username").focusout(function(){

				var username = $("#rg_username").val();
				var username_pattern = /\W/; // allow letters, numbers, and underscores

				if ((username.length < 3) && !(username.length == 0))
				{
    				$("#rg_usererr").text("username is short [limit 3].");
    				$("#rg_username").focus();
    			}
    			else if (username_pattern.test(username))
    			{
    				$("#rg_usererr").text("username not valid [just numbers, letters and underscores].");
    				$("#rg_username").select();
    			}
    			else if ((username.length > 3) && !(username_pattern.test(username)))
    			{
					$.post("check_username.php",{username:username},function(result){$("#rg_usererr").text(result)});
    			}
    			else
    			{
    				$("#rg_usererr").text("");
    			}

  			});

  			$("#rg_password").focusout(function(){
				var password = $("#rg_password").val();
				if ((password.length < 5) && !(password.length == 0))
				{
    				$("#rg_passerr").text("password is short.");
    				$("#rg_password").focus();
    			}
    			else
    			{
    				$("#rg_passerr").text("");
    			}
  			});

  			$("#rg_repeat_password").focusout(function(){

				var password = $("#rg_password").val();
				var repassword = $("#rg_repeat_password").val();

				if (!(password == repassword) && !(repassword.length == 0) && !(password.length == 0))
				{
    				$("#rg_repasserr").text("password not equal whit repeat.");
    			}
    			else
    			{
    				$("#rg_repasserr").text("");
    			}
  			});
  			
  			$("#rg_email").focusout(function(){

				var email_pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var email = $("#rg_email").val();

				if (!(email_pattern.test(email)) && !(email.length == 0))
				{
    				$("#rg_emailerr").text("Email address not valid.");
    				$("#rg_email").select();
    			}
    			else
    			{
    				$("#rg_emailerr").text("");
    			}
  			});



  			$("#rg_send").click(function(){

				var username   = $("#rg_username").val();
				var password   = $("#rg_password").val();
				var repassword = $("#rg_repeat_password").val();
				var email      = $("#rg_email").val();
				var captcha    = $("#fcaptcha").val();

				var username_validation   = false;
				var password_validation   = false;
				var repassword_validation = false;
				var email_validation      = false;
				var captcha_validation    = false;

				var username_pattern = /\W/; // allow letters, numbers, and underscores
				var email_pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


				//username validation
				if ((username == ""))
				{
    				$("#rg_usererr").text("username not entered.");
    			}
    			else if ((username.length < 3) && !(username.length == 0))
				{
    				$("#rg_usererr").text("username is short [limit 3].");
    			}
    			else if (username_pattern.test(username))
    			{
    				$("#rg_usererr").text("username not valide.");
    			}
    			else
    			{
    				$("#rg_usererr").text("");
    				username_validation = true;
    			}


    			//password validation
    			if ((password == ""))
    			{
    				$("#rg_passerr").text("password not entered.");
    			}
    			else if ((password.length < 5) && !(password.length == 0))
				{
    				$("#rg_passerr").text("password is short.");
    			}
    			else
    			{
    				$("#rg_passerr").text("");
    				password_validation = true;
    			}


    			//repeat password validation
    			if ((repassword == ""))
    			{
    				$("#rg_repasserr").text("repeat password not entered.");
    			}
    			else if (!(password === repassword))
				{
    				$("#rg_repasserr").text("password not equal whit repeat.");
    			}
    			else
    			{
    				$("#rg_repasserr").text("");
    				repassword_validation = true;
    			}

    			//Email validation
    			if (email == "")
    			{
    				$("#rg_emailerr").text("Email address not entered.");
    			}
    			else if (!email_pattern.test(email))
				{
    				$("#rg_emailerr").text("Email address not valid.");
    			}
    			else
    			{
    				$("#rg_emailerr").text("");
    				email_validation = true;
    			}


    			//captcha validation
    			if (captcha == "")
    			{
    				$("#rg_captchaerr").text("captcha not entered.");
    			}
    			else
    			{
    				$("#rg_captchaerr").text("");
    				captcha_validation = true;
    			}


    			//all validation
    			if (username_validation && password_validation && repassword_validation && email_validation && captcha_validation){
					registform = document.forms["register"];
					registform.submit();
    			}
  			});


		});

</script>
</head>
<body>
	<div id="continer">

		<a href="<?php print( SITE_URL ) ?>" id="homelink">home</a>
		<span id="message"><?php print($message); ?></span>
			<form action="save.php" method="post" name="register" id="fregister">

    		<input name="rg_username" type="text" id="rg_username" maxlength="30" placeholder="username">
    		<span id="rg_usererr" class="error"></span>

    		<input name="rg_password" type="password" id="rg_password" placeholder="password">
    		<span id="rg_passerr" class="error"></span>

    		<input name="rg_repeat_password" type="password" id="rg_repeat_password" placeholder="repeat password">
    		<span id="rg_repasserr" class="error"></span>

    		<input name="rg_email" type="email" id="rg_email" placeholder="email">
    		<span id="rg_emailerr" class="error"></span>

    		<img id="captcha" src="<?php print( ADMIN_URL.'securimage_show.php'); ?>" alt="CAPTCHA Image" />

			<a href="#" id="refresh" onclick="document.getElementById('captcha').src = '<?php print( ADMIN_URL."securimage_show.php?"); ?>' + Math.random(); return false">[ Different Image ]</a>
    		
    		<input type="text" id="fcaptcha" name="captcha_code" size="10" maxlength="6" placeholder="enter above text" />
    		<span id="rg_captchaerr" class="error"></span>
    
    		<input name="rg_send" type="button" value="Sign up" id="rg_send">
    
			</form>

	</div><!-- end continer -->
</body>
</html>
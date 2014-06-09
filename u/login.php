<?php
// Include utility files
require_once '../config.php';

//include message file
require_once INCLUDE_DIR.'/message.php';

//get message .
$message = message();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>login</title>

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
		width: 305px;
		height:60px;
		display: block;
		margin: 100px auto 0 auto;
		text-indent: -99999px;
		background: url(img/loginlogo.png) no-repeat;

	}
	#message {
		display: block;
		width: 300px;
		margin: 10px auto 0 auto;
		font-size: 18px;
		color: red;
		text-align: center;
	}
	#flogin {
		width: 350px;
		margin: 30px auto 0 auto;
		padding: 10px 0;
		background: #cdf6ff;
	}
	#username,#password {
		width: 260px;
		height: 20px;
		padding: 15px 5px 15px 45px;
		margin: 10px 20px;
		font-size: 18px;
		border: none;
		background-color: !important;
		background: #fff url(img/loginusps.png) no-repeat;
	}
	#password {
		background-position: 0 -50px;
	}
	#spanremember {
		margin: 10px 20px;
		display: block;
		font-size: 18px;
		color: #686868;
	}
	#remember {
		margin-right: 10px;
	}
	#logbutt {
		width: 300px;
		height: 50px;
		margin: 20px auto 10px auto;
		display: block;
		background-color: #46d9f9;
		border: none;
		font-size: 22px;
		color: #fff;
		cursor: pointer;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		transition: all 0.3s;
	}
	#logbutt:hover {
		background-color: #00c6ff;
	}
	.spanlink {
		text-align: center;
		color: #fff;
		font-size: 14px;
		margin: 15px 0;
	}
	.spanlink a {
		text-decoration: none;
		color: #004eff;
	}
	.error {
		width: 220px;
		display: block;
		margin: 0 30px;
		color: red;

	}
	#msgclose {
		display: none;
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

			$("#password").focusout(function(){
				var password = $("#password").val();
				if (password != "")
				{
					$("#passerr").text("");
    			}
  			});

			$("#logbutt").click(function(){

				var username = $("#username").val();
				var password = $("#password").val();

				var username_validation = false;
				var password_validation = false;

				var username_pattern = /\W/; // allow letters, numbers, and underscores


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


    			//password validation
    			if ((password == ""))
    			{
    				$("#passerr").text("password not entered.");
    			}
    			else
    			{
    				$("#passerr").text("");
    				password_validation = true;

    			}

    			//all validation
    			if (username_validation && password_validation){
					oForm = document.forms["login"];
					oForm.submit();	
    			}
  			});


		});
		
			
		
	</script>
</head>

<body>
	<div id="continer">
		<a href="<?php print( SITE_URL ) ?>" id="homelink">home</a>
		<span id="message"><?php print($message); ?></span>

		<form name="login" method="post" action="check.php" id="flogin">

			<input name="username" type="text" id="username" placeholder="username">
			<span id="usererr" class="error"></span>
			<input name="password" type="password" id="password" placeholder="password">
			<span id="passerr" class="error"></span>
			<span id="spanremember"><input name="remember" type="checkbox" id="remember">remember me</span>
			<input name="login" type="button" value="login" id="logbutt">

		</form>
		<p class="spanlink">not a member yet? <a href="<?php print(ADMIN_URL.'join.php') ?>">registr now</a></p>
		<p class="spanlink">lost your password? <a href="<?php print(ADMIN_URL.'forget_password.php') ?>">reset</a></p>

	</div><!-- end continer -->
</body>
</html>
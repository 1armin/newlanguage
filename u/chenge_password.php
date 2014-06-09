<?php
// Include utility files
require_once '../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';

//include message file
require_once INCLUDE_DIR.'/message.php';

//
$message = message();
?>
<!DOCTYPE html>
<html>
<head>
	<title>chenge password :: <?php print($admin_username); ?></title>
	<script language="javascript">

		function sendform()
		{
		var password = document.getElementById("password").value;
		var new_password = document.getElementById("new_password").value;
		var repley_new_password = document.getElementById("repley_new_password").value;

		if((password=="")||(new_password=="")||(repley_new_password==""))
		{
		alert("تمام فیلد ها را پر کنید");	
		}
		else if(!(new_password==repley_new_password))
		{
			alert("پسورد جدید با تکرار آن برابر نیست");
		}
		else
		{
		oForm = document.forms["chenge_pass"];
		oForm.submit();	
		}
		}
	</script>
</head>
<body>
<div id="continer">
	<span><a href="<?php print( SITE_URL ) ?>">home</a></span>
	<span><a href="<?php print(SITE_URL.'admin/logout.php') ?>">logout</a></span><br><br>
	<form name="chenge_pass" method="post" action="save_chenge.php">

		<input name="password" type="text" id="password" placeholder="your password"><br>
		<input name="new_password" type="password" id="new_password" placeholder="new password"><br>
		<input name="repley_new_password" type="password" id="repley_new_password" placeholder="repley new password"><br>
		<input name="chenge" type="button" value="chenge" onClick="sendform()">

		</form>
	<span><?php print($message); ?></span>
	</div><!-- end continer -->
</body>
</html>
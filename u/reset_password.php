<?php

// Include utility files
require_once '../config.php';

//include security class file
require_once INCLUDE_DIR.'/security.php';
//include mytools file
require_once INCLUDE_DIR.'/mytools.php';
//include message file
require_once INCLUDE_DIR.'/message.php';

//
$message = message();


if(isset($_GET['code']))
{
   $resetpass_code = $_GET['code'];

   $obj_security= new security();
   $resetpass_code= $obj_security->filter_md5code($resetpass_code);

   $obj_connect= new PDO(DSN,DBUSER,DBPASS);
   $qery = "SELECT * FROM users WHERE resetpass_code=:resetpass_code";
   $stmt = $obj_connect->prepare($qery);
   $stmt->bindValue(':resetpass_code', $resetpass_code);
   $stmt->execute();


   $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if (isset($row["resetpass_code"]))
  {
	 $message = '
		<form name="reset_password" method="post" action="save_resetpass.php">
		<input name="username" type="hidden" value="'.$row["username"].'">
		<input name="resetpass_code" type="hidden" value="'.$resetpass_code.'">
		<input name="password" type="text" id="password" placeholder="password"><br>
		<input name="rp_password" type="text" id="rp_password" placeholder="repeat password"><br>
		<input name="reset_password" type="button" value="save" onClick="sendform()">
		</form>';
  }
  else
  {
  	$message = "verify code is invalid.";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>reset password</title>
	<script language="javascript">

		function sendform()
		{
		var password = document.getElementById("password").value;
		var rp_password = document.getElementById("rp_password").value;

		if((password=="")||(rp_password==""))
		{
		alert("please enter password and repeat password in feild");	
		}
		else if(password != rp_password)
		{
		alert("password and repeat password is not equal");
		}
		else
		{
		oForm = document.forms["reset_password"];
		oForm.submit();	
		}
		}
	</script>
</head>

<body>
	<div id="continer">
		<div id="reset_password">
		<span><a href="<?php print( SITE_URL ) ?>">home</a></span>
		<br>
		<span><?php print($message); ?></span>
		</div>
	</div><!-- end continer -->
</body>
</html>
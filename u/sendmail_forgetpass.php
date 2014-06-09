<?php

// Include utility files
require_once '../config.php';

	//include security class file
	require_once INCLUDE_DIR.'/security.php';
	//include mytools file
	require_once INCLUDE_DIR.'/mytools.php';

if(isset($_POST["username"]))
{

 
  $username     = trim( $_POST["username"] );
  $email        = $_POST["email"];
  
  $obj_security = new security();
  $username     = $obj_security->filter_username($username);
  $email        = $obj_security->filter_email($email);

  $obj_connect  = new PDO(DSN,DBUSER,DBPASS);
  $qery = "SELECT * FROM users WHERE username=:username AND email=:email";
  $stmt = $obj_connect->prepare($qery);
  $stmt->bindValue(':username', $username);
  $stmt->bindValue(':email', $email);
  $stmt->execute();
  

	if($stmt->fetchAll(PDO::FETCH_ASSOC))
	{
		$randno1 = mt_rand();
  		$randno2 = mt_rand();
  		$resetpass_code = md5($email.'hgfds558sd555ssax44cvbnmml'.$randno1.''.$randno2);
  		$emailmessage   = "<p>please click below link</p><br><a href='ADMIN_URL/reset_password.php?code=$resetcode'></a>  ";

  		$quusername   = $obj_connect->quote($username);
    	$qurepasscode = $obj_connect->quote($resetpass_code);

    	$obj_connect->exec("UPDATE users SET resetpass_code=$qurepasscode WHERE username=$quusername");

		mail($email,"verify code",$emailmessage);

		//goto main page
		print( redirect('forget_password.php?message=57') );
	}
	
	else
	{
	//bake to login page 
	print( redirect('forget_password.php?message=58') ); 
	}
}
else
  {
  //bake to login page
  print( redirect('forget_password.php?message=56') );
  }

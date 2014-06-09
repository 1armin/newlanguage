<?php
// Include utility files
require_once '../config.php';

//include security class file
require_once INCLUDE_DIR.'/security.php';
//include mytools file
require_once INCLUDE_DIR.'/mytools.php';


if(isset($_POST["password"]))
{
  $username       = $_POST["username"];
  $password       = $_POST["password"];
  $resetpass_code = $_POST["resetpass_code"];
  
  $obj_security   = new security();
  $username       = $obj_security->filter_username($username);
  $resetpass_code = $obj_security->filter_md5code($resetpass_code);
  $password       = md5($password);
  
  $obj_connect    = new PDO(DSN,DBUSER,DBPASS);
  $quusername     = $obj_connect->quote($username);
  $qupassword     = $obj_connect->quote($password);
  $qurepasscode   = $obj_connect->quote($resetpass_code);

  $obj_connect->exec("UPDATE users SET password=$qupassword WHERE username=$quusername");
  $obj_connect->exec("UPDATE users SET resetpass_code=$qurepasscode WHERE username=$quusername");


	print( redirect('reset_password.php?message=59') );
}
else
{
  //bake to reset_password page 
	print( redirect('reset_password.php?message=60') );
}

?>
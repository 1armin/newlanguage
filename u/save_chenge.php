<?php
// Include utility files
require_once '../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';

if(isset($_POST["password"]))
{

  //include mytools file
  require_once INCLUDE_DIR.'/mytools.php';

  $admin_username;
  $password     = md5($_POST["password"]);
  $new_password = md5($_POST["new_password"]);

  $obj_connect= new PDO(DSN,DBUSER,DBPASS);

  $qery = "SELECT * FROM users WHERE username=:username AND password=:password";
  $stmt = $obj_connect->prepare($qery);
  $stmt->bindValue(':username', $admin_username);
  $stmt->bindValue(':password', $password);
  $stmt->execute();

  if($stmt->fetchAll(PDO::FETCH_ASSOC))
	{
    $quusername = $obj_connect->quote($admin_username);
    $qupassword = $obj_connect->quote($new_password);

    $obj_connect->exec("UPDATE users SET password=$qupassword WHERE username=$quusername");

		print( redirect('chenge_password.php?message=55') );
	}
  else
  {
  	//bake to login page 
	print( redirect('login.php?message=51') );
  }
  }
?>
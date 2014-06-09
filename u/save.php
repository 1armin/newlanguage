<?php

// Include utility files
require_once '../config.php';

//include security class file
require_once INCLUDE_DIR.'/security.php';
//include securimage class file
require_once ADMIN_DIR.'/securimage.php';
//include mytools file
require_once INCLUDE_DIR.'/mytools.php';



if(isset($_POST["rg_username"]))
{

  $obj_securimage = new Securimage();
  if ($obj_securimage->check($_POST['captcha_code']) == true)
  {


  $username = $_POST["rg_username"];
  $password = $_POST["rg_password"];
  $email = $_POST["rg_email"];

  $obj_security= new security();
  $username = $obj_security->filter_username($username);
  $email = $obj_security->filter_email($email);
  
  $date = date("y/m/d");
  $randno1 = mt_rand();
  $randno2 = mt_rand();
  $verifycode = md5($email.'hgfds558sd555ssax44cvbnmml'.$randno1.''.$randno2);
  $emailmessage = "<p>please click below link</p><br><a href='ADMIN_URL/verify.php?code=$verifycode'></a>  ";
  $password = md5($password);



  $obj_connect= new PDO(DSN,DBUSER,DBPASS);
  
  $qery = "select * from users where username=:username";
  $stmt = $obj_connect->prepare($qery);
  $stmt->bindValue(':username', $username);
  $stmt->execute();

  if($stmt->fetchAll(PDO::FETCH_ASSOC))
	{
	//goto join page
	print( redirect('join.php?message=50') );
	}
  else
  {
    $quusername   = $obj_connect->quote($username);
    $qupassword   = $obj_connect->quote($password);
    $quemail      = $obj_connect->quote($email);
    $qudate       = $obj_connect->quote($date);
    $quverifycode = $obj_connect->quote($verifycode);

    $obj_connect->exec("INSERT INTO users (username,password,email,join_date,verify) VALUES ($quusername,$qupassword,$quemail,$qudate,$quverifycode)");


  $_SESSION["userverify"]="not verified";
  
  $_SESSION["usersession"]=$username;
  

  mail($email,"verify code",$emailmessage);

	//goto admin page
	print( redirect('index.php?message=54') );
	
  }
  }
  else
  {
    //goto join page
    print( redirect('join.php?message=80') );
  }
}

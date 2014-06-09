<?php

session_start();

// Include utility files
require_once '../config.php';

//include security class file
require_once INCLUDE_DIR.'/security.php';
//include mytools file
require_once INCLUDE_DIR.'/mytools.php';

if(isset($_POST["username"]))
{

 
  $username = $_POST["username"];
  $password = $_POST["password"];
  $remember = isset($_POST['remember']) ? '1' : '0';
  
  $obj_security= new security();
  $username = $obj_security->filter_username($username);
  $password = md5($password);

  $obj_connect= new PDO(DSN,DBUSER,DBPASS);
  $qery = "select * from users where username=:username and password=:password";
  $stmt = $obj_connect->prepare($qery);
  $stmt->bindValue(':username', $username);
  $stmt->bindValue(':password', $password);
  $stmt->execute();

  

	if($stmt->fetch(PDO::FETCH_ASSOC))
	{

		$row = $stmt->fetch(PDO::FETCH_ASSOC);


		if ($remember == '1')
		{

		$randomnumber = mt_rand(99,999999);  					//generates a random number to serve as a key
        $token        = dechex(($randomnumber*$randomnumber));  //convert number to HEXADECIMAL form
        $key          = sha1($token . $randomnumber);
        $timenow      = time()+60*60*24*30;  					//stocks 30 day in the var

		$quusername     = $obj_connect->quote($username);
		$qutoken        = $obj_connect->quote($token);
		$qurandomnumber = $obj_connect->quote($randomnumber);

		$obj_connect->exec("UPDATE users SET token=$qutoken WHERE username=$quusername");
		$obj_connect->exec("UPDATE users SET randomnumber=$qurandomnumber WHERE username=$quusername");
        

        setcookie("rememberme", $username . "," . $key, $timenow, "/");

		}

		if ($row["verify"] != "verified")
		{
			$_SESSION["userverify"]="not verified";
		}

		$_SESSION["usersession"]=$username;

	//goto main page
	print( redirect('index.php') );
	}
	
	else
	{
	//bake to login page 
	print( redirect('login.php?message=51') ); 
	}
}
else
  {
  //bake to login page
  print( redirect('login.php?message=56') );
  }



?>
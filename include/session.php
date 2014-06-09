<?php

// for admin section

session_start();


 if (isset($_COOKIE['rememberme']) and !isset($_SESSION['usersession']))
 {

	//include class_db file
	require_once INCLUDE_DIR.'/class_db.php';

 	$rememberme = explode(",", $_COOKIE["rememberme"]);
 	$cookie_username = $rememberme[0];
    $cookie_key = $rememberme[1];

    $cookie_username = filter_var($cookie_username, FILTER_SANITIZE_STRING);
    $cookie_key = filter_var($cookie_key, FILTER_SANITIZE_STRING);

    $obj_connect= new connect();
    $result = $obj_connect->select("select * from users where username='$cookie_username'");
    $obj_connect->disconnect();
    $row = mysql_fetch_assoc($result);
    $token = $row['token'];
    $randomnumber = $row['randomnumber'];
    $key = sha1($token . $randomnumber);

    if ($key == $cookie_key)
    {
    	if ($row["verify"] != "verified")
		{
			$_SESSION["userverify"]="not verified";
		}

		$_SESSION["usersession"]=$cookie_username;
    }
 }

$admin_username = $_SESSION['usersession'];
$admin_username = filter_var($admin_username, FILTER_SANITIZE_STRING);

if(!isset($_SESSION['usersession']))
{
include INCLUDE_DIR . 'mytools.php';
print(redirect( ADMIN_URL.'login.php?message=52'));	
}

?>
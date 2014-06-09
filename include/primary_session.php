<?php

// for public pages such as index.php

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

if(isset($_SESSION['usersession']))
{
$user = $_SESSION['usersession'];
$user = filter_var($user, FILTER_SANITIZE_STRING);
$admin_login = "1";
}
else
{
$user = "guest";
$admin_login = "0";	
}
?>
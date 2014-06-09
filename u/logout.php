<?php
session_start();

// Include utility files
require_once '../config.php';

//include mytools file
require_once INCLUDE_DIR.'/mytools.php';


setcookie("rememberme", "", time()-3600, "/");

session_unset("usersession");

print(redirect('login.php?message=53'));
?>
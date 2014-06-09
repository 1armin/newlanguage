<?php

// Include utility files
require_once '../config.php';

//include security class file
require_once INCLUDE_DIR.'/security.php';
//include primary_session file
require_once  INCLUDE_DIR. 'primary_session.php';


if(isset($_GET['code']))
{
   $verifycode   = $_GET['code'];
   $obj_security = new security();
   $verifycode   = $obj_security->filter_md5code($verifycode);

   $obj_connect  = new PDO(DSN,DBUSER,DBPASS);

   $qery = "select * from users where verify=:verifycode";
   $stmt = $obj_connect->prepare($qery);
   $stmt->bindValue(':verifycode', $verifycode);
   $stmt->execute();

    if($stmt->fetchAll(PDO::FETCH_ASSOC))
    {
       $quverifycode = $obj_connect->quote($verifycode);
       $obj_connect->exec("UPDATE users SET verify='verified' WHERE verify=$quverifycode");

	   print("your accont verify successfully.");
       $_SESSION["userverify"]="";
    }
    else
    {
        print("verify code is invalid.");
    }
}
else
    {
        print("verify code is invalid.");
    }

?>
<?php
// Include utility files
require_once '../config.php';

//include security class file
require_once INCLUDE_DIR.'/security.php';
// Include session files
require_once  INCLUDE_DIR. 'session.php';
//include mytools file
require_once INCLUDE_DIR.'/mytools.php';

if(isset($_POST["name"]) || isset($_POST["lastname"]) || isset($_POST["visible_email"]) || isset($_POST["birthday"]))
{

  $obj_security= new security();
  $admin_username= $obj_security->filter_username($admin_username);
  $name          = $obj_security->filter_username($_POST["name"]);
  $lastname      = $obj_security->filter_username($_POST["lastname"]);
  $visible_email = $obj_security->filter_email($_POST["visible_email"]);
  $birthday      = $_POST["birthday"];

    $obj_connect= new PDO(DSN,DBUSER,DBPASS);

    $quusername      = $obj_connect->quote($admin_username);
    $quname          = $obj_connect->quote($name);
    $qulastname      = $obj_connect->quote($lastname);
    $quvisible_email = $obj_connect->quote($visible_email);
    $qubirthday      = $obj_connect->quote($birthday);


    $obj_connect->exec("UPDATE users SET name=$quname WHERE username=$quusername");
    $obj_connect->exec("UPDATE users SET lastname=$qulastname WHERE username=$quusername");
    $obj_connect->exec("UPDATE users SET visible_email=$quvisible_email WHERE username=$quusername");
    $obj_connect->exec("UPDATE users SET birthday=$qubirthday WHERE username=$quusername");


    //bake to profile_setting page 
    print( redirect('profile_setting.php?message=61') );
}
else
{
    print( redirect('profile_setting.php?message=62') );
}
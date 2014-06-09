<?php

// Include utility files
require_once '../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';
//include security class file
require_once INCLUDE_DIR.'security.php';
//include mytools file
require_once INCLUDE_DIR.'mytools.php';

if(isset($_POST["id"]) && ($_POST["id"] != ""))
{
  $obj_security= new security();

  $id     = $obj_security->filter_num($_POST["id"]);
  $answer = $obj_security->filter_num($_POST["answer"]);

  $obj_connect= new PDO(DSN,DBUSER,DBPASS);
  
  	$qery = "SELECT repo FROM $admin_username WHERE id=:id";
  	$stmt = $obj_connect->prepare($qery);
  	$stmt->bindValue(':id', $id);
  	$stmt->execute();

  	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if ($answer == "1")
	{
  		$repo = $row["0"]["repo"];
  		$repo++;
	}
	else
	{
		$repo = "1";
	}
    $quid     = $obj_connect->quote($id);
    $qurepo   = $obj_connect->quote($repo);


    $obj_connect->exec("UPDATE $admin_username SET repo=$qurepo WHERE id=$quid");
    $obj_connect->exec("UPDATE $admin_username SET x=0 WHERE id=$quid");

}
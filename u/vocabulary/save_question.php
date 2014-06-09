<?php

// Include utility files
require_once '../../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';
//include security class file
require_once INCLUDE_DIR.'security.php';
//include mytools file
require_once INCLUDE_DIR.'mytools.php';

if(isset($_POST["question"]) && ($_POST["question"] != ""))
{
  $obj_security= new security();

  $question    = $_POST["question"] //$obj_security->filter_text();
  $answer      = $obj_security->filter_num($_POST["answer"]);
  $valswitch1  = $obj_security->filter_text($_POST["valswitch1"]);
  $valswitch2  = $obj_security->filter_text($_POST["valswitch2"]);
  $valswitch3  = $obj_security->filter_text($_POST["valswitch3"]);
  $valswitch4  = $obj_security->filter_text($_POST["valswitch4"]);
  $discription = $_POST["discription"]  //$obj_security->filter_text();


  $obj_connect= new PDO(DSN,DBUSER,DBPASS);
  
  $qery = "select * from vocabulary where question=:question";
  $stmt = $obj_connect->prepare($qery);
  $stmt->bindValue(':question', $question);
  $stmt->execute();

  if($stmt->fetch(PDO::FETCH_ASSOC))
	{
	 //goto management page
	 print( redirect('management.php?message=90') );
	}
  else
  {
    $ququestion   = $obj_connect->quote($question);
    $quanswer     = $obj_connect->quote($answer);
    $quvalswitch1 = $obj_connect->quote($valswitch1);
    $quvalswitch2 = $obj_connect->quote($valswitch2);
    $quvalswitch3 = $obj_connect->quote($valswitch3);
    $quvalswitch4 = $obj_connect->quote($valswitch4);
    $qudiscription= $obj_connect->quote($discription);

    $obj_connect->exec("INSERT INTO vocabulary (question,answer,switch1,switch2,switch3,switch4,discription) VALUES ($ququestion,$quanswer,$quvalswitch1,$quvalswitch2,$quvalswitch3,$quvalswitch4,$qudiscription)");


	 //goto management page
	 print( redirect('management.php?message=91') );
  }
}
else
{
  //goto management page
  print( redirect('management.php?message=92') );
}
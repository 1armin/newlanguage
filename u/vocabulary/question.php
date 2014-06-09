<?php

// Include utility files
require_once '../../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';
//include security class file
require_once INCLUDE_DIR.'security.php';

$id          = "0";
$question    = "";
$answer      = "";
$discription = "";
$switch1     = "";
$switch2     = "";
$switch3     = "";
$switch4     = "";
$msg         = "";

$obj_connect= new PDO(DSN,DBUSER,DBPASS);
  
  $stmt = $obj_connect->prepare("SELECT id FROM $admin_username");
  $stmt->execute();

  if($stmt->fetchAll(PDO::FETCH_ASSOC))
	{
		$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
		$stmt->execute();

		if ($id = $stmt->fetchAll())
		{
			$id = $id["0"]["0"];
			$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
			$question    = $row["0"]["question"];
			$answer      = $row["0"]["answer"];
			$discription = $row["0"]["discription"];
			$switch1     = $row["0"]["switch1"];
			$switch2     = $row["0"]["switch2"];
			$switch3     = $row["0"]["switch3"];
			$switch4     = $row["0"]["switch4"];

	 		//print("repo 6 is ok. *** id= ". $id ." *** answer = ". $answer);
		}
		else
		{
			$id   = "0";
			$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE repo=5");
			$stmt->execute();
			$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$count = count($row);

			if ( $count >= 160)
			{
	 			$obj_connect->exec("UPDATE $admin_username SET x=1 WHERE repo=5");
	 			$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
				$stmt->execute();
				$id = $stmt->fetchAll();
				$id = $id["0"]["0"];
				$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
				$question    = $row["0"]["question"];
				$answer      = $row["0"]["answer"];
				$discription = $row["0"]["discription"];
				$switch1     = $row["0"]["switch1"];
				$switch2     = $row["0"]["switch2"];
				$switch3     = $row["0"]["switch3"];
				$switch4     = $row["0"]["switch4"];

			}
			else
			{
				$id   = "0";
				$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE repo=4");
				$stmt->execute();
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$count = count($row);

				if ( $count >= 80)
				{
	 				$obj_connect->exec("UPDATE $admin_username SET x=1 WHERE repo=4");
	 				$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
					$stmt->execute();
					$id = $stmt->fetchAll();
					$id = $id["0"]["0"];
					$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
					$question    = $row["0"]["question"];
					$answer      = $row["0"]["answer"];
					$discription = $row["0"]["discription"];
					$switch1     = $row["0"]["switch1"];
					$switch2     = $row["0"]["switch2"];
					$switch3     = $row["0"]["switch3"];
					$switch4     = $row["0"]["switch4"];
				}
				else
				{
					$id   = "0";
					$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE repo=3");
					$stmt->execute();
					$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$count = count($row);

					if ( $count >= 40)
					{
	 					$obj_connect->exec("UPDATE $admin_username SET x=1 WHERE repo=3");
	 					$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
						$stmt->execute();
						$id = $stmt->fetchAll();
						$id = $id["0"]["0"];
						$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
						$question    = $row["0"]["question"];
						$answer      = $row["0"]["answer"];
						$discription = $row["0"]["discription"];
						$switch1     = $row["0"]["switch1"];
						$switch2     = $row["0"]["switch2"];
						$switch3     = $row["0"]["switch3"];
						$switch4     = $row["0"]["switch4"];
					}
					else
					{
						$id   = "0";
						$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE repo=2");
						$stmt->execute();
						$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
						$count = count($row);

						if ( $count >= 20)
						{
	 						$obj_connect->exec("UPDATE $admin_username SET x=1 WHERE repo=2");
	 						$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
							$stmt->execute();
							$id = $stmt->fetchAll();
							$id = $id["0"]["0"];
							$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
							$question    = $row["0"]["question"];
							$answer      = $row["0"]["answer"];
							$discription = $row["0"]["discription"];
							$switch1     = $row["0"]["switch1"];
							$switch2     = $row["0"]["switch2"];
							$switch3     = $row["0"]["switch3"];
							$switch4     = $row["0"]["switch4"];
						}
						else
						{
							$id   = "0";
							$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE repo=1");
							$stmt->execute();
							$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
							$count = count($row);

							if ( $count >= 10)
							{
	 							$obj_connect->exec("UPDATE $admin_username SET x=1 WHERE repo=1");
	 							$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
								$stmt->execute();
								$id = $stmt->fetchAll();
								$id = $id["0"]["0"];
								$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
								$question    = $row["0"]["question"];
								$answer      = $row["0"]["answer"];
								$discription = $row["0"]["discription"];
								$switch1     = $row["0"]["switch1"];
								$switch2     = $row["0"]["switch2"];
								$switch3     = $row["0"]["switch3"];
								$switch4     = $row["0"]["switch4"];
							}
							else
							{
								$row = $obj_connect->query("SELECT COUNT(id) FROM $admin_username")->fetchAll();
								$countt = $row["0"]["0"];
								$row = $obj_connect->query("SELECT id FROM vocabulary limit $countt,10")->fetchAll();
								if ($row)
								{
 									foreach ($row as $value)
 									{
 										$obj_connect->exec("INSERT INTO $admin_username (id,repo,x) VALUES (".$value["0"].",1,1)");
 									}
 									$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
									$stmt->execute();
									$id = $stmt->fetchAll();
									$id = $id["0"]["0"];
									$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
									$question    = $row["0"]["question"];
									$answer      = $row["0"]["answer"];
									$discription = $row["0"]["discription"];
									$switch1     = $row["0"]["switch1"];
									$switch2     = $row["0"]["switch2"];
									$switch3     = $row["0"]["switch3"];
									$switch4     = $row["0"]["switch4"];
 								}
 								else
 								{
 									$row = $obj_connect->query("SELECT COUNT(id) FROM $admin_username WHERE repo<6")->fetchAll();
 									$count = $row["0"]["0"];
 									if ( $count >= 1 )
 									{
 										$obj_connect->exec("UPDATE $admin_username SET x=1 WHERE repo<6");

 										$stmt = $obj_connect->prepare("SELECT id FROM $admin_username WHERE x=1");
										$stmt->execute();
										$id = $stmt->fetchAll();
										$id = $id["0"]["0"];
										$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
										$question    = $row["0"]["question"];
										$answer      = $row["0"]["answer"];
										$discription = $row["0"]["discription"];
										$switch1     = $row["0"]["switch1"];
										$switch2     = $row["0"]["switch2"];
										$switch3     = $row["0"]["switch3"];
										$switch4     = $row["0"]["switch4"];
 									}
 									else
 									{
										$msg = "Congratulations, vocabulary is finished.<br>you learn " . $countt . " word.";
									}
 								}
							}
						}
					}
				}
			}
		}
	}
	else
	{
  	$obj_connect->exec("
  		CREATE TABLE $admin_username
  		(
			id int NOT NULL,
			repo int(2),
			x int(2),
			PRIMARY KEY (id)
		)");


		$row = $obj_connect->query("SELECT id FROM vocabulary limit 10")->fetchAll();
		foreach ($row as $value)
 		{
 			$obj_connect->exec("INSERT INTO $admin_username (id,repo,x) VALUES (".$value["0"].",1,1)");
 		}
 		$row = $obj_connect->query("SELECT id FROM $admin_username WHERE x=1 limit 1")->fetchAll();
 		$id = $row["0"]["0"];
		$row = $obj_connect->query("SELECT * FROM vocabulary WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
			
		$question    = $row["0"]["question"];
		$answer      = $row["0"]["answer"];
		$discription = $row["0"]["discription"];
		$switch1     = $row["0"]["switch1"];
		$switch2     = $row["0"]["switch2"];
		$switch3     = $row["0"]["switch3"];
		$switch4     = $row["0"]["switch4"];
	}

print('{"question":"'.$question.'" , "id":"'.$id.'" , "answer":"'.$answer.'" , "switch1":"'.$switch1.'" , "switch2":"'.$switch2.'" , "switch3":"'.$switch3.'" , "switch4":"'.$switch4.'" , "discription":"'.$discription.'" , "msg":"'.$msg.'"}');
?>
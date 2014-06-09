<?php
// Include utility files
require_once '../../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';

//include message file
require_once INCLUDE_DIR.'/message.php';

//
$message = message();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Management panel</title>
</head>
<body>
<form name="question" method="post" action="save_question.php">

	<textarea id="question" name="question" placeholder="question" cols="40" rows="3"></textarea><br><br>
	<input type="radio" id="switch1" name="answer" value="1"><input type="text" id="valswitch1" name="valswitch1"><br>
	<input type="radio" id="switch2" name="answer" value="2"><input type="text" id="valswitch2" name="valswitch2"><br>
	<input type="radio" id="switch3" name="answer" value="3"><input type="text" id="valswitch3" name="valswitch3"><br>
	<input type="radio" id="switch4" name="answer" value="4"><input type="text" id="valswitch4" name="valswitch4"><br><br>
	<textarea id="discription" name="discription" placeholder="discription" cols="40" rows="4"></textarea><br><br>
	<input type="submit" id="submit" value="submit"><br>

</form>
	<span><?php print($message); ?></span>
</body>
</html>
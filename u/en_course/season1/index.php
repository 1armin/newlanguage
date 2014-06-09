<?php
// Include utility files
require_once '../../config.php';
// Include session files
require_once  INCLUDE_DIR. 'session.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>season 1 :: <?php print($admin_username); ?></title>

	<style src="css/style.css" type="text/css"></style>

	<style type="text/css">

	
	</style>
</head>
<body>
<header></header>
<div class="container">
	<a href="<?php print( SITE_URL ) ?>">home</a>
	<a href="<?php print(SITE_URL.'admin/logout.php') ?>">logout</a><br><br>

	<a href="<?php print(SITE_URL.'en_course/season1/lesson_01.php') ?>">lesson 01</a><br>
	<a href="<?php print(SITE_URL.'en_course/season1/lesson_02.php') ?>">lesson 02</a><br>
	<a href="<?php print(SITE_URL.'en_course/season1/lesson_03.php') ?>">lesson 03</a><br>

</div>

<footer>
	
</footer>
<script src="js/html5.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>
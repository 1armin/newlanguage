<?php
// Include utility files
require_once '../config.php';
// location
$location = "setting";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>

<?php
$obj_connect= new PDO(DSN,DBUSER,DBPASS);
$qery = "select * from users where username=:username";
$stmt = $obj_connect->prepare($qery);
$stmt->bindValue(':username', $admin_username);
$stmt->execute();
$row  = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<style type="text/css">
	h2 {
		font-size: 40px;
		margin: 30px 50px;
		color: #fff;
	}
	form {
		width: 500px;
		float: left;
		display: block;
		margin: 10px 0 0 50px;
	}
	input[type="text"] {
		width: 310px;
		height: 20px;
		float: right;
		padding: 10px 15px;
		margin: 15px 0;
		font-size: 16px;
		color: #333;
		border: none;
	}
	label {
		width: 150px;
		height: 30px;
		padding-top: 10px;
		margin: 15px 0;
		float: left;
		color: #fff;
		font-size: 20px;
	}
	#usnm {
		width: 340px;
		height: 30px;
		padding-top: 10px;
		margin: 15px 0;
		float: left;
		color: #2c2c2c;
		font-size: 18px;
	}
	#save {
		background-color: #46d9f9;
		color: #fff;
		font-size: 18px;
		border: solid 2px #fff;
		padding: 10px 30px;
		margin: 25px 0;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		transition: all 0.3s;
	}
	#save:hover {
		background-color: #00ccff;
	}
</style>
<div id="container">

<?php if (isset($_SESSION["userverify"])) { print('<span id="msgnotvrfy">your email address not verified, please check it and click on verify link.<span id="msgnotvrfyclose" onclick="msgnotvrfyhideFunction()">X</span></span>'); }?> <?php print($message); ?>
<h2>profile setting</h2>
<form name="profile_setting" method="post" action="save_profile_setting.php">

	<label>username :</label><span id="usnm"><i><?php print($admin_username); ?></i></span>
	<label name="name" alt="نام">name :</label><input name="name" type="text" id="name" placeholder="your name" value="<?php print($row['name']);?>"><br>
	<label name="lastname">last name :</label><input name="lastname" type="text" id="lastname" placeholder="your lastname" value="<?php print($row['lastname']);?>"><br>
	<label name="visible_email">visible email :</label><input name="visible_email" type="text" id="visible_email" placeholder="visible email" value="<?php print($row['visible_email']);?>"><br>
	<label name="birthday">birthday :</label><input name="birthday" type="text" id="birthday" value="<?php print($row['birthday']);?>"><br>
	<input name="save" type="submit" id="save" value="save">

</form>

</div><!-- end container -->

<?php require_once 'footer.php'; ?>

</body>
</html>
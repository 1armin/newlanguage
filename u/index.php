<?php
// Include utility files
require_once '../config.php';
//
$location = "home";
?>
<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>

<div id="container">
<?php if (isset($_SESSION["userverify"])) { print('<span id="msgnotvrfy">your email address not verified, please check it and click on verify link.<span id="timer"></span><span id="msgnotvrfyclose" onclick="msgnotvrfyhideFunction()">X</span></span>'); }?>
<?php print($message); ?>
<p>hi, i am armin</p>
	
</div><!-- end container -->

<?php require_once 'footer.php'; ?>

</body>
</html>
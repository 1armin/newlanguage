<?php
// Include utility files
require_once '../../config.php';
//
$location = "vocabulary";
?>
<?php require_once '../header.php'; ?>
<?php require_once '../sidebar.php'; ?>

<div id="container">
<?php if (isset($_SESSION["userverify"])) { print('<span id="msgnotvrfy">your email address not verified, please check it and click on verify link.<span id="msgnotvrfyclose" onclick="msgnotvrfyhideFunction()">X</span></span>'); }?>
<?php print($message); ?>
	<span id="loading"></span>

	<div id="load">
	<input id="id" type="hidden" value="">
	<input id="answer" type="hidden" value="">
	<span id="spanquestion"><h2 id="question"></h2></span>
	<div id="sw">
		<span class="spanswitch sw1" id="switch1"><h3 id="h3switch1"></h3></span>
		<span class="spanswitch sw2" id="switch2"><h3 id="h3switch2"></h3></span>
		<span class="spanswitch sw3" id="switch3"><h3 id="h3switch3"></h3></span>
		<span class="spanswitch sw4" id="switch4"><h3 id="h3switch4"></h3></span>
	</div>
	<span id="discription"></span>
	<button disabled>next &#8250;&#8250;</button>

	</div>
</div><!-- end container -->

<?php require_once '../footer.php'; ?>

<script src="<?php print(SCRIPT_URL); ?>jquery.js"></script>
<script src="<?php print(SCRIPT_URL); ?>spin.min.js"></script>
<script src="<?php print(SCRIPT_URL); ?>script.js"></script>

</body>
</html>
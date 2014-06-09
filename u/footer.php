<div id="overlay">
     <span id="smapcls" onclick="smapmodal()">Close</span>
     <h2>site map</h2>

     <ul id="linkul1">
     	<li><a href="<?php print( SITE_URL ) ?>">new language</a></li>
     	<li><a href="<?php print(ADMIN_URL) ?>">home</a></li>
     	<li><a href="<?php print(ADMIN_URL.'game/index.php') ?>">game</a></li>
     	<li><a href="<?php print(ADMIN_URL.'story/index.php') ?>">story</a></li>
     	<li><a href="<?php print(ADMIN_URL.'vocabulary/index.php') ?>">vocabulary</a></li>
     </ul>
     <ul id="linkul2">
     	<li><a href="<?php print( SITE_URL ) ?>">language</a></li>
     	<li><a href="<?php print(ADMIN_URL) ?>">blog</a></li>
     	<li><a href="<?php print(ADMIN_URL.'game/index.php') ?>">game</a></li>
     	<li><a href="<?php print(ADMIN_URL.'story/index.php') ?>">story</a></li>
     	<li><a href="<?php print(ADMIN_URL.'vocabulary/index.php') ?>">linkgg</a></li>
     </ul>
     <ul id="linkul3">
     	<li><a href="<?php print( SITE_URL ) ?>">language</a></li>
     	<li><a href="<?php print(ADMIN_URL) ?>">blog</a></li>
     	<li><a href="<?php print(ADMIN_URL.'game/index.php') ?>">game</a></li>
     	<li><a href="<?php print(ADMIN_URL.'story/index.php') ?>">story</a></li>
     	<li><a href="<?php print(ADMIN_URL.'vocabulary/index.php') ?>">linkgg</a></li>
     </ul>

</div>
<footer>
<span id="sitemap" onclick="smapmodal()">site map</span>
<span id="copyright">20<?php print(date("y")); ?> Copyright © NewLanguage.ir - All rights reserved.</span>
</footer>


<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript">
resizeFunction();
<?php if (isset($_SESSION["userverify"])) { print('setInterval(function(){document.getElementById("msgnotvrfy").style.display="none";},20000);'); }?>
</script>
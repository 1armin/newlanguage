<?php
// Include session files
require_once  INCLUDE_DIR. 'session.php';

//include message file
require_once INCLUDE_DIR.'/message.php';

//get message
$message = message();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title><?php print($location)?> :: <?php print($admin_username); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php print( STYLE_URL ) ?>style.css">
	<?php if ($location=='vocabulary') print('<link rel="stylesheet" type="text/css" href="'.STYLE_URL.'vocabulary_style.css">'); ?>
	<?php if ($location=='story') print('<link rel="stylesheet" type="text/css" href="'.STYLE_URL.'story_style.css">'); ?>
	<?php if ($location=='story » view') print('<link rel="stylesheet" type="text/css" href="'.STYLE_URL.'book_style.css">'); ?>
	<?php if ($location=='game » synonym') print('<link rel="stylesheet" type="text/css" href="'.STYLE_URL.'synonym_style.css">'); ?>
	<?php if ($location=='game') print('<link rel="stylesheet" type="text/css" href="'.STYLE_URL.'game_style.css">'); ?>

<script type="text/javascript">
function resizeFunction()
{

var viewportwidth;
var viewportheight;
  
// the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
  
if (typeof window.innerWidth != 'undefined')
{
    viewportwidth = window.innerWidth,
    viewportheight = window.innerHeight
}
// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
 
else if (typeof document.documentElement != 'undefined'
    && typeof document.documentElement.clientWidth !=
    'undefined' && document.documentElement.clientWidth != 0)
{
   viewportwidth = document.documentElement.clientWidth,
   viewportheight = document.documentElement.clientHeight
}
  
// older versions of IE
  
else
{
    viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
    viewportheight = document.getElementsByTagName('body')[0].clientHeight
}

// other code
if ( ((viewportheight - 520)/2) > 0 ) {document.getElementById("sidebarul").style.marginTop=(viewportheight - 520)/2 + "px"}
else {document.getElementById("sidebarul").style.marginTop="0px"}
}

function msgnotvrfyhideFunction()
{
document.getElementById("msgnotvrfy").style.display="none";
}
function msghideFunction()
{
document.getElementById("messagebox").style.display="none";
}
function smapmodal() {
	el = document.getElementById("overlay");
	el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}
</script>
</head>
<body onresize="resizeFunction()">
<header>
	<a id="logo" href="<?php print( SITE_URL ) ?>">new language</a>

	<span id="usericon"></span>
	<span id="username"><?php print($admin_username); ?></span>
	<a id="logout" href="<?php print(ADMIN_URL.'logout.php') ?>">logout</a>
	<a id="setting" href="<?php print(ADMIN_URL.'profile_setting.php') ?>">profile setting</a>
	<a id="help" href="<?php print(ADMIN_URL.'help.php') ?>">help</a>
</header>

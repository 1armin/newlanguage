<?php

// Include utility files

require_once 'config.php';
//include primary_session file
require_once  INCLUDE_DIR. 'primary_session.php';
//include class_db file
require_once  INCLUDE_DIR. 'class_db.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>home<?php if ( $admin_login == "1" ) { print( " :: " . $user ); } ?> </title><!-- site title - if user logged show his name.-->
	<meta charset="UTF-8">
    <meta name="author" content="Armin Mohammadian">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">

    <meta property="og:title" content="آموزش آنلاین زبان انگلیسی : newlanguage"/>
    <meta property="og:site_name" content="newlanguage"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://newlanguage.ir/"/>
    <meta property="og:image" content=""/>
    <link rel="stylesheet" type="text/css" href="style.css">

<script src="<?php print(SCRIPT_URL); ?>pace.min.js"></script>
<script type="text/javascript">
	function viewportFunction()
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
	document.getElementById("sec1").style.height = viewportheight + "px";
	}

</script>
</head>

<body onresize="viewportFunction()" onload="viewportFunction()">

	<section id="sec1">
	<span id="line_1" class="line"></span>
	<div id="title_h1"><h1>آموزش آنلاین زبان انگلیسی</h1></div>
	<p>اینجا محلی برای آموزش زبانه که میتونید با امکانات فوقالاده
که شامل بازی های آنلاین , داستان ها و دوره های آموزشی
جامع مهارت زبان خودتون رو افزایش بدهید. فقط کافیه که
ثبت نام کنید و از امکانات بی نظیر این سایت بهره ببرید</p>

	<?php if ( $admin_login == "0" ) : ?><!-- if user dont logged: -->
		
	<div id="logjo">
		<form name="login" method="post" action="<?php print(ADMIN_URL.'check.php') ?>" id="flogin">
			<span id="usererr" class="error"></span>
			<span id="passerr" class="error"></span>
			<input name="username" type="text" id="username" placeholder="username">
			<input name="password" type="password" id="password" placeholder="password">
			<input name="login" type="button" value="ورود" id="logbutt">
			<span id="spanremember"><input name="remember" type="checkbox" id="remember">مرا بخاطر بسپار</span>
		</form>
		<a id="join" href="<?php print(ADMIN_URL.'join.php') ?>">ثبت نام</a>
	</div>

	<?php else: ?><!-- else: -->

	<?php if (isset($_SESSION["userverify"])){ print($_SESSION["userverify"]); } ?><!-- show verify status. -->
	<span><a href="<?php print(ADMIN_URL.'index.php') ?>">admin panel</a></span><!-- admin panel page link. -->
	<span><a href="<?php print(ADMIN_URL.'logout.php') ?>">logout</a></span><!-- logout page link. -->

	<?php endif; ?>

	</section>
	<svg class="triangle tr1" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 40" preserveAspectRatio="none">
        <path d="M0 0 L50 40 L100 0 Z" />
    </svg>
	<section id="sec2">
		<span id="line_2" class="line"></span>
		<div class="titlediv" id="title2"><h2 class="titleh2" id="title2_h2">امکانات سایت</h2></div>
		<p class="discripp">این سایت  دارای امکانات زیادی است که بعد از ثبت نام و ورود به پنل آموزشی خود میتوانید از آنها بهره مند شوید
شما میتونید در زیر برخی از آنها رو مشاهده کنید</p>

	<div id="prodacts">
		<span class="arrow" id="left"></span>
		<span class="arrow" id="right"></span>
		<div>
		<div class="prod_sec">
			<div class="circle" id="cir1"></div>
			<h3>داستان های انگلیسی</h3>
			<p>در این بخش شما میتوانید با مطالعه داستان های انگلیسی به صورت آنلاین در محیطی زیبا و همچنین گوش دادن به تلفظ کلمات و جملات مهارت های خواندن و شنیدن خود را تقویت کنید.</p>
		</div>
		<div class="prod_sec">
			<div class="circle" id="cir2"></div>
			<h3>بازی های آموزشی</h3>
			<p>این بخش شامل بازی های متنوع و جالب که به روشی جذاب باعث افزایش مهارت های زبان شما و همچنین تشویق شما به تمرین بیشتر زبان بدون خستگی میباشد.</p>
		</div>
		<div class="prod_sec">
			<div class="circle" id="cir3"></div>
			<h3>برنامه آموزش لغت</h3>
			<p>برنامه آموزش لغت با روش لایتنر که یک روش شناخته شده در زمینه یادگیری لغات است باعث مشود که لغات از حافضه کوتاه مدت به حافضه بلند مدت منتقل شود و تا سالها در ذهنتان بماند.</p>
		</div>
		</div>
	</div>
	</section>
	<svg class="triangle tr2" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 40" preserveAspectRatio="none">
        <path d="M0 0 L50 40 L100 0 Z" />
    </svg>
	<section id="sec3">
		<span id="line_3" class="line"></span>
		<div class="titlediv" id="title3"><h2 class="titleh2" id="title3_h2">پرسشهای متداول</h2></div>

	</section>
	<svg class="triangle tr3" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 40" preserveAspectRatio="none">
        <path d="M0 0 L50 40 L100 0 Z" />
    </svg>
	<section id="sec4">
		
	</section>
	<svg class="triangle tr4" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 40" preserveAspectRatio="none">
        <path d="M0 0 L50 40 L100 0 Z" />
    </svg>
	<section id="sec5">
		
	</section>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="<?php print(SCRIPT_URL); ?>jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		$("#username").focusout(function(){

			var username = $("#username").val();
			var username_pattern = /\W/; // allow letters, numbers, and underscores

			if (username_pattern.test(username))
			{
				$("#usererr").text("username not valide.");
			}
			else
			{
				$("#usererr").text("");
			}
			});
		$("#username").focusout(function(){
			var username = $("#username").val();
			if (username != "")
			{
				$("#spanremember").css("visibility","visible");
			}
			else
			{
				$("#spanremember").css("visibility","hidden");
			}
		});
		$("#password").focusout(function(){
			var password = $("#password").val();
			if (password != "")
			{
				$("#passerr").text("");
			}
			});

		$("#logbutt").click(function(){

			var username = $("#username").val();
			var password = $("#password").val();

			var username_validation = false;
			var password_validation = false;

			var username_pattern = /\W/; // allow letters, numbers, and underscores


			//username validation
			if ((username == ""))
			{
				$("#usererr").text("username not entered.");
			}
			else if (username_pattern.test(username))
			{
				$("#usererr").text("username not valide.");
			}
			else
			{
				$("#usererr").text("");
				username_validation = true;
			}


			//password validation
			if ((password == ""))
			{
				$("#passerr").text("password not entered.");
			}
			else
			{
				$("#passerr").text("");
				password_validation = true;

			}

			//all validation
			if (username_validation && password_validation){
				oForm = document.forms["login"];
				oForm.submit();	
			}
			});

	});
	</script>
</body>

</html>
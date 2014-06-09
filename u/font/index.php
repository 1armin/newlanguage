<?php

// Include utility files
require_once '../config.php';

// Include session files
require_once  INCLUDE_DIR. 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>learning vocabulary :: <?php print($admin_username) ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<div class="container">
<div id="load">
	
</div>
<p>fffffffff</p>	
</div>

<script src="js/html5.js"></script>
<script src="js/jquery.js"></script>
<script>	
		$(document).ready(function(){

			var loadingimg = "<img id='loading' src='img/loading.gif'>";
			
  			$("#load").html(loadingimg).load("question.php");

  			$("#load").on("click","#spanswitch1",function(){
  				var result = $("#result").val();
  				var id     = $("#id").val();

  				if (result == "1"){
  					$("#spanswitch1").css("background-color","green");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#spanswitch1").css("background-color","red");
  					$("#spanswitch" + result).css("background-color","yellow");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("#load").on("click","#spanswitch2",function(){
  				var result = $("#result").val();
  				var id     = $("#id").val();

  				if (result == "2"){
  					$("#spanswitch2").css("background-color","green");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#spanswitch2").css("background-color","red");
  					$("#spanswitch" + result).css("background-color","yellow");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("#load").on("click","#spanswitch3",function(){
  				var result = $("#result").val();
  				var id     = $("#id").val();

  				if (result == "3"){
  					$("#spanswitch3").css("background-color","green");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#spanswitch3").css("background-color","red");
  					$("#spanswitch" + result).css("background-color","yellow");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("#load").on("click","#spanswitch4",function(){
  				var result = $("#result").val();
  				var id     = $("#id").val();

  				if (result == "4"){
  					$("#spanswitch4").css("background-color","green");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#spanswitch4").css("background-color","red");
  					$("#spanswitch" + result).css("background-color","yellow");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("#submit").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("#load").on("click","#submit",function(){
  				$("#load").html(loadingimg).load("question.php");
  			});
  		});
			
	</script>
</body>
</html>
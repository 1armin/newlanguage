$(document).ready(function(){

      var colorbb   = "yellow";
      var colortrue  = "#57b846";
      var colorwrong = "#ff2a00";

  var opts = {
  lines: 13, // The number of lines to draw
  length: 20, // The length of each line
  width: 10, // The line thickness
  radius: 30, // The radius of the inner circle
  corners: 1, // Corner roundness (0..1)
  rotate: 0, // The rotation offset
  direction: 1, // 1: clockwise, -1: counterclockwise
  color: '#000', // #rgb or #rrggbb or array of colors
  speed: 1, // Rounds per second
  trail: 60, // Afterglow percentage
  shadow: false, // Whether to render a shadow
  hwaccel: false, // Whether to use hardware acceleration
  className: 'spinner', // The CSS class to assign to the spinner
  zIndex: 2e9, // The z-index (defaults to 2000000000)
  top: '200px', // Top position relative to parent in px
  left: '380px' // Left position relative to parent in px
};
var target = document.getElementById('loading');
var spinner = new Spinner(opts).spin(target);
			
        $('#loading').show();
        $("#discription").hide();
  			$.post("question.php",function(result){
				var obj = JSON.parse(result);

				$("#question").html(obj.question);
				$("#h3switch1").html(obj.switch1);
				$("#h3switch2").html(obj.switch2);
				$("#h3switch3").html(obj.switch3);
				$("#h3switch4").html(obj.switch4);
				$("#discription").html(obj.discription);
        if (obj.msg != "") {$("#msg").show(); $("#msg p").html(obj.msg)};
				$("#id").attr("value",obj.id);
				$("#answer").attr("value",obj.answer);
        $('#loading').hide();
			});

  			$("#switch1").click(function(){
  				var answer = $("#answer").val();
  				var id     = $("#id").val();

          $("#discription").show();
  				if (answer == "1"){
  					$("#switch1").css("background",colortrue + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#switch1").css("background",colorwrong + " url(img/circlewrong.png) no-repeat 15px 7px");
  					$("#switch" + answer).css("background",colorbb + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("#switch2").click(function(){
  				var answer = $("#answer").val();
  				var id     = $("#id").val();

          $("#discription").show();
  				if (answer == "2"){
  					$("#switch2").css("background",colortrue + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#switch2").css("background",colorwrong + " url(img/circlewrong.png) no-repeat 15px 7px");
  					$("#switch" + answer).css("background",colorbb + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

			$("#switch3").click(function(){
  				var answer = $("#answer").val();
  				var id     = $("#id").val();

          $("#discription").show();
  				if (answer == "3"){
  					$("#switch3").css("background",colortrue + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#switch3").css("background",colorwrong + " url(img/circlewrong.png) no-repeat 15px 7px");
  					$("#switch" + answer).css("background",colorbb + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("#switch4").click(function(){
  				var answer = $("#answer").val();
  				var id     = $("#id").val();

          $("#discription").show();
  				if (answer == "4"){
  					$("#switch4").css("background",colortrue + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"1"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  				else
  				{
  					$("#switch4").css("background",colorwrong + " url(img/circlewrong.png) no-repeat 15px 7px");
  					$("#switch" + answer).css("background",colorbb + " url(img/circletrue.png) no-repeat 15px 7px");
  					$.post("check_question.php",{id:id,answer:"0"});
  					$("button").removeAttr("disabled");
  					$(".spanswitch").removeAttr("id");
  				}
  			});

  			$("button").click(function(){

				$("button").attr("disabled","");
				$(".sw1").attr("id","switch1");
				$(".sw2").attr("id","switch2");
				$(".sw3").attr("id","switch3");
				$(".sw4").attr("id","switch4");
				$(".spanswitch").removeAttr("style");
        $("#discription").hide();
        $('#loading').show();

  			$.post("question.php",function(result){

				var obj = JSON.parse(result);
				$("#question").html(obj.question);
				$("#h3switch1").html(obj.switch1);
				$("#h3switch2").html(obj.switch2);
				$("#h3switch3").html(obj.switch3);
				$("#h3switch4").html(obj.switch4);
				$("#discription").html(obj.discription);
        if (obj.msg != "") {$("#msg").show(); $("#msg p").html(obj.msg)};
				$("#id").attr("value",obj.id);
				$("#answer").attr("value",obj.answer);
        $('#loading').hide();

				});

  			});
  		});
<?php
// Include utility files
require_once '../../config.php';
//
$location = "game » synonym";
?>
<?php require_once '../header.php'; ?>
<?php require_once '../sidebar.php'; ?>


<div id="container">

	<ul id="stage">
		<li class="active">01</li>
		<li class="">02</li>
		<li class="">03</li>
		<li class="">04</li>
		<li class="">05</li>
		<li class="">06</li>
		<li class="">07</li>
		<li class="">08</li>
		<li class="">09</li>
		<li class="">10</li>
		<li class="">11</li>
		<li class="">12</li>
		<li class="">13</li>
		<li class="">14</li>
		<li class="">15</li>
		<li class="">16</li>
	</ul>

	<div id="counter"><span id="count_all">0</span> / <span id="count_right">0</span></div>

	<ul id="blokdrag">
		<li id="drag_1">incredible</li>
		<li id="drag_2">respond</li>
		<li id="drag_3">immoral</li>
		<li id="drag_4">infuriate</li>

		<li id="drag_5">question</li>
		<li id="drag_6">handsome</li>
		<li id="drag_7">launch</li>
		<li id="drag_8">large</li>
	</ul>

	<ul id="blokdrop">
		<li><span class="word">enrage</span><div id="drop_1" class="worddrop"></div></li>
		<li class="right"><span class="word">retort</span><div id="drop_2" class="worddrop"></div></li>
		<li><span class="word">unbelievable</span><div id="drop_3" class="worddrop"></div></li>
		<li class="right"><span class="word">initiate</span><div id="drop_4" class="worddrop"></div></li>
		<li><span class="word">attractive</span><div id="drop_5" class="worddrop"></div></li>
		<li class="right"><span class="word">enormous</span><div id="drop_6" class="worddrop"></div></li>
		<li><span class="word">inquire</span><div id="drop_7" class="worddrop"></div></li>
		<li class="right"><span class="word">corrupt</span><div id="drop_8" class="worddrop"></div></li>
	</ul>

	<p id="disc">in this game you can with drag and drop top word, placed them in front of synonym word.</p>
<div id="popap">
	<div id="cap"></div>
	<span id="congratulation">CONGRATULATION</span>
	<span id="discrip">If you want continue, click next button</span>
	<a href="<?php print(GAME_URL); ?>synonym_02.php" id="next_but">NEXT</a>
	<div id="backrefresh"><a id="back" href="<?php print(GAME_URL); ?>"></a><a id="refresh" href="<?php print(GAME_URL); ?>synonym_01.php"></a></div>
</div>
</div><!-- end container -->

<?php require_once '../footer.php'; ?>


	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> -->

	<script src="<?php print(SCRIPT_URL); ?>jquery.js" type="text/javascript"></script>
	<script src="<?php print(SCRIPT_URL); ?>jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script>
	function addnumall(){
		num = $("#count_all").text()
		num ++
		$("#count_all").text(num)
	}
	function addnum(){
		num = $("#count_right").text()
		num ++
		$("#count_right").text(num)
		if (num == 8) {setInterval(function(){document.getElementById("popap").style.visibility = "visible"},1000); localStorage.setItem('synonym', 1);};
	}

	 $(function() {
	   $( "#drag_1,#drag_2,#drag_3,#drag_4,#drag_5,#drag_6,#drag_7,#drag_8" ).draggable({
	      revert: "invalid",
	      snap: ".worddrop",
	      snapMode: "inner",
	      snapTolerance: 10,
	      containment: "#container",
	      start: function( event, ui ) {addnumall();}
    });
	 
	    $( "#drop_1" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_4",
	      drop: function( event, ui ) {$( "#drag_4" ).addClass( "droped" );
	      $( "#drop_1" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_2" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_2",
	      drop: function( event, ui ) {$( "#drag_2" ).addClass( "droped" );
	      $( "#drop_2" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_3" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_1",
	      drop: function( event, ui ) {$( "#drag_1" ).addClass( "droped" );
	      $( "#drop_3" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_4" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_7",
	      drop: function( event, ui ) {$( "#drag_7" ).addClass( "droped" );
	      $( "#drop_4" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_5" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_6",
	      drop: function( event, ui ) {$( "#drag_6" ).addClass( "droped" );
	      $( "#drop_5" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_6" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_8",
	      drop: function( event, ui ) {$( "#drag_8" ).addClass( "droped" );
	      $( "#drop_6" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_7" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_5",
	      drop: function( event, ui ) {$( "#drag_5" ).addClass( "droped" );
	      $( "#drop_7" ).droppable( "disable" );
	      addnum();
	      }
	    });
	    $( "#drop_8" ).droppable({
	      activeClass: "active",
	      hoverClass: "hover",
	      accept: "#drag_3",
	      drop: function( event, ui ) {$( "#drag_3" ).addClass( "droped" );
	      $( "#drop_8" ).droppable( "disable" );
	      addnum();
	      }
	    });
	  });
	</script>

</body>
</html>
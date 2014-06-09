<?php
// Include utility files
require_once '../../config.php';
//
$location = "game";
?>
<?php require_once '../header.php'; ?>
<?php require_once '../sidebar.php'; ?>

<div id="container">
<?php if (isset($_SESSION["userverify"])) { print('<span id="msgnotvrfy">your email address not verified, please check it and click on verify link.<span id="msgnotvrfyclose" onclick="msgnotvrfyhideFunction()">X</span></span>'); }?>
<?php print($message); ?>
<p class="discription_top">in this game you can with drag and drop top word, placed them in front of synonym word.</p>
<div class="component">
<ul class="align">
<li>
	<figure class='game'>

		<!-- box -->
			<div class="movie" onclick="return true">
			<div class="poster" id="poster1"></div>
			<div class="info">
				<a id="synonym_link" href="<?php print(GAME_URL); ?>synonym_01.php">play</a>
			</div>
			</div>
		
		<figcaption>
			<h1>Synonym game</h1>
			<p>in this game you can with drag and drop top word, placed them in front of synonym word.</p>
		</figcaption>
	</figure>
</li>
<li>
	<figure class='game'>

		<!-- box -->
			<div class="movie" onclick="return true">
			<div class="poster" id="poster2"></div>
			<div class="info">
				<a href="<?php print(GAME_URL); ?>">play</a>
			</div>
			</div>
		
		<figcaption>
			<h1>other game</h1>
			<p>Leek winter purslane sierra leone bologi caulie tomatillo soko turnip greens bunya nuts silver beet melon green bean celery. Gram kakadu plum wakame.</p>
		</figcaption>
	</figure>
</li>
<li>
	<figure class='game'>

		<!-- box -->
			<div class="movie" onclick="return true">
			<div class="poster" id="poster3"></div>
			<div class="info">
				<a href="<?php print(GAME_URL); ?>synonym_01.php">play</a>
			</div>
			</div>
		
		<figcaption>
			<h1>other game</h1>
			<p>Tomatillo water chestnut mustard cabbage yarrow sierra leone bologi. Watercress green bean groundnut earthnut pea dandelion radicchio.</p>
		</figcaption>
	</figure>
</li>
<li>
	<figure class='game'>

		<!-- box -->
			<div class="movie" onclick="return true">
			<div class="poster" id="poster4"></div>
			<div class="info">
				<a href="<?php print(GAME_URL); ?>">play</a>
			</div>
			</div>
		
		<figcaption>
			<h1>other game</h1>
			<p>Leek winter purslane sierra leone bologi caulie tomatillo soko turnip greens bunya nuts silver beet melon green bean celery. Gram kakadu plum wakame.</p>
		</figcaption>
	</figure>
</li>

</ul>

</div><!-- end component -->
</div><!-- end container -->

<?php require_once '../footer.php'; ?>

<script src="<?php print(SCRIPT_URL); ?>jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
  		if(localStorage.synonym) {
  			numpage = localStorage.synonym ;
  			link = "<?php print(GAME_URL); ?>synonym_0" + numpage + ".php"
			$('#synonym_link').attr("href",link);
		}
    });
</script>
</body>
</html>
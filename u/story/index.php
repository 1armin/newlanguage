<?php
// Include utility files
require_once '../../config.php';
//
$location = "story";
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
						<figure class='book'>

							<!-- Front -->

							<ul class='hardcover_front'>
								<li>
								<img src="<?php print(IMAGE_URL); ?>cover.jpg" alt="" width="100%" height="100%">
									<!--<div class="coverDesign yellow">
										<span class="ribbon">NEW</span>
										<h1>CSS</h1>
										<p>TRANSFORM</p>
									</div> -->
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="<?php print(STORY_URL); ?>book.php">View</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>CSS Ninja</h1>
								<p>Tomatillo water chestnut mustard cabbage yarrow sierra leone bologi. Watercress green bean groundnut earthnut pea dandelion radicchio.</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class='book'>

							<!-- Front -->

							<ul class='hardcover_front'>
								<li>
									<div class="coverDesign blue">
										<h1>JS</h1>
										<p>FUNCTION</p>
									</div>
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="#">view</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>Storm JS</h1>
								<p>Leek winter purslane sierra leone bologi caulie tomatillo soko turnip greens bunya nuts silver beet melon green bean celery. Gram kakadu plum wakame.</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class='book'>

						<!-- Front -->

							<ul class='hardcover_front'>
								<li>
									<div class="coverDesign grey">
										<span class="ribbon">new</span>
										<h1>HTML5</h1>
										<p>CANVAS</p>
									</div>
								</li>
								<li></li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="#">view</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>Zen HTML5</h1>
								<p>Salsify horseradish winter purslane yarrow zucchini bush tomato aubergine cauliflower broccoli. Kohlrabi azuki bean chickpea quandong dandelion seakale.</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class='book'>

						<!-- Front -->

							<ul class='hardcover_front'>
								<li>
									<img src="<?php print(IMAGE_URL); ?>cover.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="#">view</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>Papelucho Perdido</h1>
								<p>Fennel bamboo shoot pea sprouts rutabaga parsnip green bean gram wattle seed lentil horseradish nori. Grape lettuce turnip greens.</p>
							</figcaption>
						</figure>
					</li>
				</ul>
				</div><!-- end component -->
</div><!-- end container -->

<?php require_once '../footer.php'; ?>
	
</body>
</html>
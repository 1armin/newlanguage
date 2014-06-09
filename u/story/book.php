<?php
// Include utility files
require_once '../../config.php';
//
$location = "story » view";
?>
<?php require_once '../header.php'; ?>
<?php require_once '../sidebar.php'; ?>

<div id="container">
	<div id="bk_bookdiv">

	<div id="bk_bookpg">
		<span class="bk_pgl"></span>
		<span class="bk_pgl"></span>
		<span class="bk_pgl"></span>
		<span class="bk_pgl"></span>
		<span class="bk_pgl"></span>
		<span class="bk_pgl"></span>

		<span class="bk_pgr"></span>
		<span class="bk_pgr"></span>
		<span class="bk_pgr"></span>
		<span class="bk_pgr"></span>
		<span class="bk_pgr"></span>
		<span class="bk_pgr"></span>
	<div id="bk_book">
	
		<div> 
			<h3>Yay, Page 1!</h3>
		</div>
		<div> 
			<h3>Yay, Page 2!</h3>
		</div>
		<div> 
			<h3>Yay, Page 3!</h3>
		</div>
		<div> 
			<h3>Yay, Page 4!</h3>
		</div>
		<div> 
			<h3>Yay, Page 5!</h3>
		</div>
		<div> 
			<h3>Yay, Page 6!</h3>
		</div>
		<div> 
			<h3>Yay, Page 7!</h3>
		</div>
		<div> 
			<h3>Yay, Page 8!</h3>
		</div>
		
	</div>
	</div>

	</div>
	<div id="bk_navigation">
		<span id="bk_prev">prev</span>
		<span id="bk_next">next</span>
	</div>
</div><!-- end container -->

<?php require_once '../footer.php'; ?>
	
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script> -->

	<script src="<?php print(SCRIPT_URL); ?>jquery.js" type="text/javascript"></script>
	<script src="<?php print(SCRIPT_URL); ?>jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?php print(SCRIPT_URL); ?>jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="<?php print(SCRIPT_URL); ?>jquery.booklet.latest.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function() {
    $('#bk_book').booklet({
        width:  '98.5%',
        height: '100%',
        next: '#bk_next',                
        prev: '#bk_prev'
    });
	});
	</script>
	
</body>
</html>
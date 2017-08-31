<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?> 
<?php $gallery = find_all_gallery(); 
	$location = "images/gallery/";
?>
        <link rel="stylesheet" type="text/css" href="style/demo.css" />
		<link rel="stylesheet" type="text/css" href="style/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="style/custom.css" />
<section class = "gallery">
<div class = "container-fluid">
	<div class = "row">
		<h2 title="gallery">Gallery</h2>
		<div class = "container" id="gallerycarousel">	
		<div class="container">			
			<div class="wrapper">
				<ul id="sb-slider" class="sb-slider">
				<?php while($subject = mysqli_fetch_assoc($gallery)) {?>
					<li>
						<a href="#"><img src="<?php echo $location.$subject["image_location"]?>" alt="<?php echo $subject["description"];?>"/></a>
						<div class="sb-description">
							<h3><?php echo $subject["description"];?></h3>
						</div>
					</li>
				<?php } ?>
				</ul>
				<div id="shadow" class="shadow"></div>
				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>
			</div><!-- /wrapper -->
		</div>
	</div>
	</div>
</div>
</section>
<?php mysqli_free_result($gallery); ?>
<?php include("includes/layouts/footerpublic.php"); ?> 	
<script type="text/javascript" src="scripts/modernizr.custom.46884.js"></script>
<script type="text/javascript" src="scripts/jquery.slicebox.js"></script>
<script src="scripts/script.js"></script>
<script type="text/javascript">
	$(function() {
		var Page = (function() {
			var $navArrows = $( '#nav-arrows' ).hide(),
				$shadow = $( '#shadow' ).hide(),
				slicebox = $( '#sb-slider' ).slicebox( {
					onReady : function() {
						$navArrows.show();
						$shadow.show();
					},
					orientation : 'r',
					cuboidsRandom : true,
					disperseFactor : 30
				} ),
				init = function() {
					initEvents();	
				},
				initEvents = function() {
					// add navigation events
					$navArrows.children( ':first' ).on( 'click', function() {

						slicebox.next();
						return false;
					} );
					$navArrows.children( ':last' ).on( 'click', function() {
						
						slicebox.previous();
						return false;
					} );
				};
				return { init : init };
		})();
		Page.init();
	});
</script>
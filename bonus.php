<!DOCTYPE html>
<html class="bonus">
    <?php 
        include 'header.php';
        include 'footer.php';
    ?>
    <head>
		<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>

        <!-- Second, add the Timer and Easing plugins -->
        <script type="text/javascript" src="js/jquery.timers-1.2.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Third, add the GalleryView Javascript and CSS files -->
        <script type="text/javascript" src="js/jquery.galleryview-3.0-dev.js"></script>
        <link type="text/css" rel="stylesheet" href="css/jquery.galleryview-3.0-dev.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		
		<!-- Lastly, call the galleryView() function on your unordered list(s) -->
        <script type="text/javascript">
			var ROGNAGE_WIDTH = 22;
			var ROGNAGE_HEIGHT = 300;
			
			$(function(){
				var width = $(window).width()-ROGNAGE_WIDTH;    
				var height = $(window).height()-ROGNAGE_HEIGHT;
				$('#myGallery').galleryView({
					panel_width: width,
					panel_height: height,
					panel_scale: 'fit',
					panel_animation: 'crossfade',
					frame_width: 130,
					frame_height: 80,
					frame_scale: 'crop',
					frame_opacity: 1,
					frame_gap: 7,
					show_captions: false,
					show_panel_nav: false,
					show_infobar: false,
					show_filmstrip_nav: false
				});
			});
			
			
			$(window).resize(function() {  
				location.reload();
		});  
        </script>		
	</head>
    
    <body>
        <div>
            <ul id="myGallery">
				<li><img src="image/gallery/vignette-video.jpg"/>
				<li><img src="image/gallery/aincourt-13.jpg"/>
				<li><img src="image/gallery/aincourt-15.jpg"/>
				<li><img src="image/gallery/aincourt-17.jpg"/>
				<li><img src="image/gallery/aincourt-20.jpg"/>
				<li><img src="image/gallery/aincourt-25.jpg"/>
				<li><img src="image/gallery/aincourt-30.jpg"/>
				<li><img src="image/gallery/aincourt-35.jpg"/>
				<li><img src="image/gallery/2min-finish.jpg"/>
				<li><img src="image/gallery/aincourt-4.jpg"/>
				<li><img src="image/gallery/aincourt-5.jpg"/>
				<li><img src="image/gallery/aincourt-6.jpg"/>
				<li><img src="image/gallery/aincourt-7.jpg"/>
				<li><img src="image/gallery/aincourt-8.jpg"/>
				<li><img src="image/gallery/aincourt-9.jpg"/>
				<li><img src="image/gallery/couloir-dos.jpg"/>
				<li><img src="image/gallery/glow-effect.jpg"/>
				<li><img src="image/gallery/labo.jpg"/>
				<li><img src="image/gallery/parfum.jpg"/>
				<li><img src="image/gallery/couloir-loup.jpg"/>
			</ul>       
        </div>
		<center>
			<div class="menuHorizontal">
				<ul>
					<li><a href="."><?php echo $prop['menu'];?></a></li>
				</ul>
				<hr class="barMenu">
			</div>
		</center>		
	</body>
</html>

<!doctype html>
<html class="credits">
    <?php 
        include 'header.php';
        include 'footer.php';
    ?>
	<head>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	</head>
    <body>
		<center>
			<div class="menuHorizontal">
				<ul>
					<li><a href="./index.php"><?php echo $prop['menu'];?></a></li>
					<li><a href="./video.php"><?php echo $prop['movie_one'];?></a></li>
				</ul>
				<hr class="barMenu">
			</div>
			
			<div id="video" style="margin-bottom: 20px;">
				<center>
					<div class="textDecoMv">
						<?php echo $prop['movie_two'];?>
					</div>
					<iframe width="853" height="480" src="//www.youtube.com/embed/4-XYTCFwSCE" frameborder="0" allowfullscreen></iframe>
				</center>
			</div>
		</center>
		<script>  
			var constMarg = 20;
			var constMargDiv = 22;
			var constDiv = 1.5;

			$(function resVid() {
				$("#video").css("margin-top", ($(window).height()/constMargDiv)+constMarg);
				$("iframe").width($(window).width()/constDiv); //auto reflow
				$("iframe").height($(window).height()/constDiv); //auto reflow
			});  
				
			$(window).resize(function() {
				$("#video").css("margin-top", ($(window).height()/constMargDiv)+constMarg);
				$("iframe").width($(window).width()/constDiv); //auto reflow
				$("iframe").height($(window).height()/constDiv); //auto reflow
			});  
		</script> 
    </body>
 </html>
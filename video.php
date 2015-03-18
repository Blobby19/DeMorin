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
					<li><a href="./videoCourte.php"><?php echo $prop['movie_two'];?></a></li>
				</ul>
				<hr class="barMenu">
			</div>
			
			<div id="video" style="margin-bottom: 20px;">
				<center>
					<div class="textDecoMv">
						<?php echo $prop['movie_one'];?>
					</div>
					<iframe class="video" width="853" height="480" src="//www.youtube.com/embed/IO0PCM72BTU" frameborder="0" allowfullscreen></iframe>
				</center>
			</div>
		</center>
		<script>  
			var constMarg = 5;
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
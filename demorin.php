<!doctype html>
<html class="credits">
    <?php 
        include 'header.php';
        include 'footer.php';
    ?>
	<head>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>	
	</head>
    <body>
        <center>
            <div class="textDecoDM" style="font-size: 80%; ">
				<?php echo $prop['history'];?>
            </div>

            <div class="menuHorizontal">
                <ul>
                    <li><a href="./index.php"><?php echo $prop['menu'];?></a></li>
				</ul>
			<hr class="barMenu">
            </div>
        </center>
    </body>
	
	<script>  
	
		$(function a() {
			$(".textDecoDM").css('font-size', $(window).height() / 71); //auto reflow
		});
		
		$(window).resize(function() {  
			$(".textDecoDM").css('font-size', $(window).height() / 71); //auto reflow
		});  
	</script> 
 </html>
 
 

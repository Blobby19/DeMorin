<!doctype html>
<html class="credits">
    <?php 
        include 'header.php';
        include 'footer.php';
    ?>
    <body>
        <div class="textDeco">
			<center>
				<marquee direction="up" scrollAmount=10 onscroll="this.setAttribute('scrollAmount', 2.5, 0);" height="800px" style="text-align: center">
					<?php echo $prop['comm'];?>
                </marquee>
			</center>
		</div>
        <div class="menuHorizontal">
            <center>
				<ul>
					<li><a href="./index.php"><?php echo $prop['menu'];?></a></li>
				</ul>
			<hr class="barMenu">
            </center>
        </div>
	</body>
 </html>
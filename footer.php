<!doctype html>
<html>
    <footer>
		<div class="siteFooter ">
			<ul>
				<li>
					<a href="./credits.php">
						<?php echo $prop['credits'];?>
					</a>
				</li>| 	
				<li>
					<a onClick="popupCenter('https://www.facebook.com/pages/By-the-Kiss-De-Morin-Paris/1416266961933012', '<?php echo $prop['contact'];?>', '800', '500')">
						<?php echo $prop['contact'];?> <img id="foot" class="contact" src="image/facebook.png" alt="facebook"/> 
					</a>
				</li>|
				<li>
					<a style="top: 11px; padding-left: 28%;" onClick="popupCenter('https://www.facebook.com/dialog/feed?app_id=87741124305&link=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DIO0PCM72BTU%26feature%3Dshare&display=popup&redirect_uri=https%3A%2F%2Fwww.youtube.com%2Ffacebook_redirect', '<?php echo $prop['share'];?>', '650' ,'306')" id="footRej"><?php echo $prop['share'];?></a>
					<a style="top: 7px;" id="footRej" onClick="popupCenter('https://www.facebook.com/dialog/feed?app_id=87741124305&link=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DIO0PCM72BTU%26feature%3Dshare&display=popup&redirect_uri=https%3A%2F%2Fwww.youtube.com%2Ffacebook_redirect', '<?php echo $prop['share'];?>', '650', '306')" class="contact">
						<img class="contact" src="image/facebook.png" alt="facebook"/>
					</a>
					<p/>
				</li>| 	
				<li>
					<a onClick="popupCenter('https://twitter.com/DeMorinParis', '<?php echo $prop['follow'];?>', '650', '306')">
						<?php echo $prop['follow'];?> <img id="foot" class="contact" src="image/tweet.png" alt="tweeter"/>
					</a>
				</li>	 	
			</ul>
		</div>
	</footer>	
	<script>
		function popupCenter(pageURL, title,w,h) {
			var left = (screen.width/2)-(w/2);
			var top = (screen.height/2)-(h/2);
			var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
		}
	</script>
</html>	
<!--  -->


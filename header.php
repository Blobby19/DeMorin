<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <meta charset="UTF-8">		
        <title>By the Kiss - De Morin</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    </head>	

    <header>
        <?php
            global $prop;
                        
            // si demande d'une nouvelle langue alors set dans le cookie
            if(isset($_GET) && (!empty($_GET['l']))){
                $lang = $_GET['l'];
                
                //enregistrement du cookie au nom de lang
                setcookie('lang', $lang, time() + 24*3600); 
            }
            // sinon on lit le cookie
            else{
                if(isset($_COOKIE['lang'])) {
                    $lang = $_COOKIE['lang'];
                } 
                else {
                    // si aucune langue n'est déclarée on tente de reconnaitre la langue par défaut du navigateur
                    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);    
                }
            }
            
            // converteur langue
            if ($lang == 'fr'){
                $langProp = 'french';
            }
            elseif ($lang == 'en') {
                $langProp = 'english';
            }
            else {
                $langProp = 'french';
            }
            
            $prop = parse_ini_file("properties/".$langProp.".ini");
        ?>
		<div class="lang" >
			<?php $page =  $_SERVER['PHP_SELF'] ?>
			
            <a href="<?php echo $page ?>?l=en"><img height="13px" style="padding-right: 2px" alt="english" src="./image/en.png"/></a>
            <a href="<?php echo $page ?>?l=fr"><img height="13px" style="padding-right: 2px" alt="french" src="./image/fr.jpg"/></a>
        </div>
    </header>
</html>
<?php
	$title = 'Justin Hellsten - Javascript';
    $mainIndex = 0;
    $subnav_type = 0; // 0 - Portfolio, 1 - Updates
    $subnav = 0; // Index value for sub navigation
    
    $metaDescription = "Justin Hellsten's portfolio page for javascript.";
?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<div id="content-1000">
        <div class="pcategory-list-wrapper">
            <div class="pcategory-list">
                <div class="pcategory-title-box">
                    <!-- Do not remove comments around tags. These comments removes the space in between these 
                         elements in Safari -->
                    <span class="pcategory-title">End of Day</span><!--
                    --><div class="arrow-right pcat-first"></div><!--
                    --><a href="endofday.html"><span class="pcategory-link">endofday.html</span></a><!--
                    --><div class="arrow-right pcat-second"></div><!--
                    --><span class="pcategory-version">Version 1.0</span><!--
                    --><div class="arrow-right pcat-third"></div>
                </div>
                <div class="pcategory-content">
                    <a href="endofday.html"><img src="<?php echo IMG_DIR; ?>/portfolio/endofday.jpg" /></a>
                    <div class="pcategory-description">
                        <h1>Description</h1>
                        <p>A end of day countdown that shows the hours, minutes and seconds left for the Avetti work day. If you are a bored Avetti employee and wish the work day would just end, this countdown is just for you!</p>                        
                        <h1>What's New</h1>
                        <p>v1.0</p>
                        <p>Countdown timer set for 8:30 - 5:30 AM weekdays.</p>
                        <p><a href="endofday.html">Visit Page</a></p>  
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="pcategory-list-wrapper">
            <div class="pcategory-list">
                <div class="pcategory-title-box">
                    <!-- Do not remove comments around tags. These comments removes the space in between these 
                         elements in Safari -->
                    <span class="pcategory-title">Wall Bouncer</span><!--
                    --><div class="arrow-right pcat-first"></div><!--
                    --><a href="wallbouncer.html"><span class="pcategory-link">wallbouncer.html</span></a><!--
                    --><div class="arrow-right pcat-second"></div><!--
                    --><span class="pcategory-version">Version 1.0</span><!--
                    --><div class="arrow-right pcat-third"></div>
                </div>
                <div class="pcategory-content">
                    <a href="wallbouncer.html"><img src="<?php echo IMG_DIR; ?>/portfolio/wallbouncer.jpg" /></a>
                    <div class="pcategory-description">
                        <h1>Description</h1>
                        <p>A 25px by 25px rectangle is randomly shot in any direction at any speed from the center of the browser page when first loaded. When the rectangle hits the edges of the page it bounces.</p>
                        <p><a href="wallbouncer.html">Visit Page</a></p>
                        
                    </div> 
                </div>
            </div>            
        </div>    
        
        <div class="pcategory-list-wrapper">
            <div class="pcategory-list">
                <div class="pcategory-title-box">
                    <!-- Do not remove comments around tags. These comments removes the space in between these 
                         elements in Safari -->
                    <span class="pcategory-title">Wall Pong</span><!--
                    --><div class="arrow-right pcat-first"></div><!--
                    --><a href="wallpong.html"><span class="pcategory-link">wallpong.html</span></a><!--
                    --><div class="arrow-right pcat-second"></div><!--
                    --><span class="pcategory-version">Version 1.0</span><!--
                    --><div class="arrow-right pcat-third"></div>
                </div>
                <div class="pcategory-content">
                    <a href="wallpong.html"><img src="<?php echo IMG_DIR; ?>/portfolio/wallpong.jpg" /></a>
                    <div class="pcategory-description">
                        <h1>Description</h1>
                        <p>Your objective is to keep the ball from reaching the bottom of the page and making it hit the top for points. The game keeps going until the ball hits bottom. Your paddle will change to a random color everytime it collides with the ball. Have fun!</p>
                        <p><a href="wallpong.html">Visit Page</a></p>
                        
                    </div> 
                </div>
            </div>            
        </div>     
        
        <div class="pcategory-list-wrapper">
            <div class="pcategory-list">
                <div class="pcategory-title-box">
                    <!-- Do not remove comments around tags. These comments removes the space in between these 
                         elements in Safari -->
                    <span class="pcategory-title">Pong</span><!--
                    --><div class="arrow-right pcat-first"></div><!--
                    --><a href="pong.html"><span class="pcategory-link">pong.html</span></a><!--
                    --><div class="arrow-right pcat-second"></div><!--
                    --><span class="pcategory-version">Version 1.0</span><!--
                    --><div class="arrow-right pcat-third"></div>
                </div>
                <div class="pcategory-content">
                    <a href="pong.html"><img src="<?php echo IMG_DIR; ?>/portfolio/pong.jpg" /></a>
                    <div class="pcategory-description">
                        <h1>Description</h1>
                        <p>The classic Pong game built to the same look and feel of the original pong game developed by Atari. Pong is a two dimensional sport game that is similiar to table tennis. The player controls a paddle by moving it vertically across the left side of the screen and competes with a computer controlled opponent. The player and opponent use the paddle to hit a ball back and forth. The goal is for the player to gain more points than the opponent. Points are earned when one fails to return the ball of the other.</p>
                        <p><a href="bricks.html">Visit Page</a></p>
                        
                    </div> 
                </div>
            </div>            
        </div>
        <?php /*
        <div class="pcategory-list-wrapper">
            <div class="pcategory-list">
                <div class="pcategory-title-box">
                    <!-- Do not remove comments around tags. These comments removes the space in between these 
                         elements in Safari -->
                    <span class="pcategory-title">Bricks</span><!--
                    --><div class="arrow-right pcat-first"></div><!--
                    --><a href="bricks.html"><span class="pcategory-link">bricks.html</span></a><!--
                    --><div class="arrow-right pcat-second"></div><!--
                    --><span class="pcategory-version">Version 1.0</span><!--
                    --><div class="arrow-right pcat-third"></div>
                </div>
                <div class="pcategory-content">
                    <a href="bricks.html"><img src="<?php echo IMG_DIR; ?>/portfolio/wallpong.jpg" /></a>
                    <div class="pcategory-description">
                        <h1>Description</h1>
                        <p>Your objective is to keep the ball from reaching the bottom of the page and making it hit the top for points. The game keeps going until the ball hits bottom. Your paddle will change to a random color everytime it collides with the ball. Have fun!</p>
                        <p><a href="bricks.html">Visit Page</a></p>
                        
                    </div> 
                </div>
            </div>            
        </div>  
                */ ?>     
		<?php   
        /*
			if ($handle = opendir(getcwd())) {	
				while (false !== ($entry = readdir($handle))) {

					$break = $file = explode('/', $_SERVER["SCRIPT_NAME"]);
					$pfile = $break[count($break) - 1]; 
					if ($entry != $pfile && $entry != '..' && $entry != '.') {  
                        echo CAT_HTML_TOP;   
        				echo '<a href="'.$entry.'"><img class="pcategory-img" src="'.IMG_DIR.'/c-logo.jpg" /></a>';
                        echo CAT_HTML_BOTTOM;    
        			}
                    
    			}
    		} */
		?>
        
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>

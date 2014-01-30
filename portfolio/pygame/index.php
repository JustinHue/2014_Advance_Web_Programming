<?php
	$pageIndex = 1;
    
    $mainIndex = 0; 
    $subnav_type = 0; // 0 - Portfolio, 1 - Updates
    $subnav = 5; // Index value for sub navigation
    
	$title = 'Justin Hellsten - Pygame';
?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
<div id="content-1000">   
        <div class="pcategory-list-wrapper">
            <div class="pcategory-list">
                <div class="pcategory-title-box">
                    <!-- Do not remove comments around tags. These comments removes the space in between these 
                         elements in Safari -->
                    <span class="pcategory-title">Ritz</span><!--
                    --><div class="arrow-right pcat-first"></div><!--
                    --><a href="ritz.zip"><span class="pcategory-link">ritz.zip</span></a><!--
                    --><div class="arrow-right pcat-second"></div><!--
                    --><span class="pcategory-version">Version 1.0</span><!--
                    --><div class="arrow-right pcat-third"></div>
                </div>
                <div class="pcategory-content">
                    <a href="endofday.html"><img src="<?php echo IMG_DIR; ?>/portfolio/ritz_screen.png"/></a>
                    <div class="pcategory-description">
                        <h1>Description</h1>
                        <p>Ritz is a 2D side scrolling platformer game made for the Intro to Graphics course and was inspired by "I wanna be the guy" and "Jill of the Jungle" developed by Epic MegaGames. The player controls the main character whom is named "Ritz" through various levels until he reaches the exit. The levels consist of enemies that can be killed using bullets shot from Ritz and obstacles that must be invaded. If Ritz touches any enemy, spikes, or falls to his death, his body and blood will splatter everywhere. The game uses assets from well known game titles like Mario and Megaman, and the main character sprites were taking directly from "I wanna be the guy". </p>                        
                        <h1>What's New</h1>
                        <p>v1.0</p>
                        <p>- Ritz level maker V0.4</p>
                        <p>- 3 Levels Added</p>
                        <p>- Instruction, main menu and game over scene added<p>
                        <p>- Ritz and enemies now splatter blood everywhere<p>                                       
                        <p><a href="ritz.zip">Download</a></p>                      
                    </div> 
                </div>
            </div>
        </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>

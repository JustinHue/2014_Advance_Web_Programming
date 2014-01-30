<?php
    $mainIndex = 1;
    $title = 'Justin Hellsten - Updates';
    
    $subnav_type = 1; // 0 - Portfolio, 1 - Updates
    
    $metaDescription = "Portfolio page for Justin Hellsten with all his work of javascript, php html, c++, allegro, python, pygame.";
    $metaKeywords = "contact contacts email mail issue issues message justin hellsten facebook twitter linkedin gmail";
    
?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
<div id="content-1000"> 
    <div id='portfolio-categories'>
        <div class='portfolio-category-box'>
            <a border="none" href="javascript"><img src='/assets/images/javascript.png' /></a>
            <a href="javascript"><span>Javascript</span></a>
        </div>

        <div class='portfolio-category-box'>
            <a border="none" href="php"><img src='/assets/images/php-med-trans-dark.gif' /></a>
            <a href="php"><span>PHP</span></a>
        </div>

        <div class='portfolio-category-box'>
            <a border="none" href="html"><img src='/assets/images/HTML5_Logo_512.png' /></a>
            <a href="html"><span>HTML</span></a>
        </div>
        
        <div class='portfolio-category-box'>
            <a border="none" href="cplusplus"><img src='/assets/images/c-logo.jpg' /></a>
            <a href="cplusplus"><span>C++</span></a>
        </div>
        
        <div class='portfolio-category-box'>
            <a border="none" href="allegro"><img src='/assets/images/cooltextUtopia128.png' /></a>
            <a href="allegro"><span>Allegro</span></a>
        </div>
            
        <div class='portfolio-category-box'>
            <a border="none" href="python"><img src='/assets/images/python-logo.png' /></a>
            <a href="python"><span>Python</span></a>
        </div>
            
        <div class='portfolio-category-box'>
            <a border="none" href="pygame"><img src='/assets/images/pygame_logo.gif' /></a>
            <a href="pygame"><span>Pygame</span></a>
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>

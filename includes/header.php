<?php
    $mainitems = array('Projects' => '/projects', 'Services' => '/services');
    $infoitems = array('About' => '/about', 'Contact' => '/contact', 'Contact' => '/contact', 'Github' => 'https://github.com/JustinHue');
    
    $portfolioItems = array('Javascript' => '/portfolio/javascript', 'Java' => '/portfolio/java', 'C++' => '/', 'Allegro' => '/portfolio/allegro', 'Python' => '/portfolio/python', 'Pygame' => '/portfolio/pygame', 'HTML 5' => '/portfolio/html5');
        
    $updateItems = array('Releases' => '/updates/releases', 'Blog' => '/updates/blog');
    
	include $_SERVER['DOCUMENT_ROOT'].'/includes/config.php';
?>

<!DOCTYPE html>

<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
    
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
		<link rel="stylesheet" href="foundation/css/normalize.css">
		<link rel="stylesheet" href="foundation/css/foundation.css">

		<!-- If you are using the gem version, you need this only -->
		<link rel="stylesheet" href="/foundation/css/app.css">

		<script src="/foundation/js/vendor/modernizr.js"></script>


		<link rel="stylesheet" href="<?php echo CSS_DIR.'common3.css' ?>" type="text/css">

	<!--
		<link rel="stylesheet" href="<?php echo CSS_DIR.'top_nav.css' ?>" type="text/css" media=screen>
		<link rel="stylesheet" href="<?php echo CSS_DIR.'common.css' ?>" type="text/css" media=screen>
	        <link rel="stylesheet" href="<?php echo CSS_DIR.'common2.css' ?>" type="text/css" media=screen>
       	 	<link rel="stylesheet" href="<?php echo CSS_DIR.'galleria.css' ?>" type="text/css" media=screen> 
        	<link rel="stylesheet" href="<?php echo JS_DIR.'jsImgSlider/themes/2/js-image-slider.css' ?>" type="text/css" />
        	<link rel="stylesheet" href="<?php echo JS_DIR.'jsImgSlider/themes/generic.css' ?>" type="text/css" />
	-->
                    
        	<!-- AddThis Smart Layers BEGIN -->
		<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528ab1e155dea662"></script>
		<script type="text/javascript">
	
	
		addthis.layers({
	    		'theme' : 'dark',
    			'share' : {
      			'position' : 'left',
      			'numPreferredServices' : 6,
                'thankyou' : true
    		}/*, 
    			'follow' : {
      			'services' : [
        			{'service': 'facebook', 'id': 'justin.hellsten'},
        			{'service': 'twitter', 'id': 'JustinHellsten'}
      				]
    			}*/
  		});
		</script>
		<!-- AddThis Smart Layers END -->

        <!-- Google Web Fonts API -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin Slab">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril Fatface">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT Sans + PT Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Old Standard TT">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Sans">
 
        
        <!--[if lt IE 8]>
        <style type="text/css">
            li { display: inline; float: left; }
        </style>   
        <![endif]-->        
		<script type="text/javascript" src="<?php echo JS_DIR.'jquery-1.10.2.min.js' ?>" ></script>
		<script type="text/javascript" src="<?php echo JS_DIR.'common.js' ?>" ></script>
        <script type="text/javascript" src="<?php echo JS_DIR.'jsImgSlider/themes/2/js-image-slider.js'; ?>" ></script>
        <script type="text/javascript" src="<?php echo GALLERIA_PATH; ?>" ></script>
        
        <?php include_once(INCLUDES_DIR."analyticstracking.php"); ?>

        <script type="text/javascript">
            
            var MIN_SPEED = -10, MAX_SPEED = 10; 
            
            var xspeed = 0, yspeed = 0;       
            var x = 0, y = 0; 
            var rect = null, body = null;
            var width = 25, height = 25;
            
            $(function(){

                // Initialize Rectangle Element    
                rect = document.getElementById("rect");
                body = document.getElementById("body");
                
                x = body.offsetWidth / 2;
                y = body.offsetHeight / 2;
                
                rect.style.position = "absolute";                             
                rect.style.left = x.toString() + "px";
                rect.style.top = y.toString() + "px"; 
                
                yspeed = (Math.random() * (MAX_SPEED - MIN_SPEED)) + MIN_SPEED;
                xspeed = (Math.random() * (MAX_SPEED - MIN_SPEED)) + MIN_SPEED;   
                
                // Update Ball 30 fps.
                var frames = 30;
                var fps = 1000 / frames; 
                                  
                updateRect();
                updateRectTimeOut = setInterval("updateRect()", fps);
                
            });        
            
            function updateRect() {
                
                x += xspeed;
                y += yspeed;
                
                if (x < 0) {
                    x = 0;
                    xspeed *= -1;
                } else if (x + width > body.offsetWidth) {
                    x = body.offsetWidth - width;
                    xspeed *= -1;
                }
                if (y < 0) {
                    y = 0;
                    yspeed *= -1;                    
                } else if (y + height > body.offsetHeight) {
                    y = body.offsetHeight - height;
                    yspeed *= -1;
                }
                
                rect.style.left = x.toString() + "px";
                rect.style.top = y.toString() + "px";
                
            }
        
    
        </script>
    
        
        <style type="text/css" media=screen>

            #rect {
                position: absolute;
                z-index: -1;
                width: 5px;
                height: 5px;
                background: red;
            }

        </style>
                
		<title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $metaDescription; ?>" />
        <meta name="keywords" content="<?php echo $metaKeywords; ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        
	</head>

    <body id="body">   
<!--
<div class="full-width top-nav">
	<div class="row">

                    <?php
                        $index = 0;
                        foreach ($mainitems as $item => $link) {
                            if (isset($mainIndex) && $mainIndex == $index) {
                                echo '<div class="large-2 columns mainitem"><a class="mn-selected" href="'.$link.'">'.$item.'</a></div>';
                            } else {
                                echo '<div class="large-2 columns mainitem"><a href="'.$link.'">'.$item.'</a></div>';
                            }
                            $index ++;
                        }
                    ?>    
			<div class="large-5 columns homeitem"><a href="">Justin Hellsten</a></div>
                    <?php
                        $index = 0;
                        foreach ($infoitems as $item => $link) {
                            if (isset($infoIndex) && $infoIndex == $index) {
                                echo '<div class="large-1 columns infoitem"><a class="in-selected" href="'.$link.'">'.$item.'</a></div>';
                            } else {
                                echo '<div class="large-1 columns infoitem"><a href="'.$link.'">'.$item.'</a></div>';
                            }
                            $index ++;
                        }
                    ?>
	</div>
</div>
-->

        <div id='top-header'> <!-- Top Header -->
            <div id='top-header-content'>
                <a href="/" title="Home Page"><span>Justin Hellsten</span></a>
                <nav id="main-nav">
                    <?php 
                        $index = 0;
                        foreach ($mainitems as $item => $link) {
                            if (isset($mainIndex) && $mainIndex == $index) {  
                                echo '<a class="mn-selected" href="'.$link.'">'.$item.'</a>';                        
                            } else {                            
                                echo '<a href="'.$link.'">'.$item.'</a>';
                            }
                            $index ++;
                        }
                    ?>                    
                </nav>
                <?php
                    if (isset($mainIndex)) {
                        echo '<div class="arrow-up arrow-main-nav-color main-nav-arrow-'.$mainIndex.'"></div>';
                    }
                    if (isset($infoIndex)) {
                        echo '<div class="arrow-up arrow-info-nav-color info-nav-arrow-'.$infoIndex.'"></div>';
                    }
                ?>
                <nav id="info-nav">
                    <?php
                        $index = 0;
                        foreach ($infoitems as $item => $link) {
                            if (isset($infoIndex) && $infoIndex == $index) {  
                                echo '<a class="in-selected" href="'.$link.'">'.$item.'</a>';    
                            } else {
                                echo '<a href="'.$link.'">'.$item.'</a>';   
                            }
                            $index ++;
                        }                
                    ?>
                </nav>
            </div>
        </div> <!-- End of Top Header -->
        <?php
            if (isset($subnav_type)) {
                if ($subnav_type == 0) {
                    $subItems = $portfolioItems;
                } else if ($subnav_type == 1) {
                    $subItems = $updateItems;
                }
            }
            if (isset($subItems)) {
        ?>
        <div id="sub-header"> <!-- Start of Sub Header -->
            <div id="sub-header-content">
                <nav>
                    <?php 
                        $index = 0;                 
                        foreach ($subItems as $item => $link) {
                            $subecho = '<a href="'.$link.'" class="';
                            if ($index == $subnav) {
                                $subecho .= 'subnav-selected ';
                            }
                            if ($index == 0) {                            
                                $subecho .= 'pi-first "';
                            }
                            $subecho .= '" />'.$item.'</a>';
                            echo $subecho;
                            $index ++;
                        }
                    ?>
                </nav>
            </div> <!-- End of Sub Header -->
        </div>
        <?php
            }
        ?>
           
<!-- Facebook button plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


       
       <!--
       <div id="bread-crumb-area">
       <div class="bread-crumb-inwrap">   
        <?php 
            /* Bread Crumb Script */
            $breadcrumbs = explode('/', $_SERVER['SCRIPT_FILENAME']);
            $link = '';
            foreach ($breadcrumbs as $crumb) {
                if ($crumb == 'public_html') {
                    $link = '/';
                    echo '<div id="crumb-block"><a href="/">Home</a><span> >> </span></div>'; 
                } else if ($crumb != 'hellsten' && $crumb != 'home' && $crumb != '' ) {
                    $link .= $crumb.'/';       
                    if (strrpos($crumb, '.')) {
                        if (strtolower($crumb) != 'index.php') {
                            $name = substr($crumb, 0, strrpos($crumb, '.')); 
                            echo '<div id="crumb-block"><a href="'.$crumb.'">'.$name.'</a><span> >> </span></div>';                            
                        }
                    } else {                         
                        $crumbname = ucfirst($crumb);
                        echo '<div id="crumb-block"><a href="'.$link.'">'.$crumbname.'</a><span> >> </span></div>'; 
                    }                     
                } 
                
            }
            
        ?>
       </div>
       </div>
       -->
<div id="content">

<div id="rect"></div>

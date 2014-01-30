<?php
	require_once ('constants.php');
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foundation 5</title>

        <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
        <link rel="stylesheet" href="<?php echo FOUNDATION_URL; ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo FOUNDATION_URL; ?>css/foundation.css">
        
        <!-- My own customer CSS -->
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>common.css">

        <script src="<?php echo FOUNDATION_URL; ?>js/vendor/modernizr.js"></script>
        
</head>
<body>

        <nav class="top-bar" data-topbar data-options="is_hover: false">
 
                <ul class="title-area">
                        <li class="name"><h1><a href="index.php">Justin Hellsten</a></h1></li>
                        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                </ul>

                <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                                <li class="active"><a href="about.php">About</a></li>
                                <li class="divider"></li>
                                <li class="active"><a href="contact.php">Contact</a></li>
                                <li class="divider"></li>
                                <li class="active"><a href="https://github.com/JustinHue">Github</a></li>
                        </ul>



                        <!-- Left Nav Section -->
                        <ul class="left">
                                <li><a href="#">Projects</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Services</a></li>
                                <li class="divider"></li>
                        </ul>
                </section>
        </nav>



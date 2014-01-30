<?php
	$pageIndex = 3;
	$title = 'Justin Hellsten - Gallery';
?> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

        <div id="galleria">
<?php 
    if ($handle = opendir(ROOT_DIR.IMG_DIR.'gallery')) {
        while (false !== ($entry = readdir($handle))) {                    
            if ($entry != "." && $entry != "..") {
                echo '<img src="'.GALLERY_DIR.$entry.'" >';                        
            }
        }
        closedir($handle);
    }            
?>
        </div>         

    <script>
        Galleria.loadTheme('<?php echo GALLERIA_CLASSIC_THEME_PATH; ?>');
        Galleria.run('#galleria');
    </script>    
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>

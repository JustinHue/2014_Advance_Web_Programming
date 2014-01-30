<?php
	
	/*
	 * I love PHP, ASP.NET Sucks.
	 * 
	 * Also, this script should get the copyright years from values stored in the "copyright" file,
	 * format it, then send it to $crDateOutput.
	 * 
	 */
	 
	$crDateOutput = "";

 	$handle = fopen( INCLUDES_DIR."copyright", "r+");
	if ($handle) {
    	while (($buffer = fgets($handle, 4096)) !== false) {
    		$crTokens = explode("=", trim($buffer));
    		if ($crTokens[0] == "syear") {
    			if (!empty($crTokens[1])) {
    				if ($crTokens[1] < date("Y")) {
    					$crDateOutput = $crTokens[1] . " - " . date("Y");
    				} else { 
    					$crDateOutput = date("Y");
    				}
    			} else {
    				$crDateOutput = date("Y");
    			}
    		} 
    	}
    	if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    	}

   	fclose($handle);
   }
?>
</div> <!-- content -->
                    
        <div id="footer">

            <div class="footer-copyright">
                <p>&#169; <?php echo $crDateOutput; ?> Website Design by Justin Hellsten</p>
            </div>
        
            <div id="footer-social-box">
                <p class="footer-social-text">Follow me on</p>
                <ul>
                    <li>
                        <a href='https://twitter.com/JustinHellsten'><img width="25" height="25" src="<?php echo IMG_DIR.'twitter/twitter-bird-white-on-blue.png' ?>" /></a>
                    </li>
                    <li>
                        <a href='https://www.facebook.com/justin.hellsten'><img width="25" height="25" src="<?php echo IMG_DIR.'facebook/FB-f-Logo__blue_29.png' ?>" /></a>
                    </li>
                    <li>
                        <a href='http://www.linkedin.com/pub/justin-hellsten/4b/178/436'><img width="25" height="25" src="<?php echo IMG_DIR.'linkedin/LinkedIn-InBug-2CRev.png' ?>" /></a>
                    </li>               
                </ul>
            </div>   

        
	</body>
    
</html>	 

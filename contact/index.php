<?php
	$infoIndex = 2;
	$title = 'Justin Hellsten - Contact';
    
    $metaDescription = "Contact page for Justin Hellsten and following him on facebook or twitter.";
    $metaKeywords = "contact contacts email mail issue issues message justin hellsten facebook twitter linkedin gmail";
     
?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

    <div id="contact-form-wrapper">

	    <h1>Contact Me</h1>
<?php 

	$action=$_REQUEST['action']; 
	if ($action!="")               /* send the submitted data */ 
   { 
   	$name=$_REQUEST['name']; 
    	$email=$_REQUEST['email']; 
    	$message=$_REQUEST['message']; 
    	if (($name=="")||($email=="")||($message=="")) 
      { 
      	echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
      } 
    	else
    	{         
       	$from="From: $name<$email>\r\nReturn-path: $email"; 
        	$subject="Message sent using your contact form"; 
        	mail("hellsten@justinhellsten.com", $subject, $message, $from); 
        	echo "Email sent!"; 
      } 
 	}   
?> 

    <form action="" method="POST" enctype="multipart/form-data"> 
		 <input type="hidden" name="action" value="submit" /> 
		 <label>Your name:</label>
		 <input name="name" type="text" value="" size="40"/><br /> 
		 <label>Your email:</label>
		 <input name="email" type="text" value="" size="40"/><br /> 
		 <label>Your message:</label> 
		 <textarea name="message" rows="7" cols="50"></textarea><br /> 
		 <input id="submit" type="submit" value="SEND"/> 
    </form> 
    
    <div id="contact-social-area">
        <!-- Twitter -->
        <a href="https://twitter.com/JustinHellsten" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @JustinHellsten</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <!-- Facebook -->
<div style="margin-top:15px;"class="fb-follow" data-href="http://www.facebook.com/justin.hellsten" data-width="180" data-height="50" data-colorscheme="dark" data-layout="standard" data-show-faces="true"></div>
    </div>
    
</div>
    
	
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>

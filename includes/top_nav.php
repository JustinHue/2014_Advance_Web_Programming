<?php 
	$menuitems = array('Home' => '/', 'Portfolio' => '/portfolio', 'Blog' => '/blog', 'Gallery' => '/gallery', 'Contact' => '/contact');
?>




<div id="top-nav">
	
	<ul> 
		<?php
			$index = 0;
			foreach ($menuitems as $item => $href) {
				if ($pageIndex == $index) {
					echo '<li class="menu-item-selected"><a href="' . $href . '">' . $item . '</a></li>';
				} else {
					echo '<li class="menu-item"><a href="' . $href . '">' . $item . '</a></li>';
				}
                
				$index ++;
			}
		?>
	</ul>	
</div>

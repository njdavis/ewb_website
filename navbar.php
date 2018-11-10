<?php 
	/* Title: Navbar 
	* Author: Noah Davis
	* */
?>

<div class="navbar">
	
	<div class='logo'>

		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			echo '<embed src="'. esc_url( $logo[0] ) .'">'
		?>
	</div>
	<div class='whiteBorder'></div>
	<div class="navlist">	
		<ul>
			<li><a href="#about">Calendar</a></li>	
			<li><a href="#about">Contact</a></li>
			<li><a href="#about">Media</a></li>
			<li><a href="#about">Donate</a></li>
			<li><a href="#contact">Projects</a></li>
			<li><a href="#news">About</a></li>
		</ul>
	</div>
	<div class='whiteBorder'></div>
	<div class='border'></div>
</div>




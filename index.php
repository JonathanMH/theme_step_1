<?php
	wp_head();
	while ( have_posts() ) : the_post();
		the_title();
		the_content();
	endwhile;
	wp_footer();
?>

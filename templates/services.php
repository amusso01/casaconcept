<?php
/*
Template Name: Template Services
Template Post Type: page

* @package foundry
*/

get_header();
?>

<main role="main" class="services-main">
<?php

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();


  get_template_part( 'template-parts/content', 'page-services' );



	endwhile; // End of the loop.

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->


<?php
get_footer();

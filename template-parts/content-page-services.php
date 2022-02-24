<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('services-section' ); ?>>
	<header class="entry-header content-block">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content content-block">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</section><!-- #post-<?php the_ID(); ?> -->

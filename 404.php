<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foundry
 */

get_header(); ?>


<main class="main main-error content-block" role="main">

	<section class="section" id="section-error-page" style="margin:120px 0 ;">

		<h1 class="page-title error-title"><?php esc_html_e( 'Content Cannot Be Found', 'foundry' ); ?></h1>

		<div class="page-body error-body" style="margin:80px 0 120px;">

			<p style="margin:30px 0 ;"><?php esc_html_e( 'Unfortunately the content you were looking for could not be found. Please check that the URL is correct or do a search using the form below.', 'foundry' ); ?></p>

      <form id="searchForm404" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input type="hidden" name="post_type[]" value="product" />
          <input type="text" class="search-field" name="s" placeholder="SEARCH" value="<?php echo get_search_query(); ?>">
          <button type="submit" id="searchSubmit">
            <?php get_template_part( 'svg-template/svg', 'icon_search' ) ?>
          </button>
      </form>

		</div>

	</section>

</main>

<?php get_footer(); ?>
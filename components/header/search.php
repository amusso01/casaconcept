<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="hidden" name="post_type[]" value="product" />
    <input type="text" class="search-field" name="s" placeholder="SEARCH" value="<?php echo get_search_query(); ?>">
    <button type="submit" id="searchSubmit">
      <?php get_template_part( 'svg-template/svg', 'icon_search' ) ?>
    </button>
</form>

<div id="searchMobile" class="search-icon search-mobile">
  <?php get_template_part( 'svg-template/svg', 'icon_search' ) ?>
</div>
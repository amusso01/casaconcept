<?php
/**
 * Add WooCommerce support
 *
 * @package foundry
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'foundry_woocommerce_support' );
if ( ! function_exists( 'foundry_woocommerce_support' ) ) {
	/**
	 * Declares WooCommerce theme support.
	 */
	function foundry_woocommerce_support() {
		add_theme_support( 'woocommerce' );

		// Add Product Gallery support.
		add_theme_support( 'wc-product-gallery-lightbox' );
		// add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-slider' );

		}
}

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

// REMOVE WOO CSS
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


// MOVE SORT BEFORE COUNT RESULT
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 30 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 20 );


/**
 * Shop/archives: wrap the product image/thumbnail in a div.
 * 
 * The product image itself is hooked in at priority 10 using woocommerce_template_loop_product_thumbnail(),
 * so priority 9 and 11 are used to open and close the div.
 */
add_action( 'woocommerce_before_shop_loop_item_title', function(){
  echo '<figure class="fdry-woo__img-wrapper">';
}, 9 );
add_action( 'woocommerce_before_shop_loop_item_title', function(){
  echo '</figure>';
}, 11 );



/*
* Content before "QTY" Button.
*/
add_action( 'woocommerce_before_add_to_cart_quantity', 'woocommerce_before_add_to_cart_quantity_func' );
function woocommerce_before_add_to_cart_quantity_func() {

  // Echo content.
  echo '<div class="fdry-woo__qty-wrapper">';

}

/*
* Content below "Add to cart" Button.
*/
add_action( 'woocommerce_after_add_to_cart_button', 'woocommerce_after_add_to_cart_button_func' );
function woocommerce_after_add_to_cart_button_func() {

  // Echo content.
  echo '</div> <!--  fdry-woo__qty-wrapper --> <div class="line"></div>';

}

// Add wrapper in my account
// The div is closed in my-account.php
add_action( 'woocommerce_before_account_navigation', 'woocommerce_before_account_navigation_function' );
function woocommerce_before_account_navigation_function() {

  // Echo content.
  echo '<div class="fd-myaccount-wrapper">';

}


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 32;
  return $cols;
}

/**
*  Redirect shop to home
*/
function custom_shop_page_redirect() {
  if( is_shop() && !is_search()){
      wp_redirect( site_url( '/' ) );
      exit();
  }
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );
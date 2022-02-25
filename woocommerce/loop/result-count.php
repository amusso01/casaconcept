<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
  <p class="woocommerce-result-count">
    <?php
    // phpcs:disable WordPress.Security
    if ( 1 === intval( $total ) ) {
      _e( 'Showing the single result', 'woocommerce' );
    } elseif ( $total <= $per_page || -1 === $per_page ) {
      /* translators: %d: total results */
      printf( _n( 'Showing all %d result', 'Showing all %d results', $total, 'woocommerce' ), $total );
    } else {
      $first = ( $per_page * $current ) - $per_page + 1;
      $last  = min( $total, $per_page * $current );
      /* translators: 1: first result 2: last result 3: total results */
      printf( _nx( 'Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
    }
    // phpcs:enable WordPress.Security
    ?>
  </p>

  <div class="filter__cta">
    <p id="filter__cta"><span><i><svg xmlns="http://www.w3.org/2000/svg" width="16.485" height="12" viewBox="0 0 16.485 12"><g data-name="Group 37"><g data-name="Group 36" transform="translate(-95.639 -445)"><path data-name="Path 182" d="M96.639 447.543h14.485" fill="none" stroke="#64afa9" stroke-linecap="round" stroke-width="2"></path><path data-name="Path 183" d="M96.639 454.543h14.485" fill="none" stroke="#64afa9" stroke-linecap="round" stroke-width="2"></path><circle data-name="Ellipse 15" cx="2.5" cy="2.5" r="2.5" transform="translate(100 445)" fill="#64afa9"></circle><circle data-name="Ellipse 16" cx="2.5" cy="2.5" r="2.5" transform="translate(104 452)" fill="#64afa9"></circle></g></g></svg></i></span>Filter &amp; Sort</p>
  </div>
</div> <!--  .fdry-woo__archive-bar  -->

<div class="line"></div>


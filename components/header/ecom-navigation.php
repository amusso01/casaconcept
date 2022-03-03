
<?php 
$cart = WC()->cart;
?>

<div class="ecom-navigation">
  <p class="cart"><span class="price-tot"><?php echo $cart->get_cart_total() ?></span><span class="item-tot"><?php echo $cart->get_cart_contents_count(); ?> ITEM</span></p>
  <nav class="ecom-nav">
    <p class="ecom-nav__item"><a href="<?php  echo esc_url(wc_get_cart_url());?>"><?php get_template_part( 'svg-template/svg', 'icon_basket') ?></a></p>
    <p class="ecom-nav__item"><a href="<?php echo wc_get_page_permalink( 'myaccount' ) ?>"><?php get_template_part( 'svg-template/svg', 'icon_account' ) ?></a></p>
  </nav>
</div>
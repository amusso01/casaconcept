<?php
/**
 * HomePage Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $cats = get_field('category_to_display');

 ?>

 <section class="fd-home__banner">
   <figure class="banner">
     <img src="<?php echo get_template_directory_uri() ?>/dist/images/home-banner.jpg" alt="">
    </figure>
    <div class="fd-home__banner-text">
      <h2>Casa Concept shop</h2>
      <p>Hand picked luxury brands</p>
      <a href="#" class="btn">SHOP ALL</a>
    </div>
 </section>

 <section class="fd-shop-cat">
  <?php foreach($cats as $cat)  :?>
    <?php $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );  ?>
    <?php $image = wp_get_attachment_url( $thumbnail_id );   ?>
    <article class="fd-shop-cat__single">
      <a href="<?php echo get_term_link( $cat->term_id, 'product_cat' ) ?>">

      
        <figure>
          <img src="<?php echo $image ?>" alt="<?php echo  $cat->name ?> image">
          <p class="title"><?php echo 'SHOP '.$cat->name ?></p>
        </figure>
      </a>
    </article>
  <?php endforeach; ?>
 </section>


 <section class="fd-bestselling">
    <?php the_content () ?>
 </section>
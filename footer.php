<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

    </div><!-- #content -->

      <footer class="site-footer">
        <div class="site-footer__inner-top content-block ">
          <h3 class="h1">Complete your journey</h3>
          <?php get_template_part( 'components/footer/nav' ) ?>
          <div class="site-footer__contact">
            <a href="mailto:test@casaconcept.com" class="btn"><span>GET IN TOUCH</span></a>
          </div>
        </div>

        <div class="site-footer__inner-bottom content-block ">
          <div class="site-footer__legal">
           <?php get_template_part( 'components/footer/nav-legal' ) ?>
          </div>
          <div class="site-footer__social">
            <p><?php echo  do_shortcode( "[copyright]" ) ?></p>
            <nav class="site-footer__social-nav">
              <p class="site-footer__social-nav__item"><a href="#"><i><?php get_template_part( 'svg-template/svg', 'icon_facebook' ) ?></i></a></p>
              <p class="site-footer__social-nav__item"><a href="#"><i><?php get_template_part( 'svg-template/svg', 'icon_instagram' ) ?></i></a></p>
              <p class="site-footer__social-nav__item"><a href="#"><i><?php get_template_part( 'svg-template/svg', 'icon_pinterest' ) ?></i></a></p>
            </nav>
          </div>

        </div>
      </footer><!-- #colophon -->

    </div><!-- #page -->

    <?php wp_footer(); ?>

  </body>
</html>

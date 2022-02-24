<?php
/**
 * Requires ACF Version 5.8+
 * Requires Glide.js
 * @author      Andrea Musso
 *
 *
 */

 /*==================================================================================
   slider, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

  $result = acf_register_block(array(
    'name'				     => 'fd_slider',
    'title'				     => __('slider'),
    'description'		   => __('slider block'),
    'render_callback'	 => 'foundry_gutenblock_slider',
    'category'		     => 'fd-category', // common, formatting, layout, widgets, embed
    'icon' => array(
           // Specifying a background color to appear with the icon e.g.: in the inserter.
           'background' => '#fff ',
           // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
           'foreground' => '#FEAF6C',
           // Specifying a dashicon for the block
           'src' => 'images-alt',
           'mode'              => 'edit',
           'align'             => 'full',
           ),
    'keywords'		     => ['fd', 'slider', 'image']
  ));
}

/* Render Block
/––––––––––––––––––––––––*/
function foundry_gutenblock_slider() {
   
  
   // Get Vars
   $images = get_field('images');

   // Return HTML

   ?>

   <section  class="block-slider">
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <?php foreach($images as $image) : ?>
          <li class="glide__slide">
            <figure><img src="<?php echo $image ?>" alt="image slier"></figure>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" width="54.056" height="54.056" viewBox="0 0 54.056 54.056"><g data-name="Group 89"><g data-name="Path 16" fill="none"><path d="M27.028 54.056a27.028 27.028 0 1127.028-27.028 27.028 27.028 0 01-27.028 27.028z"/><path d="M27.028 53.056a25.942 25.942 0 0018.404-7.623 25.942 25.942 0 007.624-18.405 25.942 25.942 0 00-7.623-18.404A25.942 25.942 0 0027.028 1 25.942 25.942 0 008.624 8.623 25.942 25.942 0 001 27.029a25.942 25.942 0 007.623 18.404 25.942 25.942 0 0018.405 7.624m0 1C12.101 54.056 0 41.956 0 27.028 0 12.101 12.101 0 27.028 0c14.927 0 27.028 12.101 27.028 27.028 0 14.927-12.1 27.028-27.028 27.028z" fill="#fff"/></g><path data-name="Path 18" d="M27.028 54.056a27.028 27.028 0 1127.028-27.028 27.028 27.028 0 01-27.028 27.028z" fill="#272727" opacity=".321"/><g data-name="Group 1"><path data-name="Path 4" d="M28.96 34.012l-6.41-6.41a.855.855 0 010-1.209l6.325-6.324 1.209 1.209-5.72 5.72 5.806 5.806z" fill="#fff"/></g></g></svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir="&#62;" >
          <svg xmlns="http://www.w3.org/2000/svg" width="54.056" height="54.056" viewBox="0 0 54.056 54.056"><g data-name="Group 88"><g data-name="Path 16" fill="none"><path d="M27.028 0A27.028 27.028 0 110 27.028 27.028 27.028 0 0127.028 0z"/><path d="M27.028 1A25.942 25.942 0 008.624 8.623 25.942 25.942 0 001 27.028a25.942 25.942 0 007.623 18.404 25.942 25.942 0 0018.405 7.624 25.942 25.942 0 0018.404-7.623 25.942 25.942 0 007.624-18.405 25.942 25.942 0 00-7.623-18.404A25.942 25.942 0 0027.027 1m0-1c14.927 0 27.028 12.1 27.028 27.028 0 14.927-12.101 27.028-27.028 27.028C12.1 54.056 0 41.955 0 27.028 0 12.1 12.1 0 27.028 0z" fill="#fff"/></g><path data-name="Path 18" d="M27.028 0A27.028 27.028 0 110 27.028 27.028 27.028 0 0127.028 0z" fill="#272727" opacity=".321"/><g data-name="Group 1"><path data-name="Path 4" d="M25.096 20.044l6.41 6.41a.855.855 0 010 1.209l-6.325 6.324-1.209-1.209 5.72-5.72-5.806-5.806z" fill="#fff"/></g></g></svg>
        </button>
      </div>
     
    </div>

   </section>


<?php
}

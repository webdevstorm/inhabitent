<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<div class="front-hero-image" ><img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-full.svg'?> alt ="girl tent camping in the forest"></div>
   <section class="container">  
   <h2 class="section-titles">shop stuff</h2> 
<section class="shop-stuff">
           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div class="shop-stuff-containers">
                 <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $term->slug . '.svg'?> alt ="product icons">
                 <p><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
</div>
           <?php endforeach; wp_reset_postdata(); ?>
		</section>
		
<h2 class="section-titles">inhabitent journal</h2>

<section class="journal">
 
   <div class="front-page-journal">
      <?php
      $latest_posts = inhabitent_get_latest_posts();
      foreach ( $latest_posts as $post ) : setup_postdata( $post );
       ?>

       <div class="journal-posts">
       <?php
        if(has_post_thumbnail()) {
	       the_post_thumbnail('medium_large');
           }
         ?>
            
         <a href = "<?php the_permalink();?>">read entry</a>
           <span> <?php 
            the_date();
            echo comments_number();?></span>
            <a> <?php  the_title(); ?></a>
      </div> 
           <?php    endforeach;
               wp_reset_postdata();
               ?>
      </div>
</div>
</div>
</section>


<section class="adventure-grid">
   <div class="adventure-1">
      <h3>
Getting Back to Nature in a Canoe</h3>
<a href="#"> read more</a>
   </div>
   
   <div class="adventure-2">
   <h3>
A Night with Friends at the Beach</h3>
<a href="#"> read more</a>
   </div>
   <div class="adventure-3">
   <h3>
Taking in the View at Big Mountain</h3>
<a href="#"> read more</a>
   </div>
   <div class="adventure-4">
   <h3>
Star-Gazing at the Night Sky</h3>
<a href="#"> read more</a>
   </div>
<!-- <img class="front-canoe-image"src=<?php echo get_template_directory_uri().'/images/adventure-photos/canoe-girl.jpg'?> alt="girl canoeing on the lake" />
<img class="front-beach-image" src=<?php echo get_template_directory_uri().'/images/adventure-photos/beach-bonfire.jpg'?> alt="friends huddled around the fire on the beach" />
<img class="front-mountain-image"src=<?php echo get_template_directory_uri().'/images/adventure-photos/mountain-hikers.jpg'?> alt="man and woman hiking on mountain" />
<img class="front-sky-image"src=<?php echo get_template_directory_uri().'/images/adventure-photos/night-sky.jpg'?> alt="man stargazing into the sky"/> -->

</section>
                  </section>
</main>
</div>

<?php get_footer(); ?>

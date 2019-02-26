<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<div class="front-hero-image"> <img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-full.svg'?>></div>
  
   <h2 class="section-titles">shop stuff</h2> 
<section class="shop-stuff">
           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div class="shop-stuff-containers">
                 <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $term->slug . '.svg'?>>
                 <p><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
</div>
           <?php endforeach; wp_reset_postdata(); ?>
		</section>
		
<!-----JOURNAL STUFF--->
<h2 class="section-titles">inhabitent journal</h2>
<section class="journal">

<?php
$latest_posts = inhabitent_get_latest_posts();
foreach ( $latest_posts as $post ) : setup_postdata( $post );
?>
<div class="front-page-journal">
<?php
if(has_post_thumbnail()) {
	the_post_thumbnail('medium_large');
}
?>
<a href = "<?php the_permalink();?>">Read More</a>
<?php 
the_date();
echo comments_number();
the_title();
endforeach;
wp_reset_postdata();
?>
</div>

</section>


<section class="adventure-grid">
   
<div class="front-canoe-image"> <img src=<?php echo get_template_directory_uri().'/images/adventure-photos/canoe-girl.jpg'?>></div>
<div class="front-beach-image"> <img src=<?php echo get_template_directory_uri().'/images/adventure-photos/beach-bonfire.jpg'?>></div>
<div class="front-mountain-image"> <img src=<?php echo get_template_directory_uri().'/images/adventure-photos/mountain-hikers.jpg'?>></div>
<div class="front-sky-image"> <img src=<?php echo get_template_directory_uri().'/images/adventure-photos/night-sky.jpg'?>></div>

</section>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

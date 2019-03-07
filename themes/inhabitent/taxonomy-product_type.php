<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>



		
			<div class="product-type-grid">
			<?php while ( have_posts() ) : the_post(); ?>
					<div>
                     <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
					 <div class="product-post-info">
					 <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					 <div class="dots">	  </div>
                     <span class="price"><?php echo esc_html( CFS()->get( 'product-price' ) ); ?></span></div>
			  <div>
	   
			   <?php endwhile; ?>
			   </div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main>
	</div>


<?php get_footer(); ?>

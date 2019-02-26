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
			</header><!-- .page-header -->



			<?php /* Start the Loop */ ?>
			<div class="product-grid">
			<?php while ( have_posts() ) : the_post(); ?>
					<div>
                     <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
                     <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                     <span class="price"><?php echo esc_html( CFS()->get( 'product-price' ) ); ?></span></div>
			  
	   
			   <?php endwhile; ?>
			   </div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

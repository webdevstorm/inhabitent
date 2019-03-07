<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */ 
//Template Name: About page

?>
<?php get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile;  ?>

		</main>
	</div>


<?php get_footer(); ?>

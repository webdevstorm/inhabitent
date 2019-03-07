<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="front-tent-image-green"> <img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-tent.svg'?> alt="green inhabitent tent logo"></div>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<section class="archive-article">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>
				<div class="archive-link"><a href = "<?php the_permalink();?>">read more</a></div>
				</section>
				<section class="archive-article">
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</section>
		<?php endif; ?>

		</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

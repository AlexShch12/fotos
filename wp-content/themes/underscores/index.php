<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos
 */

get_header();
?>

<div id="primary" class="content-area">
	<div class="container">
	<div class="row">
	<div class="col-lg-9 col-md-9"> 
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			wp_pagenavi();  // навигация страниц - через плагин
			// the_posts_navigation();   - так было в оригинале

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		/*<?php putRevSlider('', 'homepage'); ?> */
		?>

		</main><!-- #main -->
	</div>  <!--col-lg-9  -->
	<?php get_sidebar(); ?>
	</div> <!-- .row -->
	</div><!-- container bootstrap -->

</div><!-- #primary -->

<?php get_footer(); ?>

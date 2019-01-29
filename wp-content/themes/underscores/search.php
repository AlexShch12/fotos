<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fotos
 */

get_header();
?>

	<section id="primary" class="content-area">

	<div class="container">
	<div class="row">
	<div class="col-lg-9 col-md-9">

		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска для: %s', 'fotos' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			wp_pagenavi();  // навигация страниц - через плагин
			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->

	</div>  <!--col-lg-9  -->
	<?php get_sidebar(); ?>
	</div> <!-- .row -->
	</div><!-- container bootstrap -->

	</section><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fotos
 */

get_header();
?>

	<div id="primary" class="content-area">

	<div class="container">
	<div class="row">
	<div class="col-lg-8 col-md-8">

		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Внимание! Эта страница не найдена.', 'fotos' ); ?></h1>
					<hr style="opacity:0"; margin-top: 30px;>
					<img src="<?php bloginfo('template_url'); ?>/images/404r.jpg" alt="">
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Ничего не было найдено в этом месте. Попробуйте другой пункт меню или новый поиск.', 'fotos' ); ?></p>
<!-- 					<img src="<?php bloginfo('template_url'); ?>/images/404r.jpg" alt="">
 -->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

	</div>  <!--col-lg-8  -->
	<?php get_sidebar(); ?>
	</div> <!-- .row -->
	</div><!-- container bootstrap -->

	</div><!-- #primary -->

<?php get_footer(); ?>

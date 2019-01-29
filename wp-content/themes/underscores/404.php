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
					<h1 class="page-title"><?php esc_html_e( 'Внимания! Эта страница не найдена.', 'fotos' ); ?></h1>
<!-- 					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fotos' ); ?></h1>
 -->				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Ничего не было найдено в этом месте. Попробуйте другой пункт меню или новый поиск.', 'fotos' ); ?></p>
<!-- 					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fotos' ); ?></p>
 -->
					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Самые используемые категории', 'fotos' ); ?></h2>
<!-- 						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'fotos' ); ?></h2>
 -->						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$fotos_archive_content = '<p>' . sprintf( esc_html__( 'Попробуйте поискать в месячных архивах. %1$s', 'fotos' ), convert_smilies( ':)' ) ) . '</p>';
					// $fotos_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'fotos' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$fotos_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

	</div>  <!--col-lg-8  -->
	<?php get_sidebar(); ?>
	</div> <!-- .row -->
	</div><!-- container bootstrap -->

	</div><!-- #primary -->

<?php get_footer(); ?>
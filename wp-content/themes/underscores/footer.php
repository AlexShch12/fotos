<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fotos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="container">
		
		<div class="site-info">
				&copy; ТМ Alex, тел. 096-248-31-49 &emsp; &emsp; &emsp; 
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Тема: %1$s ', 'fotos' ), 'Fotos', ' ' );
				// Было 2: printf( esc_html__( 'Тема: %1$s на %2$s.', 'fotos' ), 'Fotos', 'Underscores.me' );
				// Было 1: printf( esc_html__( 'Theme: %1$s by %2$s.', 'fotos' ), 'fotos', '<a href="http://underscores.me/">Underscores.me</a>' );			
				?>
		</div> <!-- .site-info -->
		
		</div> <!-- .container --> 

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

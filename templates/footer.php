<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
			</section><!-- #main -->
			
			<div class="row"></div>
			
			<footer class="siteFooter thickTopBorder" role="contentinfo">
	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>			<div class="row">
					<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</footer><!-- footer -->

		</div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
	
</html>
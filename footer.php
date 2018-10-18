<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HeadLabNeo
 */

?>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				&copy; <?php echo "Copyright"; 
						echo date("Y"); 
						echo ' - ';
						bloginfo( 'name' );
						
						 ?>

			<div class="social-media">
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-tumblr"></i>
				<i class="fab fa-google-plus-g"></i>
				<i class="fab fa-youtube-square"></i>
			</div>
				
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
			<ul class="social-media">
				<div class="form-mail">
				<?php  echo do_shortcode('[mc4wp_form id="1487"]');?>
				</div>
				<li><i class="fab fa-facebook-f"></i></li>
				<li><i class="fab fa-tumblr"></i></li>
				<li><i class="fab fa-google-plus-g"></i></li>
				<li><i class="fab fa-youtube"></i></li>
			</ul>
			<div class="site-info">
				&copy; <?php echo "Copyright"; 
						echo date("Y"); 
						echo ' - ';
						bloginfo( 'name' );
						
						 ?>
				
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

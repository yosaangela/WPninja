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
				<li>f</li>
				<li>t</li>
				<li>g<sup>+</sup></li>
				<li>yt</li>
			</ul>
			<div class="site-info">
				&copy; <?php echo "Copyright"; 
						echo date("Y"); 
						echo ' - ';
						bloginfo( 'name' );
						
						 ?>
				
				<span>Designed and developed by Wappstars</span>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
			<div class="news-social">
				<div class="form-mail">
				<?php  echo do_shortcode('[mc4wp_form id="1487"]');?>
				</div>
				<div class="social">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter-square"></i></a>
					<a href="#"><i class="fab fa-google-plus-square"></i></a>
				</div> <!--  .social -->
			</div> <!--  .news-social -->
			<div class="site-info">
				<span>
					
				&copy; <?php echo "Copyright"; 
						echo date("Y"); 
						echo ' - ';
						bloginfo( 'name' );
						
						 ?>
				</span>
				<span>Designed and developed by Wappstars</span>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

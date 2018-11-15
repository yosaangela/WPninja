<div id="menu-overlay" class="menu-overlay"> 
	<div class="menu-in-overlay">
		<?php the_custom_logo(); ?>
		<span><?php bloginfo('name'); ?> </span>
	</div> <!--  .menu-in-overlay -->
	<a class="close-menu"><span class="sr-only">Close menu</span></a>

	<div class="container-edge">
		<div class="row">
			<div class="main-menu">
				<h3>Menu</h3>
				<?php headlab_menu('custom_menu'); ?>
			</div>
			<div class="menu-services">
				<h3>Menu Services</h3>
				<a href="https://www.rabbitcab.nl/taxi-van-omgeving-roermond-naar-schiphol-airport/">
					Some link 1
				</a>
				<a href="https://www.rabbitcab.nl/">Some link 2</a>
			</div>
			<div class="menu-added">
				<h3>Selling Point</h3>
				<a href="#">Rocks</a>
				<a href="#">I'm killin' it</a>
				<a href="#">Fucking CSS</a>
				<a href="#">This is</a>
				<a href="#">Just Example</a>
			</div> 
		</div>
		
		<div class="search-section">
			<?php get_search_form(); ?>
		</div> <!--  .search-section -->

	</div>
</div>
<?php
/**
 * @package HeadLabNeo
 * @subpackage rabbitcab
 * Template Name: Landing page
 */

$landing_settings = acf_get_fields('group_5b3b6e7bb723a'); //Landing page settings */

foreach ( $landing_settings as $field ) {
  ${$field['name']} = get_field($field['name']);
}
?>

<?php get_header(); ?>



<?php if($landing_page_intro) {

echo "<div class='prl-30'>";

$intro_title = $landing_page_intro['title'];
$intro_content = $landing_page_intro['content'];

echo "<div class='landing-intro'>";

if ($intro_title) {
	echo "<h2>$intro_title</h2>";
}

if ($intro_content) {
	echo $intro_content;
}

echo "</div></div>";

} ?>



<?php

if($landing_page_items) {

	echo "<div class='landing-page-items clearfix'>";

	foreach ($landing_page_items as $i) {

	$img 		= $i['image']['url'];
	$title 		= $i['title'];
	$content	= strip_tags($i['content'], '<a>');

	echo "

		<div class='landing-page-item'>

			<div class='landing-page-item-image' style='background-image: url($img);'></div> <!--  .landing-page-item-image -->

			<div class='landing-page-item-content'>

				<h3>$title</h3>

				<p>$content</p>
				
			</div> <!--  .landing-page-item-content -->

		</div> <!--  .landing-page-item -->

		";

	} // END foreach

	echo "</div>"; // END landing-page-items

} // END if

?>



<?php if($landing_page_outro) {

$outro_title = $landing_page_outro['title'];
$outro_content = $landing_page_outro['content'];
$outro_list = $landing_page_outro['list'];

	echo "<div class='prl-30'>";

	echo "<div class='landing-outro clearfix'>";

	echo "<div class='landing-outro-content'>";

	if($outro_title) {
		echo "<h3>$outro_title</h3>";
	}

	if($outro_content) {
		echo $outro_content;
	}

	echo "</div>";

	if($outro_list) {
		echo "<ul>";
		foreach($outro_list as $item) {
			$item = $item['item'];
			echo "<li>$item</li>";
		}
		echo "</ul>";
	}

	echo "<a id='book-me' class='book-me' href='#cta'></a>";

	echo "</div> <!-- END .landing-outro -->";
	echo "</div>";

} ?>


<?php get_footer(); // check this out and if you have any questions feel free to ask.?>
<?php
/*
 * The template for displaying fullpage items.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
?>

<div class="brxy-full-wrap">
<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	} else {
		get_template_part( 'layouts/post/content', 'none' );
	}
?>
</div>

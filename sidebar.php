<?php
/*
 * The sidebar containing the main widget area.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

$brixey_blog_widget = cs_get_option('blog_widget');
$brixey_team_widget = cs_get_option('team_widget');

if (is_page()) {
	// Page Layout Options
	$brixey_page_layout = get_post_meta( get_the_ID(), 'page_layout_options', true );
	if ($brixey_page_layout) {
		$brixey_page_widget = $brixey_page_layout['page_sidebar_widget'];
	} else {
		$brixey_page_widget = '';
	}
	if (!empty($brixey_page_widget)) {
		$brixey_page_widget = $brixey_page_widget;
	} else {
		$brixey_page_widget = cs_get_option('page_widget');
	}
}
if (is_single()) {
	$brixey_page_layout = get_post_meta( get_the_ID(), 'page_layout_options', true );
	if ($brixey_page_layout) {
		$brixey_single_blog_widget = $brixey_page_layout['page_sidebar_widget'];
	} else {
		$brixey_single_blog_widget = cs_get_option('single_blog_widget');
	}
}
if (is_page() && $brixey_page_widget) {
	if (is_active_sidebar($brixey_page_widget)) {
		dynamic_sidebar($brixey_page_widget);
	}
} elseif (!is_page() && !is_front_page() && $brixey_blog_widget && !$brixey_single_blog_widget) {
	if (is_active_sidebar($brixey_blog_widget)) {
		dynamic_sidebar($brixey_blog_widget);
	}
}  elseif (is_single() && $brixey_single_blog_widget) {
	if (is_active_sidebar($brixey_single_blog_widget)) {
		dynamic_sidebar($brixey_single_blog_widget);
	}
} else {
	if (is_active_sidebar('sidebar-1')) {
		dynamic_sidebar( 'sidebar-1' );
	}
}

?>

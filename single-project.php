<?php
/*
 * The template for displaying all single projects.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
get_header();

// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
$project_layout  = get_post_meta( $brixey_id, 'project_layout_metabox', true );

if ($project_layout) {
	get_template_part('layouts/project/project', $project_layout['select_project_layout'] );
} else {
	get_template_part('layouts/project/content', 'none' );
}

get_footer();

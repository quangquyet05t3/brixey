<?php
/*
 * Brixey Theme Widgets
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

if ( ! function_exists( 'brixey_vt_widget_init' ) ) {
	function brixey_vt_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {

			// Main Widget Area
			register_sidebar(
				array(
					'name' => esc_html__( 'Main Widget Area', 'brixey' ),
					'id' => 'sidebar-1',
					'description' => esc_html__( 'Appears on posts and pages.', 'brixey' ),
					'before_widget' => '<div id="%1$s" class="brxy-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>',
				)
			);
			// Main Widget Area

			// Footer Widgets
			$footer_widgets = cs_get_option( 'footer_widget_layout' );
	    if( $footer_widgets ) {

	      switch ( $footer_widgets ) {
	        case 5:
	        case 6:
	        case 7:
	          $length = 3;
	        break;

	        case 8:
	        case 9:
	          $length = 4;
	        break;

	        default:
	          $length = $footer_widgets;
	        break;
	      }

	      for( $i = 0; $i < $length; $i++ ) {

	        $num = ( $i+1 );

	        register_sidebar( array(
	          'id'            => 'footer-' . $num,
	          'name'          => esc_html__( 'Footer Widget ', 'brixey' ). $num,
	          'description'   => esc_html__( 'Appears on footer section.', 'brixey' ),
	          'before_widget' => '<div class="column-wrap %2$s">',
	          'after_widget'  => '</div> <!-- end widget -->',
	          'before_title'  => '<div class="brxy-column-title"><span class="column-title">',
	          'after_title'   => '</span></div>'
	        ) );

	      }

	    }
	    // Footer Widgets

			/* Custom Sidebar */
			$custom_sidebars = cs_get_option('custom_sidebar');
			if ($custom_sidebars) {
				foreach($custom_sidebars as $custom_sidebar) :
				$heading = $custom_sidebar['sidebar_name'];
				$own_id = preg_replace('/[^a-z]/', "-", strtolower($heading));
				$desc = $custom_sidebar['sidebar_desc'];

				register_sidebar( array(
					'name' => esc_html($heading),
					'id' => $own_id,
					'description' => esc_html($desc),
					'before_widget' => '<div id="%1$s" class="brxy-widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>',
				) );
				endforeach;
			}
			/* Custom Sidebar */

		}
	}
	add_action( 'widgets_init', 'brixey_vt_widget_init' );
}
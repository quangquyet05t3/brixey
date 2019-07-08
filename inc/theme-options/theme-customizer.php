<?php
/*
 * All customizer related options for Brixey theme.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

if( ! function_exists( 'brixey_vt_customizer' ) ) {
  function brixey_vt_customizer( $options ) {

	$options        = array(); // remove old options

	// Primary Color
	$options[]      = array(
	  'name'        => 'elemets_color_section',
	  'title'       => esc_html__('Primary Color', 'brixey'),
	  'settings'    => array(

	    // Fields Start
			array(
				'name'      => 'brxy_body_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Body Color', 'brixey'),
				),
			),
			array(
				'name'      => 'brxy_body_bg_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Body Background Color', 'brixey'),
				),
			),
	    // Fields End

	  )
	);
	// Primary Color

	// Header Color
	$options[]      = array(
	  'name'        => 'header_color_section',
	  'title'       => esc_html__('02. Header Colors', 'brixey'),
	  'settings'    => array(

	    // Fields Start
			array(
				'name'          => 'header_main_menu_heading',
				'control'       => array(
					'type'        => 'cs_field',
					'options'     => array(
						'type'      => 'notice',
						'class'     => 'info',
						'content'   => esc_html__('Main Menu Colors', 'brixey'),
					),
				),
			),
			array(
				'name'      => 'header_bg_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Background Color', 'brixey'),
				),
			),
			array(
				'name'      => 'header_link_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Link Color', 'brixey'),
				),
			),
			array(
				'name'      => 'header_link_hover_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Link Hover Color', 'brixey'),
				),
			),

			// Sub Menu Color
			array(
				'name'          => 'header_submenu_heading',
				'control'       => array(
					'type'        => 'cs_field',
					'options'     => array(
						'type'      => 'notice',
						'class'     => 'info',
						'content'   => esc_html__('Sub-Menu Colors', 'brixey'),
					),
				),
			),
			array(
				'name'      => 'submenu_bg_color',
				'control'   => array(
					'type'  => 'color',
					'label'  => esc_html__('Background Color', 'brixey'),
				),
			),
			array(
				'name'      => 'submenu_link_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Link Color', 'brixey'),
				),
			),
			array(
				'name'      => 'submenu_link_hover_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Link Hover Color', 'brixey'),
				),
			),
	    // Fields End

	  )
	);
	// Header Color

	// Title Bar Color
	$options[]      = array(
	  'name'        => 'titlebar_section',
	  'title'       => esc_html__('03. Title Bar Colors', 'brixey'),
    'settings'      => array(

    	// Fields Start
    	array(
				'name'          => 'titlebar_colors_heading',
				'control'       => array(
					'type'        => 'cs_field',
					'options'     => array(
						'type'      => 'notice',
						'class'     => 'info',
						'content'   => __('<h2 style="margin: 0;text-align: center;">Title Colors</h2> <br /> This is common settings, if this settings not affect in your page. Please check your page metabox. You may set default settings there.', 'brixey'),
					),
				),
			),
    	array(
				'name'      => 'titlebar_title_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Title Color', 'brixey'),
				),
			),
    	array(
				'name'      => 'titlebar_sub_title_color',
				'control'   => array(
					'type'  => 'color',
					'label' => esc_html__('Sub-Title Color', 'brixey'),
				),
			),
	    // Fields End

	  )
	);
	// Title Bar Color

	// Content Color
	$options[]      = array(
	  'name'        => 'content_section',
	  'title'       => esc_html__('04. Content Colors', 'brixey'),
	  'description' => esc_html__('This is all about content area text and heading colors.', 'brixey'),
	  'sections'    => array(

	  	array(
	      'name'          => 'content_text_section',
	      'title'         => esc_html__('Content Text', 'brixey'),
	      'settings'      => array(

			    // Fields Start
			    array(
						'name'      => 'content_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__(' Content Color', 'brixey'),
						),
					),
					array(
						'name'      => 'body_links_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Body Links Color', 'brixey'),
						),
					),
					array(
						'name'      => 'body_link_hover_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Body Links Hover Color', 'brixey'),
						),
					),
					array(
						'name'      => 'sidebar_content_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Sidebar Content Color', 'brixey'),
						),
					),
			    // Fields End
			  )
			),

			// Text Colors Section
			array(
	      'name'          => 'content_heading_section',
	      'title'         => esc_html__('Headings', 'brixey'),
	      'settings'      => array(

	      	// Fields Start
					array(
						'name'      => 'content_heading_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Content Heading Color', 'brixey'),
						),
					),
	      	array(
						'name'      => 'sidebar_heading_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Sidebar Heading Color', 'brixey'),
						),
					),
			    // Fields End

      	)
      ),

	  )
	);
	// Content Color

	// Footer Color
	$options[]      = array(
	  'name'        => 'footer_section',
	  'title'       => esc_html__('05. Footer Colors', 'brixey'),
	  'description' => esc_html__('This is all about footer settings. Make sure you\'ve enabled your needed section at : Brixey > Theme Options > Footer ', 'brixey'),
	  'sections'    => array(

			// Footer Widgets Block
	  	array(
	      'name'          => 'footer_widget_section',
	      'title'         => esc_html__('Widget Block', 'brixey'),
	      'settings'      => array(

			    // Fields Start
				array(
			      'name'          => 'footer_widget_color_notice',
			      'control'       => array(
			        'type'        => 'cs_field',
			        'options'     => array(
			          'type'      => 'notice',
			          'class'     => 'info',
			          'content'   => esc_html__('Content Colors', 'brixey'),
			        ),
			      ),
			    ),
					array(
						'name'      => 'footer_title_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Widget Title Color', 'brixey'),
						),
					),
					array(
						'name'      => 'footer_heading_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Widget Heading Color', 'brixey'),
						),
					),
					array(
						'name'      => 'footer_text_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Widget Text Color', 'brixey'),
						),
					),
					array(
						'name'      => 'footer_link_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Widget Link Color', 'brixey'),
						),
					),
					array(
						'name'      => 'footer_link_hover_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Widget Link Hover Color', 'brixey'),
						),
					),
					array(
						'name'      => 'footer_bg_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Background Color', 'brixey'),
						),
					),
			    // Fields End
			  )
			),
			// Footer Widgets Block

			// Footer Copyright Block
	  	array(
	      'name'          => 'footer_copyright_section',
	      'title'         => esc_html__('Copyright Block', 'brixey'),
	      'settings'      => array(

			    // Fields Start
			    array(
			      'name'          => 'footer_copyright_active',
			      'control'       => array(
			        'type'        => 'cs_field',
			        'options'     => array(
			          'type'      => 'notice',
			          'class'     => 'info',
			          'content'   => __('Make sure you\'ve enabled copyright block in : <br /> <strong>Brixey > Theme Options > Footer > Copyright Bar : Enable Copyright Block</strong>', 'brixey'),
			        ),
			      ),
			    ),
					array(
						'name'      => 'copyright_text_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Text Color', 'brixey'),
						),
					),
					array(
						'name'      => 'copyright_link_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Link Color', 'brixey'),
						),
					),
					array(
						'name'      => 'copyright_link_hover_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Link Hover Color', 'brixey'),
						),
					),
					array(
						'name'      => 'copyright_bg_color',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Background Color', 'brixey'),
						),
					),
					array(
						'name'      => 'copyright_border_color',
						'default'   => '#cccccc',
						'control'   => array(
							'type'  => 'color',
							'label' => esc_html__('Border Color', 'brixey'),
						),
					),

			  )
			),
			// Footer Copyright Block

	  )
	);
	// Footer Color

	return $options;

  }
  add_filter( 'cs_customize_options', 'brixey_vt_customizer' );
}
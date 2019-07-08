<?php
/*
 * All Theme Options for Brixey theme.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

function brixey_vt_settings( $settings ) {

  $settings           = array(
    'menu_title'      => BRIXEY_NAME . esc_html__(' Options', 'brixey'),
    'menu_slug'       => sanitize_title(BRIXEY_NAME) . '_options',
    'menu_type'       => 'menu',
    'menu_icon'       => 'dashicons-awards',
    'menu_position'   => '4',
    'ajax_save'       => false,
    'show_reset_all'  => true,
    'framework_title' => BRIXEY_NAME .' <small>V-'. BRIXEY_VERSION .' by <a href="'. BRIXEY_BRAND_URL .'" target="_blank">'. BRIXEY_BRAND_NAME .'</a></small>',
  );

  return $settings;

}
add_filter( 'cs_framework_settings', 'brixey_vt_settings' );

// Theme Framework Options
function brixey_vt_options( $options ) {

  $options      = array(); // remove old options

  // ------------------------------
  // Theme Brand
  // ------------------------------
  $options[]   = array(
    'name'     => 'theme_brand',
    'title'    => esc_html__('Brand', 'brixey'),
    'icon'     => 'fa fa-bookmark',
    'sections' => array(

      // brand logo tab
      array(
        'name'     => 'brand_logo_title',
        'title'    => esc_html__('Logo', 'brixey'),
        'icon'     => 'fa fa-star',
        'fields'   => array(

          // Site Logo
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Site Logo', 'brixey')
          ),
          array(
            'id'    => 'brand_logo_default',
            'type'  => 'image',
            'title' => esc_html__('Default Logo Dark', 'brixey'),
            'info'  => esc_html__('Upload your default logo for white background. If you not upload, then site title will load in this logo location.', 'brixey'),
            'add_title' => esc_html__('Add Logo', 'brixey'),
          ),
          array(
            'id'    => 'brixey_brand_logo_white',
            'type'  => 'image',
            'title' => esc_html__('Default Logo White', 'brixey'),
            'info'  => esc_html__('Upload your default logo for dark background. If you not upload, then site title will load in this logo location.', 'brixey'),
            'add_title' => esc_html__('Add Logo', 'brixey'),
          ),
          array(
            'id'    => 'brand_logo_retina',
            'type'  => 'image',
            'title' => esc_html__('Retina Logo Dark', 'brixey'),
            'info'  => esc_html__('Upload your retina logo for white background. Recommended size is 2x from default logo.', 'brixey'),
            'add_title' => esc_html__('Add Retina Logo', 'brixey'),
          ),
          array(
            'id'    => 'brand_logo_retina_white',
            'type'  => 'image',
            'title' => esc_html__('Retina Logo White', 'brixey'),
            'info'  => esc_html__('Upload your retina logo for dark background. Recommended size is 2x from default logo.', 'brixey'),
            'add_title' => esc_html__('Add Retina Logo', 'brixey'),
          ),
          array(
            'id'          => 'retina_width',
            'type'        => 'text',
            'title'       => esc_html__('Retina & Normal Logo Width', 'brixey'),
            'unit'        => 'px',
          ),
          array(
            'id'          => 'retina_height',
            'type'        => 'text',
            'title'       => esc_html__('Retina & Normal Logo Height', 'brixey'),
            'unit'        => 'px',
          ),
          array(
            'id'          => 'brand_logo_top',
            'type'        => 'number',
            'title'       => esc_html__('Logo Top Space', 'brixey'),
            'attributes'  => array( 'placeholder' => 5 ),
            'unit'        => 'px',
          ),
          array(
            'id'          => 'brand_logo_bottom',
            'type'        => 'number',
            'title'       => esc_html__('Logo Bottom Space', 'brixey'),
            'attributes'  => array( 'placeholder' => 5 ),
            'unit'        => 'px',
          ),

          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Transparent Header', 'brixey')
          ),
          array(
            'id'    => 'transparent_logo_default',
            'type'  => 'image',
            'title' => esc_html__('Transparent Logo', 'brixey'),
            'info'  => esc_html__('Upload your transparent header logo here. This logo is used in transparent header by enabled in each pages.', 'brixey'),
            'add_title' => esc_html__('Add Transparent Logo', 'brixey'),
          ),
          array(
            'id'    => 'transparent_logo_retina',
            'type'  => 'image',
            'title' => esc_html__('Transparent Retina Logo', 'brixey'),
            'info'  => esc_html__('Upload your transparent header retina logo here. This logo is used in transparent header by enabled in each pages.', 'brixey'),
            'add_title' => esc_html__('Add Transparent Retina Logo', 'brixey'),
          ),

          // WordPress Admin Logo
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('WordPress Admin Logo', 'brixey')
          ),
          array(
            'id'    => 'brand_logo_wp',
            'type'  => 'image',
            'title' => esc_html__('Login logo', 'brixey'),
            'info'  => esc_html__('Upload your WordPress login page logo here.', 'brixey'),
            'add_title' => esc_html__('Add Login Logo', 'brixey'),
          ),
        ) // end: fields
      ), // end: section

      // brand logo tab
      // Fav
      array(
        'name'     => 'brand_fav',
        'title'    => esc_html__('Fav Icon', 'brixey'),
        'icon'     => 'fa fa-anchor',
        'fields'   => array(

            // -----------------------------
            // Begin: Fav
            // -----------------------------
            array(
              'id'    => 'brand_fav_icon',
              'type'  => 'image',
              'title' => esc_html__('Fav Icon', 'brixey'),
              'info'  => esc_html__('Upload your site fav icon, size should be 16x16.', 'brixey'),
              'add_title' => esc_html__('Add Fav Icon', 'brixey'),
            ),
            array(
              'id'    => 'iphone_icon',
              'type'  => 'image',
              'title' => esc_html__('Apple iPhone icon', 'brixey'),
              'info'  => esc_html__('Icon for Apple iPhone (57px x 57px). This icon is used for Bookmark on Home screen.', 'brixey'),
              'add_title' => esc_html__('Add iPhone Icon', 'brixey'),
            ),
            array(
              'id'    => 'iphone_retina_icon',
              'type'  => 'image',
              'title' => esc_html__('Apple iPhone retina icon', 'brixey'),
              'info'  => esc_html__('Icon for Apple iPhone retina (114px x114px). This icon is used for Bookmark on Home screen.', 'brixey'),
              'add_title' => esc_html__('Add iPhone Retina Icon', 'brixey'),
            ),
            array(
              'id'    => 'ipad_icon',
              'type'  => 'image',
              'title' => esc_html__('Apple iPad icon', 'brixey'),
              'info'  => esc_html__('Icon for Apple iPad (72px x 72px). This icon is used for Bookmark on Home screen.', 'brixey'),
              'add_title' => esc_html__('Add iPad Icon', 'brixey'),
            ),
            array(
              'id'    => 'ipad_retina_icon',
              'type'  => 'image',
              'title' => esc_html__('Apple iPad retina icon', 'brixey'),
              'info'  => esc_html__('Icon for Apple iPad retina (144px x 144px). This icon is used for Bookmark on Home screen.', 'brixey'),
              'add_title' => esc_html__('Add iPad Retina Icon', 'brixey'),
            ),

        ) // end: fields
      ), // end: section

    ),
  );

  // ------------------------------
  // Layout
  // ------------------------------
  $options[] = array(
    'name'   => 'theme_layout',
    'title'  => esc_html__('Layout', 'brixey'),
    'icon'   => 'fa fa-file-text'
  );

  $options[]      = array(
    'name'        => 'theme_general',
    'title'       => esc_html__('General', 'brixey'),
    'icon'        => 'fa fa-wrench',

    // begin: fields
    'fields'      => array(

      // -----------------------------
      // Begin: Responsive
      // -----------------------------
      array(
        'id'    => 'theme_responsive',
        'type'  => 'switcher',
        'title' => esc_html__('Responsive', 'brixey'),
        'info' => esc_html__('Turn off if you don\'t want your site to be responsive.', 'brixey'),
        'default' => true,
      ),
      array(
        'id'    => 'theme_page_comments',
        'type'  => 'switcher',
        'title' => esc_html__('Page Comments', 'brixey'),
        'info' => esc_html__('Turn On if you want to show comments in your pages.', 'brixey'),
        'default' => true,
      ),
      array(
        'id'             => 'theme_color',
        'type'           => 'select',
        'title'          => esc_html__('Theme Color', 'brixey'),
        'options'        => array(
          'light' => esc_html__('Light', 'brixey'),
          'dark' => esc_html__('Dark', 'brixey'),
        ),
      ),
      array(
        'id'             => 'page_sidebar_position',
        'type'         => 'image_select',
        'title'          => esc_html__('Page Layout', 'brixey'),
        'options'   => array(
          'full-width'    => BRIXEY_CS_IMAGES . '/page-1.png',
          'extra-width'   => BRIXEY_CS_IMAGES . '/page-2.png',
          'left-sidebar'  => BRIXEY_CS_IMAGES . '/page-3.png',
          'right-sidebar' => BRIXEY_CS_IMAGES . '/page-4.png',
        ),
        'default_option' => 'Select sidebar position',
        'default' => 'full-width',
        'attributes' => array(
          'data-depend-id' => 'page_sidebar_position',
        ),
      ),
      array(
        'id'             => 'page_widget',
        'type'           => 'select',
        'title'          => esc_html__('Sidebar Widget', 'brixey'),
        'options'        => brixey_vt_registered_sidebars(),
        'default_option' => esc_html__('Select Widget', 'brixey'),
        'dependency'      => array('page_sidebar_position', 'any', 'left-sidebar,right-sidebar'),
        'default' => 'sidebar-1',
      ),

    ), // end: fields

  );

  // ------------------------------
  // Header Sections
  // ------------------------------
  $options[]   = array(
    'name'     => 'theme_header_tab',
    'title'    => esc_html__('Header', 'brixey'),
    'icon'     => 'fa fa-bars',
    'sections' => array(
      // header design tab
      array(
        'name'     => 'header_design_tab',
        'title'    => esc_html__('Design', 'brixey'),
        'icon'     => 'fa fa-magic',
        'fields'   => array(

          // Header Select
          array(
            'id'           => 'select_header_design',
            'type'         => 'image_select',
            'title'        => esc_html__('Select Menu Style', 'brixey'),
            'options'      => array(
              'style_two'    => BRIXEY_CS_IMAGES .'/hs-2.png',
              'style_one'    => BRIXEY_CS_IMAGES .'/hs-1.png',
              'overlay_menu'    => BRIXEY_CS_IMAGES .'/hs-3.png',
            ),
            'attributes' => array(
              'data-depend-id' => 'select_header_design',
            ),
            'radio'        => true,
            'default'   => 'style_two',
            'info' => esc_html__('Select your header design, following options will may differ based on your selection of header design.', 'brixey'),
          ),
          array(
          'id'              => 'menu_social_icons',
          'title'           => esc_html__('Overlay Menu Socials', 'brixey'),
          'type'            => 'group',
          'fields'          => array(
            array(
              'id'          => 'icon',
              'type'        => 'icon',
              'title'       => esc_html__('Social Icon', 'brixey'),
            ),
            array(
              'id'          => 'url',
              'type'        => 'text',
              'title'       => esc_html__('Social URL', 'brixey'),
              'attributes' => array(
                'placeholder' => esc_html__('http://', 'brixey'),
              ),
            ),
          ),
          'accordion'       => true,
          'button_title'    => esc_html__('Add New Icon', 'brixey'),
          'accordion_title' => esc_html__('New Icon', 'brixey'),
        ),
          array(
            'id'    => 'transparent_header',
            'type'  => 'switcher',
            'title' => esc_html__('Transparent Header?', 'brixey'),
            'default' => false,
          ),
          array(
            'id'    => 'sticky_header',
            'type'  => 'switcher',
            'title' => esc_html__('Sticky Header?', 'brixey'),
            'info' => esc_html__('Turn On if you want your naviagtion bar on sticky.', 'brixey'),
            'default' => true,
          ),
        )
      ),

      // header banner
      array(
        'name'     => 'header_banner_tab',
        'title'    => esc_html__('Title Bar (or) Banner', 'brixey'),
        'icon'     => 'fa fa-bullhorn',
        'fields'   => array(

          // Title Area
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Title Area', 'brixey')
          ),
          array(
            'id'      => 'need_title_bar',
            'type'    => 'switcher',
            'title'   => esc_html__('Title Bar', 'brixey'),
            'label'   => esc_html__('If you want title bar in your sub-pages, please turn this ON.', 'brixey'),
            'default'    => true,
          ),
          array(
            'id'             => 'title_bar_padding',
            'type'           => 'select',
            'title'          => esc_html__('Padding Spaces Top & Bottom', 'brixey'),
            'options'        => array(
              'default-spacing' => esc_html__('Default Spacing', 'brixey'),
              'padding-xs' => esc_html__('Extra Small Padding', 'brixey'),
              'padding-sm' => esc_html__('Small Padding', 'brixey'),
              'padding-md' => esc_html__('Medium Padding', 'brixey'),
              'padding-lg' => esc_html__('Large Padding', 'brixey'),
              'padding-xl' => esc_html__('Extra Large Padding', 'brixey'),
              'padding-no' => esc_html__('No Padding', 'brixey'),
              'padding-custom' => esc_html__('Custom Padding', 'brixey'),
            ),
            'dependency'   => array( 'need_title_bar', '==', 'true' ),
          ),
          array(
            'id'             => 'titlebar_top_padding',
            'type'           => 'text',
            'title'          => esc_html__('Padding Top', 'brixey'),
            'attributes' => array(
              'placeholder'     => '100px',
            ),
            'dependency'   => array( 'title_bar_padding', '==', 'padding-custom' ),
          ),
          array(
            'id'             => 'titlebar_bottom_padding',
            'type'           => 'text',
            'title'          => esc_html__('Padding Bottom', 'brixey'),
            'attributes' => array(
              'placeholder'     => '100px',
            ),
            'dependency'   => array( 'title_bar_padding', '==', 'padding-custom' ),
          ),

        )
      ),

    ),
  );

  // ------------------------------
  // Footer Section
  // ------------------------------
  $options[]   = array(
    'name'     => 'footer_section',
    'title'    => esc_html__('Footer', 'brixey'),
    'icon'     => 'fa fa-ellipsis-h',
    'sections' => array(

      // footer widgets
      array(
        'name'     => 'footer_widgets_tab',
        'title'    => esc_html__('Widget Area', 'brixey'),
        'icon'     => 'fa fa-th',
        'fields'   => array(

          // Footer Widget Block
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Footer Widget Block', 'brixey')
          ),
          array(
            'id'    => 'footer_widget_block',
            'type'  => 'switcher',
            'title' => esc_html__('Enable Widget Block', 'brixey'),
            'info' => esc_html__('If you turn this ON, then Goto : Appearance > Widgets. There you can see <strong>Footer Widget 1,2,3 or 4</strong> Widget Area, add your widgets there.', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'footer_widget_layout',
            'type'  => 'image_select',
            'title' => esc_html__('Widget Layouts', 'brixey'),
            'info' => esc_html__('Choose your footer widget layouts.', 'brixey'),
            'default' => 4,
            'options' => array(
              1   => BRIXEY_CS_IMAGES . '/footer/footer-1.png',
              2   => BRIXEY_CS_IMAGES . '/footer/footer-2.png',
              3   => BRIXEY_CS_IMAGES . '/footer/footer-3.png',
              4   => BRIXEY_CS_IMAGES . '/footer/footer-4.png',
              5   => BRIXEY_CS_IMAGES . '/footer/footer-5.png',
              6   => BRIXEY_CS_IMAGES . '/footer/footer-6.png',
              7   => BRIXEY_CS_IMAGES . '/footer/footer-7.png',
              8   => BRIXEY_CS_IMAGES . '/footer/footer-8.png',
              9   => BRIXEY_CS_IMAGES . '/footer/footer-9.png',
            ),
            'radio'       => true,
            'dependency'  => array('footer_widget_block', '==', true),
          ),

        )
      ),

      // footer copyright
      array(
        'name'     => 'footer_copyright_tab',
        'title'    => esc_html__('Copyright Bar', 'brixey'),
        'icon'     => 'fa fa-copyright',
        'fields'   => array(

          // Copyright
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Copyright Layout', 'brixey'),
          ),
          array(
            'id'    => 'need_copyright',
            'type'  => 'switcher',
            'title' => esc_html__('Enable Copyright Section', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'footer_copyright_layout',
            'type'  => 'image_select',
            'title' => esc_html__('Select Copyright Layout', 'brixey'),
            'info' => esc_html__('In above image, blue box is copyright text and yellow box is secondary text.', 'brixey'),
            'default'      => 'copyright-3',
            'options'      => array(
              'copyright-1'    => BRIXEY_CS_IMAGES .'/footer/copyright-1.png',
              'copyright-2'    => BRIXEY_CS_IMAGES .'/footer/copyright-2.png',
              'copyright-3'    => BRIXEY_CS_IMAGES .'/footer/copyright-3.png',
              ),
            'radio'        => true,
            'dependency'     => array('need_copyright', '==', true),
          ),
          array(
            'id'    => 'copyright_text',
            'type'  => 'textarea',
            'title' => esc_html__('Copyright Text', 'brixey'),
            'shortcode' => true,
            'dependency' => array('need_copyright', '==', true),
          ),
          array(
            'id'        => 'copyright_layout',
            'type'      => 'select',
            'title'     => esc_html__('Copyright Layout', 'brixey'),
            'options'   => array(
              'contained' => esc_html__('Contained', 'brixey'),
              'fullwidth' => esc_html__('Fullwidth', 'brixey'),
            ),
            'dependency'  => array('need_copyright', '==', 'true'),
          ),
          // Copyright Another Text
          array(
            'type'    => 'notice',
            'class'   => 'warning cs-vt-heading',
            'content' => esc_html__('Footer Menu', 'brixey'),
            'dependency'     => array('need_copyright', '==', true),
          ),
          array(
            'id'    => 'secondary_text',
            'type'  => 'textarea',
            'title' => esc_html__('Footer Menu', 'brixey'),
            'shortcode' => true,
            'dependency' => array('need_copyright', '==', 'true'),
          ),

        )
      ),

    ),
  );

  // ------------------------------
  // Design
  // ------------------------------
  $options[] = array(
    'name'   => 'theme_design',
    'title'  => esc_html__('Design', 'brixey'),
    'icon'   => 'fa fa-magic'
  );

  // ------------------------------
  // color section
  // ------------------------------
  $options[]   = array(
    'name'     => 'theme_color_section',
    'title'    => esc_html__('Colors', 'brixey'),
    'icon'     => 'fa fa-eyedropper',
    'fields' => array(

      array(
        'type'    => 'heading',
        'content' => esc_html__('Color Options', 'brixey'),
      ),
      array(
        'type'    => 'subheading',
        'wrap_class' => 'color-tab-content',
        'content' => __('All color options are available in our theme customizer. The reason of we used customizer options for color section is because, you can choose each part of color from there and see the changes instantly using customizer.
          <br /><br />Highly customizable colors are in <strong>Appearance > Customize</strong>', 'brixey'),
      ),

    ),
  );

  // ------------------------------
  // Typography section
  // ------------------------------
  $options[]   = array(
    'name'     => 'theme_typo_section',
    'title'    => esc_html__('Typography', 'brixey'),
    'icon'     => 'fa fa-header',
    'fields' => array(

      // Start fields
      array(
        'id'                  => 'typography',
        'type'                => 'group',
        'fields'              => array(
          array(
            'id'              => 'title',
            'type'            => 'text',
            'title'           => esc_html__('Title', 'brixey'),
          ),
          array(
            'id'              => 'selector',
            'type'            => 'textarea',
            'title'           => esc_html__('Selector', 'brixey'),
            'info'           => __('Enter css selectors like : <strong>body, .custom-class</strong>', 'brixey'),
          ),
          array(
            'id'              => 'font',
            'type'            => 'typography',
            'title'           => esc_html__('Font Family', 'brixey'),
          ),
          array(
            'id'              => 'size',
            'type'            => 'text',
            'title'           => esc_html__('Font Size', 'brixey'),
          ),
          array(
            'id'              => 'line_height',
            'type'            => 'text',
            'title'           => esc_html__('Line-Height', 'brixey'),
          ),
          array(
            'id'              => 'css',
            'type'            => 'textarea',
            'title'           => esc_html__('Custom CSS', 'brixey'),
          ),
        ),
        'button_title'        => esc_html__('Add New Typography', 'brixey'),
        'accordion_title'     => esc_html__('New Typography', 'brixey'),
        'default'             => array(
          array(
            'title'           => esc_html__('Body Typography', 'brixey'),
            'selector'        => 'body',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '14px',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('Menu Typography', 'brixey'),
            'selector'        => '.brxy-menu > li > a',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '11px',
          ),
          array(
            'title'           => esc_html__('Sub Menu Typography', 'brixey'),
            'selector'        => '.brxy-menu .sub-menu > li > a',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '11px',
          ),
          array(
            'title'           => esc_html__('H1 Typography', 'brixey'),
            'selector'        => 'h1',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '36px',
            'font_weight'     => '700',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('H2 Typography', 'brixey'),
            'selector'        => 'h2',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '30px',
            'font_weight'     => '700',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('H3 Typography', 'brixey'),
            'selector'        => 'h3',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '24px',
            'font_weight'     => '700',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('H4 Typography', 'brixey'),
            'selector'        => 'h4',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '18px',
            'font_weight'     => '700',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('H5 Typography', 'brixey'),
            'selector'        => 'h5',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '14px',
            'font_weight'     => '700',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('H6 Typography', 'brixey'),
            'selector'        => 'h6',
            'font'            => array(
              'family'        => 'Lato',
              'variant'       => 'regular',
            ),
            'size'            => '12px',
            'font_weight'     => '700',
            'line_height'     => '1.42857143',
          ),
          array(
            'title'           => esc_html__('Miscellaneous Typography', 'brixey'),
            'selector'        => 'p, input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="search"], input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"], input[type="url"], input[type="number"], textarea, select, .form-control, .wpcf7-list-item-label, .brxy-title-wrap .section-sub-title, .project-info .project-category, .brxy-testimonial .client-designation, .mate-info .mate-designation, .brxy-info-title .info-sub-title, .contact-link, .service-info ul, .brxy-service-detail .tab-content ul, .brxy-service-detail dl dd, .post-date, .brxy-unit-fix .brxy-blog-detail ul, .brxy-comments-area .comment-area ul, .brxy-unit-fix .brxy-blog-detail ol, .brxy-comments-area .comment-area ol, .brxy-unit-fix .brxy-bottom-meta, .location-list ul, .column-wrap',
            'font'            => array(
              'family'        => 'Arvo',
              'variant'       => 'regular',
            ),
          ),
        ),
      ),

      // Subset
      array(
        'id'                  => 'subsets',
        'type'                => 'select',
        'title'               => esc_html__('Subsets', 'brixey'),
        'class'               => 'chosen',
        'options'             => array(
          'latin'             => 'latin',
          'latin-ext'         => 'latin-ext',
          'cyrillic'          => 'cyrillic',
          'cyrillic-ext'      => 'cyrillic-ext',
          'greek'             => 'greek',
          'greek-ext'         => 'greek-ext',
          'vietnamese'        => 'vietnamese',
          'devanagari'        => 'devanagari',
          'khmer'             => 'khmer',
        ),
        'attributes'         => array(
          'data-placeholder' => 'Subsets',
          'multiple'         => 'multiple',
          'style'            => 'width: 200px;'
        ),
        'default'             => array( 'latin' ),
      ),

      array(
        'id'                  => 'font_weight',
        'type'                => 'select',
        'title'               => esc_html__('Font Weights', 'brixey'),
        'class'               => 'chosen',
        'options'             => array(
          '100'   => 'Thin 100',
          '100i'  => 'Thin 100 Italic',
          '200'   => 'Extra Light 200',
          '200i'  => 'Extra Light 200 Italic',
          '300'   => 'Light 300',
          '300i'  => 'Light 300 Italic',
          '400'   => 'Regular 400',
          '400i'  => 'Regular 400 Italic',
          '500'   => 'Medium 500',
          '500i'  => 'Medium 500 Italic',
          '600'   => 'Semi Bold 600',
          '600i'  => 'Semi Bold 600 Italic',
          '700'   => 'Bold 700',
          '700i'  => 'Bold 700 Italic',
          '800'   => 'Extra Bold 800',
          '800i'  => 'Extra Bold 800 Italic',
          '900'   => 'Black 900',
          '900i'  => 'Black 900 Italic',
        ),
        'attributes'         => array(
          'data-placeholder' => 'Font Weight',
          'multiple'         => 'multiple',
          'style'            => 'width: 200px;'
        ),
        'default'             => array( '400' ),
      ),

      // Custom Fonts Upload
      array(
        'id'                 => 'font_family',
        'type'               => 'group',
        'title'              => 'Upload Custom Fonts',
        'button_title'       => 'Add New Custom Font',
        'accordion_title'    => 'Adding New Font',
        'accordion'          => true,
        'desc'               => 'It is simple. Only add your custom fonts and click to save. After you can check "Font Family" selector. Do not forget to Save!',
        'fields'             => array(

          array(
            'id'             => 'name',
            'type'           => 'text',
            'title'          => 'Font-Family Name',
            'attributes'     => array(
              'placeholder'  => 'for eg. Arial'
            ),
          ),

          array(
            'id'             => 'ttf',
            'type'           => 'upload',
            'title'          => 'Upload .ttf <small><i>(optional)</i></small>',
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => 'Use this Font-Format',
              'button_title' => 'Upload <i>.ttf</i>',
            ),
          ),

          array(
            'id'             => 'eot',
            'type'           => 'upload',
            'title'          => 'Upload .eot <small><i>(optional)</i></small>',
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => 'Use this Font-Format',
              'button_title' => 'Upload <i>.eot</i>',
            ),
          ),

          array(
            'id'             => 'svg',
            'type'           => 'upload',
            'title'          => 'Upload .svg <small><i>(optional)</i></small>',
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => 'Use this Font-Format',
              'button_title' => 'Upload <i>.svg</i>',
            ),
          ),

          array(
            'id'             => 'otf',
            'type'           => 'upload',
            'title'          => 'Upload .otf <small><i>(optional)</i></small>',
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => 'Use this Font-Format',
              'button_title' => 'Upload <i>.otf</i>',
            ),
          ),

          array(
            'id'             => 'woff',
            'type'           => 'upload',
            'title'          => 'Upload .woff <small><i>(optional)</i></small>',
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => 'Use this Font-Format',
              'button_title' => 'Upload <i>.woff</i>',
            ),
          ),

          array(
            'id'             => 'css',
            'type'           => 'textarea',
            'title'          => 'Extra CSS Style <small><i>(optional)</i></small>',
            'attributes'     => array(
              'placeholder'  => 'for eg. font-weight: normal;'
            ),
          ),

        ),
      ),
      // End All field

    ),
  );

  // ------------------------------
  // Pages
  // ------------------------------
  $options[] = array(
    'name'   => 'theme_pages',
    'title'  => esc_html__('Pages', 'brixey'),
    'icon'   => 'fa fa-files-o'
  );

  // ------------------------------
  // Project Section
  // ------------------------------
  $options[]   = array(
    'name'     => 'project_section',
    'title'    => esc_html__('Project', 'brixey'),
    'icon'     => 'fa fa-briefcase',
    'fields' => array(

      // project name change
      array(
        'type'    => 'notice',
        'class'   => 'info cs-vt-heading',
        'content' => esc_html__('Name Change', 'brixey')
      ),
      array(
        'id'      => 'theme_project_name',
        'type'    => 'text',
        'title'   => esc_html__('Project Name', 'brixey'),
        'attributes'     => array(
          'placeholder'  => 'Project'
        ),
      ),
      array(
        'id'      => 'theme_project_slug',
        'type'    => 'text',
        'title'   => esc_html__('Project Slug', 'brixey'),
        'attributes'     => array(
          'placeholder'  => 'project-item'
        ),
      ),
      array(
        'id'      => 'theme_project_cat_slug',
        'type'    => 'text',
        'title'   => esc_html__('Project Category Slug', 'brixey'),
        'attributes'     => array(
          'placeholder'  => 'project-category'
        ),
      ),
      array(
        'type'    => 'notice',
        'class'   => 'danger',
        'content' => __('<strong>Important</strong>: Please do not set project slug and page slug as same. It\'ll not work.', 'brixey')
      ),
            // start fields
      array(
        'id'              => 'project_custom_taxonomies',
        'title'           => esc_html__('More Taxonomy', 'brixey'),
        'type'            => 'group',
        'fields'          => array(
          array(
            'id'          => 'taxonomy_name',
            'type'        => 'text',
            'title'       => esc_html__('Taxonomy Name', 'brixey'),
          ),
        ),
        'accordion'       => true,
        'button_title'    => esc_html__('Add New Taxonomy', 'brixey'),
        'accordion_title' => esc_html__('New Taxonomy', 'brixey'),
         'default'             => array(
          array(
            'taxonomy_name'            => 'Year',
          ),
          array(
            'taxonomy_name'            => 'Materials',
          ),
          array(
            'taxonomy_name'            => 'Status',
          ),
        ),
      ),
      // Project Name
      array(
        'type'    => 'notice',
        'class'   => 'info cs-vt-heading',
        'content' => esc_html__('Single Project', 'brixey')
      ),
      array(
        'id'      => 'project_single_pagination',
        'type'    => 'switcher',
        'title'   => esc_html__('Hide Next & Prev Navigation', 'brixey'),
        'label'   => esc_html__('If you don\'t want next and previous navigation in project single pages, please turn this on.', 'brixey'),
        'default'   => false,
      ),
      array(
        'id'      => 'theme_project_url',
        'type'    => 'text',
        'title'   => esc_html__('Project URL', 'brixey'),
      ),
      // Project Listing
      array(
        'type'    => 'notice',
        'class'   => 'info cs-vt-heading',
        'content' => esc_html__('Taxonomy', 'brixey')
      ),
      array(
        'id'            => 'project_taxonomy_style',
        'type'          => 'select',
        'title'         => esc_html__('Project Style', 'brixey'),
        'options'       => array(
          'masonry'    => esc_html__('Masonry', 'brixey'),
          'grid'    => esc_html__('Grid', 'brixey'),
        ),
        'default' => 'masonry',
      ),
      array(
        'id'            => 'project_taxonomy_column',
        'type'          => 'select',
        'title'         => esc_html__('Project Column', 'brixey'),
        'options'       => array(
          'masonry-item-1'    => esc_html__('Column 1', 'brixey'),
          'masonry-item-2'    => esc_html__('Column 2', 'brixey'),
          'masonry-item-3'    => esc_html__('Column 3', 'brixey'),
          'masonry-item-4'    => esc_html__('Column 4', 'brixey'),
          'masonry-item-5'    => esc_html__('Column 5', 'brixey'),
        ),
        'default' => 'masonry-item-4',
      ),
      array(
        'id'            => 'project_taxonomy_layout',
        'type'          => 'select',
        'title'         => esc_html__('Project Layout', 'brixey'),
        'options'       => array(
          'default'    => esc_html__('Default Spacing', 'brixey'),
          'full-width-no-space'    => esc_html__('Fullwidth No Space', 'brixey'),
          'full-width-gutter'    => esc_html__('Fullwidth With gutter', 'brixey'),
          'full-width-more-space'    => esc_html__('Fullwidth More Space', 'brixey'),
          'contained-less-space'    => esc_html__('Contained Less Space', 'brixey'),
          'contained-medium-space'    => esc_html__('Contained Medium Space', 'brixey'),
          'contained-more-space'    => esc_html__('Contained More Space', 'brixey'),
          'contained-large-space'    => esc_html__('Contained Large Space', 'brixey'),
          'contained-extra-space'    => esc_html__('Contained Extra Space', 'brixey'),
        ),
        'default' => 'default',
      ),
      array(
        'id'            => 'project_taxonomy_caption',
        'type'          => 'select',
        'title'         => esc_html__('Project Caption', 'brixey'),
        'options'       => array(
          ''    => esc_html__('Select Caption Style', 'brixey'),
          'style1'    => esc_html__('Caption On Bottom (center)', 'brixey'),
          'style3'    => esc_html__('Caption On Bottom (Left)', 'brixey'),
          'style2'    => esc_html__('Caption Transition (Left)', 'brixey'),
          'style4'    => esc_html__('Caption Transition (Center)', 'brixey'),
          'style5'    => esc_html__('Caption Slide (Bottom)', 'brixey'),
          'style6'    => esc_html__('Caption Slide (3D)', 'brixey'),
        ),
      ),
      array(
        'id'            => 'project_taxonomy_pagination',
        'type'          => 'select',
        'title'         => esc_html__('Pagination', 'brixey'),
        'options'       => array(
          'button'    => esc_html__('Ajax Button', 'brixey'),
          'navigation'    => esc_html__('Navigation', 'brixey'),
          'hide'    => esc_html__('Hide', 'brixey'),
        ),
      ),
    ),
  );

  // ------------------------------
  // Blog Section
  // ------------------------------
  $options[]   = array(
    'name'     => 'blog_section',
    'title'    => esc_html__('Blog', 'brixey'),
    'icon'     => 'fa fa-edit',
    'sections' => array(

      // blog general section
      array(
        'name'     => 'blog_general_tab',
        'title'    => esc_html__('General', 'brixey'),
        'icon'     => 'fa fa-cog',
        'fields'   => array(

          // Layout
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Layout', 'brixey')
          ),
          array(
            'id'            => 'blog_listing_columns',
            'type'          => 'select',
            'title'         => esc_html__('Blog Listing Columns', 'brixey'),
            'options'       => array(
              'col-md-2'    => esc_html__('6 Columns', 'brixey'),
              'col-brxy-5'  => esc_html__('5 Columns', 'brixey'),
              'col-md-3'    => esc_html__('4 Columns', 'brixey'),
              'col-md-4'    => esc_html__('3 Columns', 'brixey'),
              'col-md-6'    => esc_html__('2 Columns', 'brixey'),
            ),
            'default_option' => 'Select blog column',
            'default' => 'col-md-6',
          ),
          array(
            'id'            => 'blog_column_spacing',
            'type'          => 'select',
            'title'         => esc_html__('Blog List Spacing', 'brixey'),
            'options'       => array(
              'no-spacer'   => esc_html__('No Space', 'brixey'),
              'spacer2'     => esc_html__('Default', 'brixey'),
              'spacer3'     => esc_html__('Mediam', 'brixey'),
              'spacer4'     => esc_html__('Large', 'brixey'),
              'spacer5'     => esc_html__('Extra', 'brixey'),
            ),
            'default' => 'spacer3',
          ),
          array(
            'id'             => 'blog_sidebar_position',
            'type'           => 'select',
            'title'          => esc_html__('Sidebar Position', 'brixey'),
            'options'        => array(
              'right-sidebar' => esc_html__('Right', 'brixey'),
              'left-sidebar' => esc_html__('Left', 'brixey'),
              'hide-sidebar' => esc_html__('Hide', 'brixey'),
            ),
            'default_option' => 'Select sidebar position',
            'help'          => esc_html__('This style will apply, default blog pages - Like : Archive, Category, Tags, Search & Author.', 'brixey'),
            'info'          => esc_html__('Default option : Right', 'brixey'),
            'default' => 'right-sidebar',
          ),
          array(
            'id'             => 'blog_widget',
            'type'           => 'select',
            'title'          => esc_html__('Sidebar Widget', 'brixey'),
            'options'        => brixey_vt_registered_sidebars(),
            'default_option' => esc_html__('Select Widget', 'brixey'),
            'dependency'     => array('blog_sidebar_position', '!=', 'hide-sidebar'),
            'info'          => esc_html__('Default option : Main Widget Area', 'brixey'),
            'default' => 'sidebar-1',
          ),
          array(
            'id'            => 'navigation_type',
            'type'          => 'select',
            'title'         => esc_html__('Pagination Type', 'brixey'),
            'options'       => array(
              'load-more-btn'   => esc_html__('Load More Button', 'brixey'),
              'navigation'   => esc_html__('Navigation', 'brixey'),
            ),
            'default' => 'navigation',
          ),
          // Layout
          // Global Options
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Global Options', 'brixey')
          ),
          array(
            'id'         => 'theme_exclude_categories',
            'type'       => 'checkbox',
            'title'      => esc_html__('Exclude Categories', 'brixey'),
            'info'      => esc_html__('Select categories you want to exclude from blog page.', 'brixey'),
            'options'    => 'categories',
          ),
          array(
            'id'      => 'theme_blog_excerpt',
            'type'    => 'text',
            'title'   => esc_html__('Excerpt Length', 'brixey'),
            'info'   => esc_html__('Blog short content length, in blog listing pages.', 'brixey'),
            'default' => '25',
          ),
          array(
            'id'      => 'theme_metas_hide',
            'type'    => 'checkbox',
            'title'   => esc_html__('Meta\'s to hide', 'brixey'),
            'info'    => esc_html__('Check items you want to hide from blog/post meta field.', 'brixey'),
            'class'      => 'horizontal',
            'options'    => array(
              'category'   => esc_html__('Category', 'brixey'),
              'date'    => esc_html__('Date', 'brixey'),
              'author'     => esc_html__('Author', 'brixey'),
            ),
            // 'default' => '30',
          ),
          // End fields

        )
      ),

      // blog single section
      array(
        'name'     => 'blog_single_tab',
        'title'    => esc_html__('Single', 'brixey'),
        'icon'     => 'fa fa-sticky-note',
        'fields'   => array(

          // Start fields
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Enable / Disable', 'brixey')
          ),
          array(
            'id'    => 'single_featured_image',
            'type'  => 'switcher',
            'title' => esc_html__('Featured Image', 'brixey'),
            'info' => esc_html__('If need to hide featured image from single blog post page, please turn this OFF.', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'single_author_info',
            'type'  => 'switcher',
            'title' => esc_html__('Author Info', 'brixey'),
            'info' => esc_html__('If need to hide author info on single blog page, please turn this OFF.', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'single_share_option',
            'type'  => 'switcher',
            'title' => esc_html__('Share Option', 'brixey'),
            'info' => esc_html__('If need to hide share option on single blog page, please turn this OFF.', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'single_tag_option',
            'type'  => 'switcher',
            'title' => esc_html__('Show Tags', 'brixey'),
            'info' => esc_html__('If need to hide tags on single blog page, please turn this OFF.', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'single_like_button',
            'type'  => 'switcher',
            'title' => esc_html__('Like Button', 'brixey'),
            'info' => esc_html__('If need to hide like button on single blog page, please turn this OFF.', 'brixey'),
            'default' => true,
          ),
          array(
            'id'    => 'single_comment_form',
            'type'  => 'switcher',
            'title' => esc_html__('Comment Area/Form', 'brixey'),
            'info' => esc_html__('If need to hide comment area and that form on single blog page, please turn this OFF.', 'brixey'),
            'default' => true,
          ),

          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Sidebar', 'brixey')
          ),
          array(
            'id'             => 'single_sidebar_position',
            'type'           => 'select',
            'title'          => esc_html__('Sidebar Position', 'brixey'),
            'options'        => array(
              'right-sidebar' => esc_html__('Right', 'brixey'),
              'left-sidebar' => esc_html__('Left', 'brixey'),
              'hide-sidebar' => esc_html__('Hide', 'brixey'),
            ),
            'default_option' => 'Select sidebar position',
            'info'          => esc_html__('Default option : Right', 'brixey'),
            'default' => 'right-sidebar',
          ),
          array(
            'id'             => 'single_blog_widget',
            'type'           => 'select',
            'title'          => esc_html__('Sidebar Widget', 'brixey'),
            'options'        => brixey_vt_registered_sidebars(),
            'default_option' => esc_html__('Select Widget', 'brixey'),
            'dependency'     => array('single_sidebar_position', '!=', 'hide-sidebar'),
            'info'          => esc_html__('Default option : Main Widget Area', 'brixey'),
            'default' => 'sidebar-1',
          ),
          // End fields

        )
      ),

    ),
  );

  // ------------------------------
  // Extra Pages
  // ------------------------------
  $options[]   = array(
    'name'     => 'theme_extra_pages',
    'title'    => esc_html__('Extra Pages', 'brixey'),
    'icon'     => 'fa fa-clone',
    'sections' => array(

      // error 404 page
      array(
        'name'     => 'error_page_section',
        'title'    => esc_html__('404 Page', 'brixey'),
        'icon'     => 'fa fa-exclamation-triangle',
        'fields'   => array(

          // Start 404 Page
          array(
            'id'    => 'error_heading',
            'type'  => 'text',
            'title' => esc_html__('404 Page Heading', 'brixey'),
            'info'  => esc_html__('Enter 404 page heading.', 'brixey'),
          ),
          array(
            'id'    => 'error_page_content',
            'type'  => 'textarea',
            'title' => esc_html__('404 Page Content', 'brixey'),
            'info'  => esc_html__('Enter 404 page content.', 'brixey'),
            'shortcode' => true,
          ),
          array(
            'id'    => 'error_page_bg',
            'type'  => 'image',
            'title' => esc_html__('404 Page Background', 'brixey'),
            'info'  => esc_html__('Choose 404 page background styles.', 'brixey'),
            'add_title' => esc_html__('Add 404 Image', 'brixey'),
          ),
          array(
            'id'    => 'error_btn_text',
            'type'  => 'text',
            'title' => esc_html__('Button Text', 'brixey'),
            'info'  => esc_html__('Enter BACK TO HOME button text. If you want to change it.', 'brixey'),
          ),
          // End 404 Page

        ) // end: fields
      ), // end: fields section

      // maintenance mode page
      array(
        'name'     => 'maintenance_mode_section',
        'title'    => esc_html__('Maintenance Mode', 'brixey'),
        'icon'     => 'fa fa-hourglass-half',
        'fields'   => array(

          // Start Maintenance Mode
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('If you turn this ON : Only Logged in users will see your pages. All other visiters will see, selected page of : <strong>Maintenance Mode Page</strong>', 'brixey')
          ),
          array(
            'id'             => 'enable_maintenance_mode',
            'type'           => 'switcher',
            'title'          => esc_html__('Maintenance Mode', 'brixey'),
            'default'        => false,
          ),
          array(
            'id'             => 'maintenance_mode_page',
            'type'           => 'select',
            'title'          => esc_html__('Maintenance Mode Page', 'brixey'),
            'options'        => 'pages',
            'default_option' => esc_html__('Select a page', 'brixey'),
            'dependency'   => array( 'enable_maintenance_mode', '==', 'true' ),
          ),
          array(
            'id'             => 'maintenance_mode_bg',
            'type'           => 'background',
            'title'          => esc_html__('Page Background', 'brixey'),
            'dependency'   => array( 'enable_maintenance_mode', '==', 'true' ),
          ),
          // End Maintenance Mode

        ) // end: fields
      ), // end: fields section

    )
  );

  // ------------------------------
  // Advanced
  // ------------------------------
  $options[] = array(
    'name'   => 'theme_advanced',
    'title'  => esc_html__('Advanced', 'brixey'),
    'icon'   => 'fa fa-cog'
  );

  // ------------------------------
  // Misc Section
  // ------------------------------
  $options[]   = array(
    'name'     => 'misc_section',
    'title'    => esc_html__('Misc', 'brixey'),
    'icon'     => 'fa fa-recycle',
    'sections' => array(

      // custom sidebar section
      array(
        'name'     => 'custom_sidebar_section',
        'title'    => esc_html__('Custom Sidebar', 'brixey'),
        'icon'     => 'fa fa-reorder',
        'fields'   => array(

          // start fields
          array(
            'id'              => 'custom_sidebar',
            'title'           => esc_html__('Sidebars', 'brixey'),
            'desc'            => esc_html__('Go to Appearance -> Widgets after create sidebars', 'brixey'),
            'type'            => 'group',
            'fields'          => array(
              array(
                'id'          => 'sidebar_name',
                'type'        => 'text',
                'title'       => esc_html__('Sidebar Name', 'brixey'),
              ),
              array(
                'id'          => 'sidebar_desc',
                'type'        => 'text',
                'title'       => esc_html__('Custom Description', 'brixey'),
              )
            ),
            'accordion'       => true,
            'button_title'    => esc_html__('Add New Sidebar', 'brixey'),
            'accordion_title' => esc_html__('New Sidebar', 'brixey'),
          ),
          // end fields

        )
      ),
      // custom sidebar section

      // Custom CSS/JS
      array(
        'name'        => 'custom_css_js_section',
        'title'       => esc_html__('Custom Codes', 'brixey'),
        'icon'        => 'fa fa-code',

        // begin: fields
        'fields'      => array(

          // Start Custom CSS/JS
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Custom CSS', 'brixey')
          ),
          array(
            'id'             => 'theme_custom_css',
            'type'           => 'textarea',
            'attributes' => array(
              'rows'     => 10,
              'placeholder'     => esc_html__('Enter your CSS code here...', 'brixey'),
            ),
          ),

          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Custom JS', 'brixey')
          ),
          array(
            'id'             => 'theme_custom_js',
            'type'           => 'textarea',
            'attributes' => array(
              'rows'     => 10,
              'placeholder'     => esc_html__('Enter your JS code here...', 'brixey'),
            ),
          ),
          // End Custom CSS/JS

        ) // end: fields
      ),

      // Translation
      array(
        'name'        => 'theme_translation_section',
        'title'       => esc_html__('Translation', 'brixey'),
        'icon'        => 'fa fa-language',

        // begin: fields
        'fields'      => array(

          // Start Translation
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Common Texts', 'brixey')
          ),
          array(
            'id'          => 'read_more_text',
            'type'        => 'text',
            'title'       => esc_html__('Read More Text', 'brixey'),
          ),
          array(
            'id'          => 'share_text',
            'type'        => 'text',
            'title'       => esc_html__('Share Text', 'brixey'),
          ),
          array(
            'id'          => 'share_on_text',
            'type'        => 'text',
            'title'       => esc_html__('Share On Tooltip Text', 'brixey'),
          ),
          array(
            'id'          => 'author_text',
            'type'        => 'text',
            'title'       => esc_html__('Author Text', 'brixey'),
          ),
          array(
            'id'          => 'post_comment_text',
            'type'        => 'text',
            'title'       => esc_html__('Post Comment Text [Submit Button]', 'brixey'),
          ),
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Pagination', 'brixey')
          ),
          array(
            'id'          => 'older_post',
            'type'        => 'text',
            'title'       => esc_html__('Older Posts Text', 'brixey'),
          ),
          array(
            'id'          => 'newer_post',
            'type'        => 'text',
            'title'       => esc_html__('Newer Posts Text', 'brixey'),
          ),
          array(
            'id'          => 'load_more_text',
            'type'        => 'text',
            'title'       => esc_html__('Load More Text', 'brixey'),
          ),
          array(
            'id'          => 'blog_all_loaded',
            'type'        => 'text',
            'title'       => esc_html__('Blog All Loaded Text', 'brixey'),
          ),

          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Single Project Pagination', 'brixey')
          ),
          array(
            'id'          => 'prev_port',
            'type'        => 'text',
            'title'       => esc_html__('Prev Project Text', 'brixey'),
          ),
          array(
            'id'          => 'next_port',
            'type'        => 'text',
            'title'       => esc_html__('Next Project Text', 'brixey'),
          ),
          array(
            'id'          => 'more_project_text',
            'type'        => 'text',
            'title'       => esc_html__('More Project Text', 'brixey'),
          ),
          array(
            'id'          => 'all_loaded_text',
            'type'        => 'text',
            'title'       => esc_html__('All Loaded Text', 'brixey'),
          ),
          // End Translation

        ) // end: fields
      ),

    ),
  );

  // ------------------------------
  // backup                       -
  // ------------------------------
  $options[]   = array(
    'name'     => 'backup_section',
    'title'    => 'Backup',
    'icon'     => 'fa fa-shield',
    'fields'   => array(

      array(
        'type'    => 'notice',
        'class'   => 'warning',
        'content' => 'You can save your current options. Download a Backup and Import.',
      ),

      array(
        'type'    => 'backup',
      ),

    )
  );

  return $options;

}
add_filter( 'cs_framework_options', 'brixey_vt_options' );
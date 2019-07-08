<?php
/*
 * All Metabox related options for Brixey theme.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

function brixey_vt_metabox_options( $options ) {

  $options      = array();
  // -----------------------------------------
  // Post Grid Featured Image                    -
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'post_grid_image_metabox',
    'title'     => esc_html__('Grid Featured Image', 'brixey'),
    'post_type' => 'post',
    'context'   => 'side',
    'priority'  => 'default',
    'sections'  => array(

      // All Post Formats
      array(
        'name'   => 'section_post_image',
        'fields' => array(
          array(
            'id'          => 'grid_image',
            'type'        => 'image',
            'add_title'       => esc_html__('Add Grid Featurd Image', 'brixey'),
          ),
          // Gallery

        ),
      ),

    ),
  );

  // -----------------------------------------
  // About Metabox Options                    -
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'project_featured_image_metabox',
    'title'     => esc_html__('Masonry Featured Image', 'brixey'),
    'post_type' => 'project',
    'context'   => 'side',
    'priority'  => 'default',
    'sections'  => array(

      // All Post Formats
      array(
        'name'   => 'section_about_bg',
        'fields' => array(
          array(
            'type'  => 'image',
            'id'    => 'masonry_featured_image',
            'add_title'   => esc_html__('Set Featured Image', 'brixey'),
          ),
          array(
            'id'    => 'item_width',
            'type'  => 'select',
            'title' => esc_html__('Item Width', 'brixey'),
            'options' => array(
                '' => esc_html__('Default', 'brixey'),
                'col-md-1' => esc_html__('8%', 'brixey'),
                'col-md-2' => esc_html__('16%', 'brixey'),
                'col-md-3' => esc_html__('25%', 'brixey'),
                'col-md-4' => esc_html__('33%', 'brixey'),
                'col-md-5' => esc_html__('41%', 'brixey'),
                'col-md-6' => esc_html__('50%', 'brixey'),
                'col-md-7' => esc_html__('58%', 'brixey'),
                'col-md-8' => esc_html__('66%', 'brixey'),
                'col-md-9' => esc_html__('75%', 'brixey'),
                'col-md-10' => esc_html__('83%', 'brixey'),
                'col-md-11' => esc_html__('91%', 'brixey'),
                'col-md-12' => esc_html__('100%', 'brixey'),
              ),
            'default'  => esc_html__('Select', 'brixey'),
          ),
        ),
      ),

    ),
  );

  // -----------------------------------------
  // About Metabox Options                    -
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'about_page_metabox',
    'title'     => esc_html__('About Page Background', 'brixey'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

      // All Post Formats
      array(
        'name'   => 'section_about_bg',
        'fields' => array(
          array(
            'title' => 'Background Image',
            'type'  => 'background',
            'id'    => 'about_page_bg'
          ),
        ),
      ),

    ),
  );

  // -----------------------------------------
  // Post Metabox Options                    -
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'post_type_metabox',
    'title'     => esc_html__('Post Options', 'brixey'),
    'post_type' => 'post',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

      // All Post Formats
      array(
        'name'   => 'section_post_formats',
        'fields' => array(

          // Standard, Image
          array(
            'title' => 'Standard Image',
            'type'  => 'subheading',
            'content' => esc_html__('There is no Extra Option for this Post Format!', 'brixey'),
            'wrap_class' => 'vt-minimal-heading hide-title',
          ),
          array(
            'type'    => 'text',
            'title'   => esc_html__('Add Video URL', 'brixey' ),
            'id'   => 'video_post_format',
            'desc' => esc_html__('Add youtube or vimeo video link', 'brixey' )
          ),
          array(
            'type'    => 'text',
            'title'   => esc_html__('Add Link', 'brixey' ),
            'id'   => 'link_post_format',
          ),
          array(
            'type'    => 'textarea',
            'title'   => esc_html__('Add Quote Text', 'brixey' ),
            'id'   => 'quote_post_format',
          ),
          array(
            'type'    => 'text',
            'title'   => esc_html__('Add Quote Author', 'brixey' ),
            'id'   => 'quote_post_author',
          ),
          array(
            'type'    => 'text',
            'title'   => esc_html__('Add Author URL', 'brixey' ),
            'id'   => 'quote_post_author_url',
          ),
          array(
            'type'    => 'notice',
            'title'   => 'Gallery Format',
            'wrap_class' => 'hide-title',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Gallery Format', 'brixey')
          ),
          array(
            'id'          => 'gallery_post_format',
            'type'        => 'gallery',
            'title'       => esc_html__('Add Gallery', 'brixey'),
            'add_title'   => esc_html__('Add Image(s)', 'brixey'),
            'edit_title'  => esc_html__('Edit Image(s)', 'brixey'),
            'clear_title' => esc_html__('Clear Image(s)', 'brixey'),
          ),
          // Gallery

        ),
      ),

    ),
  );

// -----------------------------------------
// Homepage Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'homepage_layout_metaboxes',
  'title'     => esc_html__('Home Page Meta', 'brixey'),
  'post_type' => array('page'),
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // Title Section
    array(
      'name'  => 'homepage_layout_secrion',
      'title' => esc_html__('Layout', 'brixey'),
      'icon'  => 'fa fa-minus',
      // Fields Start
      'fields' => array(
        array(
          'id'           => 'home_layout',
          'type'         => 'image_select',
          'options'      => array(
            'home_fullscreen'     => BRIXEY_CS_IMAGES .'/home_fullscreen.png',
            'home_info'     => BRIXEY_CS_IMAGES .'/home_info.png',
          ),
          'attributes' => array(
            'data-depend-id' => 'home_layout',
          ),
          'radio'     => true,
          'default'   => 'home_fullscreen',
        ),
        array(
          'id'    => 'slider_style',
          'type'  => 'select',
          'title' => esc_html__('Hero Area Style', 'brixey'),
          'options' => array(
              'slideshow' => esc_html__('Slideshow', 'brixey'),
              'slider' => esc_html__('Slider', 'brixey'),
              'static_video' => esc_html__('Static Video', 'brixey'),
              'static_image' => esc_html__('Static Image', 'brixey'),
              'slider_shortcode' => esc_html__('Shortcode', 'brixey'),
              'hide' => esc_html__('Hide', 'brixey'),
            ),
          'attributes' => array(
            'data-depend-id' => 'slider_style',
          ),
        ),
        array(
          'id'          => 'slider_images',
          'type'        => 'gallery',
          'title'       => esc_html__('Slide Images', 'brixey'),
          'dependency'   => array('slider_style', '==', 'slideshow'),
        ),
        array(
          'id'          => 'slider_shortcdes',
          'type'        => 'textarea',
          'title'       => esc_html__('Shortcode', 'brixey'),
          'desc'       => __('Enter any shortcodes that you want to show in this page slider area. <br />Eg : Revolution Slider shortcode.', 'brixey'),
          'dependency'   => array('slider_style', '==', 'slider_shortcode'),
        ),
        array(
          'id'          => 'static_image',
          'type'        => 'image',
          'title'       => esc_html__('Upload Image', 'brixey'),
          'dependency'   => array('slider_style', '==', 'static_image'),
        ),
        array(
          'id'          => 'static_video',
          'type'        => 'text',
          'title'       => esc_html__('Video', 'brixey'),
          'info'       => esc_html__('Add youtube video ID or URL', 'brixey'),
          'dependency'   => array('slider_style', '==', 'static_video'),
        ),
        array(
          'id'          => 'video_poster',
          'type'        => 'image',
          'title'       => esc_html__('Upload Video Poster', 'brixey'),
          'dependency'   => array('slider_style', '==', 'static_video'),
        ),
        array(
          'id'          => 'static_title',
          'type'        => 'text',
          'title'       => esc_html__('Title', 'brixey'),
          'dependency'   => array('slider_style', 'any', 'static_video,static_image,slideshow'),
        ),
        array(
          'id'          => 'static_subtitle',
          'type'        => 'text',
          'title'       => esc_html__('Sub Title', 'brixey'),
          'dependency'   => array('slider_style', 'any', 'static_video,static_image,slideshow'),
        ),
        array(
          'id'          => 'static_button_txt',
          'type'        => 'text',
          'title'       => esc_html__('Button Text', 'brixey'),
          'dependency'   => array('slider_style', 'any', 'static_video,static_image,slideshow'),
        ),
        array(
          'id'          => 'static_url',
          'type'        => 'text',
          'attributes' => array(
            'placeholder' => esc_html__('http://', 'brixey'),
          ),
          'title'       => esc_html__('Button URL', 'brixey'),
          'dependency'   => array('slider_style', 'any', 'static_video,static_image,slideshow'),
        ),
        // start fields
        array(
          'id'              => 'home_images',
          'title'           => esc_html__('Homepage Banner Images', 'brixey'),
          'desc'            => esc_html__('Each group is each gallery image', 'brixey'),
          'type'            => 'group',
          'fields'          => array(
            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => esc_html__('Image Title', 'brixey'),
            ),
            array(
              'id'          => 'gallery_image',
              'type'        => 'image',
              'title'       => esc_html__('Upload Image', 'brixey'),
            ),
            array(
              'id'          => 'button_txt',
              'type'        => 'text',
              'title'       => esc_html__('Button Text', 'brixey'),
            ),
            array(
              'id'          => 'project_url',
              'type'        => 'text',
              'title'       => esc_html__('Project URL', 'brixey'),
              'attributes' => array(
                'placeholder' => esc_html__('http://', 'brixey'),
              ),
            ),
            array(
              'id'           => 'subtitle',
              'type'         => 'textarea',
              'title' => esc_html__('Subtitle', 'brixey'),
              'info'      => esc_html__('You can use multiple value by pressing "Enter"', 'brixey'),
            ),
            array(
              'id'           => 'subtitle_url',
              'type'         => 'textarea',
              'title' => esc_html__('Subtitle URL', 'brixey'),
              'info'      => esc_html__('You can use multiple value by pressing "Enter". Confirm the equality of subtitle and url. If you do not want to use just leave it. ', 'brixey'),
            ),
          ),
          'accordion'       => true,
          'button_title'    => esc_html__('Add New Image', 'brixey'),
          'accordion_title' => esc_html__('New Image', 'brixey'),
          'dependency'   => array('slider_style', '==', 'slider'),
        ),
        // end fields
      ), // End : Fields
    ), // Title Section
  ),
);

 // -----------------------------------------
  // Project Metabox Options                    -
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'project_layout_metabox',
    'title'     => esc_html__('Project Options', 'brixey'),
    'post_type' => array('project'),
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
      // Header
      array(
        'name'  => 'project_layout_section',
        'title' => esc_html__('Layout', 'brixey'),
        'icon'  => 'fa fa-bars',
        'fields' => array(

          array(
            'id'           => 'select_project_layout',
            'type'         => 'image_select',
            'options'      => array(
              'contained_gallery'     => BRIXEY_CS_IMAGES .'/contained_gallery.png',
              'carousel_fullscreen'   => BRIXEY_CS_IMAGES .'/carousel_fullscreen.png',
              'fullscreen_slider'     => BRIXEY_CS_IMAGES .'/fullscreen_slider.png',
              'fullscreen_stack'      => BRIXEY_CS_IMAGES .'/fullscreen_stack.png',
              'fullscreen_video'      => BRIXEY_CS_IMAGES .'/fullscreen_video.png',
              'grid_sidebar'          => BRIXEY_CS_IMAGES .'/grid_sidebar.png',
              'parallax'              => BRIXEY_CS_IMAGES .'/parallax.png',
              'slider_sidebar'        => BRIXEY_CS_IMAGES .'/slider_sidebar.png',
              'carousel_sidebar'      => BRIXEY_CS_IMAGES .'/carousel_sidebar.png',
              'vertical_stack'        => BRIXEY_CS_IMAGES .'/vertical_stack.png',
              'custom_design'         => BRIXEY_CS_IMAGES .'/custom_project.png',
            ),
            'default'   => 'custom_design',
            'attributes' => array(
              'data-depend-id' => 'project_layout_section',
            ),
            'radio'     => true,
            'info'      => esc_html__('Select your project layout design, following options will may differ based on your selection of project design.', 'brixey'),
          ),
          array(
            'id'    => 'background_image',
            'type'  => 'image',
            'title' => esc_html__('Background Image', 'brixey'),
            'info' => esc_html__('Upload Image for title background', 'brixey'),
            'dependency' => array('project_layout_section', 'any', 'custom_design,parallax'),
          ),
          array(
            'id'           => 'button_class',
            'type'         => 'text',
            'title' => esc_html__('Button Class or ID', 'brixey'),
            'info'      => esc_html__('If you want to show animation button, pease add targeted section ID or class for animation scroll ', 'brixey'),
            'dependency' => array('project_layout_section', 'any', 'custom_design,parallax'),
          ),
          array(
            'id'           => 'title_area_style',
            'type'         => 'select',
            'title' => esc_html__('Title Area Style', 'brixey'),
            'options'      => array(
              ''     => esc_html__('Normal', 'brixey'),
              'style3'     => esc_html__('Fullscreen', 'brixey'),
              'style2'     => esc_html__('Containd', 'brixey'),
              'hide'     => esc_html__('Hide', 'brixey'),
            ),
            'attributes' => array(
              'data-depend-id' => 'title_area_style',
            ),
            'info'      => esc_html__('Select custom project title area design', 'brixey'),
            'dependency' => array('project_layout_section', 'any', 'custom_design,parallax'),
          ),
          array(
            'id'              => 'subtitles',
            'title'           => esc_html__('Subtitle', 'brixey'),
            'desc'            => esc_html__('Add multiple subtitle, if you want to show.', 'brixey'),
            'type'            => 'group',
            'fields'          => array(

              array(
                'id'           => 'subtitle',
                'type'         => 'text',
                'title' => esc_html__('Subtitle', 'brixey'),
              ),
              array(
                'id'           => 'subtitle_url',
                'type'         => 'text',
                'title' => esc_html__('Subtitle URL', 'brixey'),
              ),

            ),
            'accordion'       => true,
            'button_title'    => esc_html__('Add subtitle', 'brixey'),
            'accordion_title' => esc_html__('New subtitle', 'brixey'),
            'dependency' => array('project_layout_section', 'any', 'custom_design,parallax'),
          ), //
          array(
            'id'           => 'descriptio_area_style',
            'type'         => 'select',
            'title' => esc_html__('Title Area Style', 'brixey'),
            'options'      => array(
              'column'     => esc_html__('Column', 'brixey'),
              'fullwidth'     => esc_html__('Fullwidth', 'brixey'),
            ),
            'attributes' => array(
              'data-depend-id' => 'descriptio_area_style',
            ),
            'info'      => esc_html__('Select custom project description area design', 'brixey'),
            'dependency' => array('project_layout_section', 'any', 'custom_design,parallax'),
          ),
        ),
      ),
      // Header

      array(
        'name'  => 'project_image_section',
        'title' => esc_html__('Project Images', 'brixey'),
        'icon'  => 'fa fa-info',
        'fields' => array(
          array(
            'id'              => 'project_images',
            'title'           => esc_html__('Images', 'brixey'),
            'desc'            => esc_html__('Each group is about each single image', 'brixey'),
            'type'            => 'group',
            'fields'          => array(
              array(
                'id'          => 'image',
                'type'        => 'image',
                'title'       => esc_html__('Upload Image', 'brixey'),
              ),
              array(
                'id'          => 'large_image_url',
                'type'        => 'text',
                'title'       => esc_html__('Large Image URL', 'brixey'),
                'attributes' => array(
                  'placeholder' => esc_html__('http://', 'brixey'),
                ),
              ),
              array(
                'id'          => 'video_url',
                'type'        => 'text',
                'title'       => esc_html__('Video URL', 'brixey'),
                'info'       => esc_html__('Add video url to show on popup', 'brixey'),
                'attributes' => array(
                  'placeholder' => esc_html__('http://', 'brixey'),
                ),
              ),
              array(
                'id'          => 'parallax_speed',
                'type'        => 'number',
                'title'       => esc_html__('Parallax Speed', 'brixey'),
                'info'       => esc_html__('Use number and decimal value. (Do not use px, em or other characters', 'brixey'),
              ),
              array(
              'id'    => 'item_width',
              'type'  => 'select',
              'default'  => 'col-md-7',
              'title' => esc_html__('Image Width', 'brixey'),
              'options' => array(
                'col-md-1' => esc_html__('8%', 'brixey'),
                'col-md-2' => esc_html__('16%', 'brixey'),
                'col-md-3' => esc_html__('25%', 'brixey'),
                'col-md-4' => esc_html__('33%', 'brixey'),
                'col-md-5' => esc_html__('41%', 'brixey'),
                'col-md-6' => esc_html__('50%', 'brixey'),
                'col-md-7' => esc_html__('58%', 'brixey'),
                'col-md-8' => esc_html__('66%', 'brixey'),
                'col-md-9' => esc_html__('75%', 'brixey'),
                'col-md-10' => esc_html__('83%', 'brixey'),
                'col-md-11' => esc_html__('91%', 'brixey'),
                'col-md-12' => esc_html__('100%', 'brixey'),
                ),
            ),
            ),
            'accordion'       => true,
            'button_title'    => esc_html__('Add Image', 'brixey'),
            'accordion_title' => esc_html__('New Image', 'brixey'),
            'dependency' => array('project_layout_section', '!=', 'fullscreen_video'),
          ), // information meta
          array(
            'id'           => 'video_url',
            'type'         => 'text',
            'title' => esc_html__('Add video', 'brixey'),
            'add_title'   => esc_html__('Add youtube video', 'brixey'),
            'info'   => esc_html__('Add youtube video ID or URL', 'brixey'),
            'dependency' => array('project_layout_section', '==', 'fullscreen_video'),
          ),
          array(
            'id'           => 'video_cover',
            'type'         => 'image',
            'title' => esc_html__('Add video cover', 'brixey'),
            'add_title'   => esc_html__('Add Image', 'brixey'),
            'dependency' => array('project_layout_section', '==', 'fullscreen_video'),
          ),

        ),
      ),

      array(
        'name'  => 'project_information_section',
        'title' => esc_html__('Project Info', 'brixey'),
        'icon'  => 'fa fa-info',
        'fields' => array(
          array(
            'id'           => 'project_details_title',
            'type'         => 'text',
            'title' => esc_html__('Project Details Title', 'brixey'),
            'info'      => esc_html__('This title will show above the project details area', 'brixey'),
          ),
          array(
            'id'           => 'project_description',
            'type'         => 'wysiwyg',
            'title' => esc_html__('Project Description', 'brixey'),
            'info'      => esc_html__('Select custom project description area design', 'brixey'),
          ),
          array(
            'id'           => 'project_url',
            'type'         => 'text',
            'title' => esc_html__('Project URL', 'brixey'),
            'info'      => esc_html__('Please add project url', 'brixey'),
          ),
          array(
            'id'              => 'project_information',
            'title'           => esc_html__('Information', 'brixey'),
            'desc'            => esc_html__('Each group is each meta info', 'brixey'),
            'type'            => 'group',
            'fields'          => array(
              array(
                'id'          => 'title',
                'type'        => 'text',
                'title'       => esc_html__('Meta Title', 'brixey'),
              ),
              array(
                'id'          => 'meta_info',
                'type'        => 'textarea',
                'title'       => esc_html__('Info', 'brixey'),
                'info'       => esc_html__('Type multiple information by separting "Enter"', 'brixey'),
              ),
              array(
                'id'          => 'info_url',
                'type'        => 'textarea',
                'title'       => esc_html__('Info URL', 'brixey'),
                'attributes' => array(
                  'placeholder' => esc_html__('http://', 'brixey'),
                ),
                'info'       => esc_html__('Type multiple information by separting "Enter" (Make equality of info and url). If you want to keep blank any info, just keep blank enter', 'brixey'),
              )
            ),
            'accordion'       => true,
            'button_title'    => esc_html__('Add New Info', 'brixey'),
            'accordion_title' => esc_html__('New Info', 'brixey'),
          ), // information meta

        ),
      ),

      array(
        'name'  => 'project_hide_show_section',
        'title' => esc_html__('Enable & Disable', 'brixey'),
        'icon'  => 'fa fa-toggle-on',
        'fields' => array(

          array(
            'id'    => 'hide_control',
            'type'  => 'switcher',
            'title' => esc_html__('Hide Next Prev Pagination?', 'brixey'),
            'label' => esc_html__('Yes, Please do it.', 'brixey'),
          ),
          array(
            'id'    => 'hide_zoom_icon',
            'type'  => 'switcher',
            'title' => esc_html__('Hide Zoom Icon?', 'brixey'),
            'label' => esc_html__('Yes, Please do it.', 'brixey'),
            'dependency' => array('project_layout_section', 'any', 'carousel_fullscreen,fullscreen_slider,fullscreen_stack,slider_sidebar,carousel_sidebar,grid_sidebar'),
          ),

        ),
      ),
      // Enable & Disable

    ),
  );

  // -----------------------------------------
  // Page Metabox Options                    -
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'page_type_metabox',
    'title'     => esc_html__('Page Custom Options', 'brixey'),
    'post_type' => array('post', 'project', 'page'),
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
      // Header
      array(
        'name'  => 'header_section',
        'title' => esc_html__('Header', 'brixey'),
        'icon'  => 'fa fa-bars',
        'fields' => array(

          array(
            'id'           => 'select_header_design',
            'type'         => 'image_select',
            'title'        => esc_html__('Select Menu Style', 'brixey'),
            'options'      => array(
              'default'     => BRIXEY_CS_IMAGES .'/hs-0.png',
              'style_one'   => BRIXEY_CS_IMAGES .'/hs-1.png',
              'style_two'   => BRIXEY_CS_IMAGES .'/hs-2.png',
              'overlay_menu'   => BRIXEY_CS_IMAGES .'/hs-3.png',
            ),
            'attributes' => array(
              'data-depend-id' => 'header_design',
            ),
            'radio'     => true,
            'default'   => 'default',
            'info'      => esc_html__('Select your main menu style.', 'brixey'),
          ),
          array(
            'id'             => 'choose_menu',
            'type'           => 'select',
            'title'          => esc_html__('Choose Menu', 'brixey'),
            'desc'          => esc_html__('Choose custom menus for this page.', 'brixey'),
            'options'        => 'menus',
            'default_option' => esc_html__('Select your menu', 'brixey'),
          ),
          // Enable & Disable
          array(
            'type'    => 'notice',
            'class'   => 'info cs-vt-heading',
            'content' => esc_html__('Enable & Disable', 'brixey'),
            'dependency' => array('header_design', '!=', 'default'),
          ),
          array(
            'id'    => 'sticky_header',
            'type'  => 'switcher',
            'title' => esc_html__('Sticky Header', 'brixey'),
            'info' => esc_html__('Turn On if you want your naviagtion bar on sticky.', 'brixey'),
            'default' => true,
            'dependency' => array('header_design', '!=', 'default'),
          ),
          array(
            'id'    => 'transparent_header',
            'type'  => 'switcher',
            'title' => esc_html__('Transparent Header?', 'brixey'),
            'default' => false,
          ),

        ),
      ),
      // Header

      // Banner & Title Area
      array(
        'name'  => 'banner_title_section',
        'title' => esc_html__('Banner & Title Area', 'brixey'),
        'icon'  => 'fa fa-bullhorn',
        'fields' => array(

          array(
            'id'        => 'banner_type',
            'type'      => 'select',
            'title'     => esc_html__('Choose Banner Type', 'brixey'),
            'options'   => array(
              'default-title'    => 'Default Title',
              'revolution-slider' => 'Shortcode [Rev Slider]',
              'hide-title-area'   => 'Hide Title/Banner Area',
            ),
          ),
          array(
            'id'    => 'page_revslider',
            'type'  => 'textarea',
            'title' => esc_html__('Revolution Slider or Any Shortcodes', 'brixey'),
            'desc' => __('Enter any shortcodes that you want to show in this page title area. <br />Eg : Revolution Slider shortcode.', 'brixey'),
            'attributes' => array(
              'placeholder' => esc_html__('Enter your shortcode...', 'brixey'),
            ),
            'dependency'   => array('banner_type', '==', 'revolution-slider'),
          ),
          array(
            'id'    => 'page_custom_title',
            'type'  => 'textarea',
            'title' => esc_html__('Custom Title', 'brixey'),
            'attributes' => array(
              'placeholder' => esc_html__('Enter your custom title...', 'brixey'),
            ),
            'dependency'   => array('banner_type', '==', 'default-title'),
          ),
          array(
            'id'    => 'page_custom_sub_title',
            'type'  => 'text',
            'title' => esc_html__('Sub Title', 'brixey'),
            'attributes' => array(
              'placeholder' => esc_html__('Enter page sub-title...', 'brixey'),
            ),
            'dependency'   => array('banner_type', '==', 'default-title'),
          ),
          array(
            'id'        => 'title_area_spacings',
            'type'      => 'select',
            'title'     => esc_html__('Title Area Spacings', 'brixey'),
            'options'   => array(
              'default-spacing' => esc_html__('Default Spacing', 'brixey'),
              'padding-xs' => esc_html__('Extra Small Padding', 'brixey'),
              'padding-sm' => esc_html__('Small Padding', 'brixey'),
              'padding-md' => esc_html__('Medium Padding', 'brixey'),
              'padding-lg' => esc_html__('Large Padding', 'brixey'),
              'padding-xl' => esc_html__('Extra Large Padding', 'brixey'),
              'padding-no' => esc_html__('No Padding', 'brixey'),
              'padding-custom' => esc_html__('Custom Padding', 'brixey'),
            ),
            'dependency'   => array('banner_type', '==', 'default-title'),
          ),
          array(
            'id'    => 'title_top_spacings',
            'type'  => 'text',
            'title' => esc_html__('Top Spacing', 'brixey'),
            'attributes'  => array( 'placeholder' => '100px' ),
            'dependency'  => array('banner_type|title_area_spacings', '==|==', 'default-title|padding-custom'),
          ),
          array(
            'id'    => 'title_bottom_spacings',
            'type'  => 'text',
            'title' => esc_html__('Bottom Spacing', 'brixey'),
            'attributes'  => array( 'placeholder' => '100px' ),
            'dependency'  => array('banner_type|title_area_spacings', '==|==', 'default-title|padding-custom'),
          ),

        ),
      ),
      // Banner & Title Area

      // Content Section
      array(
        'name'  => 'page_content_options',
        'title' => esc_html__('Content Options', 'brixey'),
        'icon'  => 'fa fa-file',

        'fields' => array(

          array(
            'id'        => 'content_spacings',
            'type'      => 'select',
            'title'     => esc_html__('Content Spacings', 'brixey'),
            'options'   => array(
              'padding-none' => esc_html__('Default Spacing', 'brixey'),
              'padding-xs' => esc_html__('Extra Small Padding', 'brixey'),
              'padding-sm' => esc_html__('Small Padding', 'brixey'),
              'padding-md' => esc_html__('Medium Padding', 'brixey'),
              'padding-lg' => esc_html__('Large Padding', 'brixey'),
              'padding-xl' => esc_html__('Extra Large Padding', 'brixey'),
              'padding-cnt-no' => esc_html__('No Padding', 'brixey'),
              'padding-custom' => esc_html__('Custom Padding', 'brixey'),
            ),
            'desc' => esc_html__('Content area top and bottom spacings.', 'brixey'),
          ),
          array(
            'id'    => 'content_top_spacings',
            'type'  => 'text',
            'title' => esc_html__('Top Spacing', 'brixey'),
            'attributes'  => array( 'placeholder' => '100px' ),
            'dependency'  => array('content_spacings', '==', 'padding-custom'),
          ),
          array(
            'id'    => 'content_bottom_spacings',
            'type'  => 'text',
            'title' => esc_html__('Bottom Spacing', 'brixey'),
            'attributes'  => array( 'placeholder' => '100px' ),
            'dependency'  => array('content_spacings', '==', 'padding-custom'),
          ),

        ), // End Fields
      ), // Content Section

      // Enable & Disable
      array(
        'name'  => 'hide_show_section',
        'title' => esc_html__('Enable & Disable', 'brixey'),
        'icon'  => 'fa fa-toggle-on',
        'fields' => array(

          array(
            'id'    => 'hide_header',
            'type'  => 'switcher',
            'title' => esc_html__('Hide Header', 'brixey'),
            'label' => esc_html__('Yes, Please do it.', 'brixey'),
          ),
          array(
            'id'    => 'hide_footer',
            'type'  => 'switcher',
            'title' => esc_html__('Hide Footer', 'brixey'),
            'label' => esc_html__('Yes, Please do it.', 'brixey'),
          ),
          array(
            'id'        => 'copyright_layout',
            'type'      => 'select',
            'title'     => esc_html__('Copyright Layout', 'brixey'),
            'options'   => array(
              '' => esc_html__('Default', 'brixey'),
              'contained' => esc_html__('Contained', 'brixey'),
              'fullwidth' => esc_html__('Fullwidth', 'brixey'),
            ),
            'dependency'  => array('hide_footer', '!=', 'true'),
          ),
        ),
      ),
      // Enable & Disable

    ),
  );

  // -----------------------------------------
  // Page Layout
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'page_layout_options',
    'title'     => esc_html__('Page Layout', 'brixey'),
    'post_type' => array( 'page', 'post' ),
    'context'   => 'side',
    'priority'  => 'default',
    'sections'  => array(

      array(
        'name'   => 'page_layout_section',
        'fields' => array(

          array(
            'id'        => 'page_layout',
            'type'      => 'image_select',
            'options'   => array(
              'full-width'    => BRIXEY_CS_IMAGES . '/page-1.png',
              'extra-width'   => BRIXEY_CS_IMAGES . '/page-2.png',
              'left-sidebar'  => BRIXEY_CS_IMAGES . '/page-3.png',
              'right-sidebar' => BRIXEY_CS_IMAGES . '/page-4.png',
              'window-fit'    => BRIXEY_CS_IMAGES . '/window-fit.png',
            ),
            'default'   => 'full-width',
            'attributes' => array(
              'data-depend-id' => 'page_layout',
            ),
            'radio'      => false,
            'wrap_class' => 'text-center',
          ),
          array(
            'id'            => 'page_sidebar_widget',
            'type'           => 'select',
            'title'          => esc_html__('Sidebar Widget', 'brixey'),
            'options'        => brixey_vt_registered_sidebars(),
            'default_option' => esc_html__('Select Widget', 'brixey'),
            'dependency'   => array('page_layout', 'any', 'left-sidebar,right-sidebar'),
          ),

        ),
      ),

    ),
  );

  // -----------------------------------------
  // Testimonial
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'testimonial_options',
    'title'     => esc_html__('Testimonial Client', 'brixey'),
    'post_type' => 'testimonial',
    'context'   => 'side',
    'priority'  => 'default',
    'sections'  => array(

      array(
        'name'   => 'testimonial_option_section',
        'fields' => array(

          array(
            'id'      => 'testi_name',
            'type'    => 'text',
            'title'   => esc_html__('Name', 'brixey'),
            'info'    => esc_html__('Enter client name', 'brixey'),
          ),
          array(
            'id'      => 'testi_name_link',
            'type'    => 'text',
            'title'   => esc_html__('Name Link', 'brixey'),
            'info'    => esc_html__('Enter client name link, if you want', 'brixey'),
          ),
          array(
            'id'      => 'testi_pro',
            'type'    => 'text',
            'title'   => esc_html__('Profession', 'brixey'),
            'info'    => esc_html__('Enter client profession', 'brixey'),
          ),
        ),
      ),

    ),
  );

  // -----------------------------------------
  // Team
  // -----------------------------------------
  $options[]    = array(
    'id'        => 'team_options',
    'title'     => esc_html__('Team Meta', 'brixey'),
    'post_type' => 'team',
    'context'   => 'side',
    'priority'  => 'default',
    'sections'  => array(
      array(
        'name'   => 'team_option_section',
        'fields' => array(
          array(
            'title'   => esc_html__('Member Name', 'brixey'),
            'id'      => 'employee_name',
            'type'    => 'text',
          ),
          array(
            'title'   => esc_html__('URL', 'brixey'),
            'id'      => 'employee_url',
            'type'    => 'text',
            'attributes' => array(
              'placeholder' => 'http://',
            ),
          ),
          array(
            'title'   => esc_html__('Job Position', 'brixey'),
            'id'      => 'team_job_position',
            'type'    => 'text',
            'attributes' => array(
              'placeholder' => esc_html__('Eg : Financial Manager', 'brixey'),
            ),
            'info'    => esc_html__('Enter the job position, in your company.', 'brixey'),
          ),
          array(
            'title'   => esc_html__('Contribution as a-', 'brixey'),
            'id'      => 'team_contribution',
            'type'    => 'text',
            'attributes' => array(
              'placeholder' => esc_html__('Eg : Partner', 'brixey'),
            ),
            'info'    => esc_html__('Enter team member company contribution type.', 'brixey'),
          ),
          // Start fields
          array(
            'id'                  => 'team_socials',
            'type'                => 'group',
            'fields'              => array(
              array(
                'id'              => 'team_social_icon',
                'type'            => 'icon',
                'title'           => esc_html__('Social Icon', 'brixey'),
              ),
              array(
                'id'              => 'team_social_link',
                'type'            => 'text',
                'title'           => esc_html__('URL', 'brixey'),
              ),
            ),
            'button_title'        => esc_html__('Add Social Icon', 'brixey'),
            'accordion_title'     => esc_html__('Social Icons', 'brixey'),
          ),
        ),
      ),
    ),
  );

  return $options;

}
add_filter( 'cs_metabox_options', 'brixey_vt_metabox_options' );
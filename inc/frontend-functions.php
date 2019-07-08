<?php
/*
 * All Front-End Helper Functions
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
/* Exclude category from blog */
if( ! function_exists( 'brixey_vt_excludeCat' ) ) {
  function brixey_vt_excludeCat($query) {
  	if ( $query->is_home ) {
  		$exclude_cat_ids = cs_get_option('theme_exclude_categories');
  		if($exclude_cat_ids) {
  			foreach( $exclude_cat_ids as $exclude_cat_id ) {
  				$exclude_from_blog[] = '-'. $exclude_cat_id;
  			}
  			$query->set('cat', implode(',', $exclude_from_blog));
  		}
  	}
  	return $query;
  }
  add_filter('pre_get_posts', 'brixey_vt_excludeCat');
}

/* Excerpt Length */
class BrixeyExcerpt {

  // Default length (by WordPress)
  public static $length = 55;

  // Output: brixey_excerpt('short');
  public static $types = array(
    'short' => 25,
    'regular' => 55,
    'long' => 100
  );

  /**
   * Sets the length for the excerpt,
   * then it adds the WP filter
   * And automatically calls the_excerpt();
   *
   * @param string $new_length
   * @return void
   * @author Baylor Rae'
   */
  public static function length($new_length = 55) {
    BrixeyExcerpt::$length = $new_length;
    add_filter('excerpt_length', 'BrixeyExcerpt::new_length');
    BrixeyExcerpt::output();
  }

  // Tells WP the new length
  public static function new_length() {
    if( isset(BrixeyExcerpt::$types[BrixeyExcerpt::$length]) )
      return BrixeyExcerpt::$types[BrixeyExcerpt::$length];
    else
      return BrixeyExcerpt::$length;
  }

  // Echoes out the excerpt
  public static function output() {
    the_excerpt();
  }

}

// Custom Excerpt Length
if( ! function_exists( 'brixey_excerpt' ) ) {
  function brixey_excerpt($length = 55) {
    BrixeyExcerpt::length($length);
  }
}

if ( ! function_exists( 'brixey_new_excerpt_more' ) ) {
  function brixey_new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'brixey_new_excerpt_more');
}

/* Tag Cloud Widget - Remove Inline Font Size */
if( ! function_exists( 'brixey_vt_tag_cloud' ) ) {
  function brixey_vt_tag_cloud($tag_string){
    return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
  }
  // add_filter('wp_generate_tag_cloud', 'brixey_vt_tag_cloud', 10, 3);
}

/* Password Form */
if( ! function_exists( 'brixey_vt_password_form' ) ) {
  function brixey_vt_password_form( $output ) {
    $output = str_replace( 'type="submit"', 'type="submit" class=""', $output );
    return $output;
  }
  add_filter('the_password_form' , 'brixey_vt_password_form');
}

/* Maintenance Mode */
if( ! function_exists( 'brixey_vt_maintenance_mode' ) ) {
  function brixey_vt_maintenance_mode(){

    $maintenance_mode_page = cs_get_option( 'maintenance_mode_page' );
    $enable_maintenance_mode = cs_get_option( 'enable_maintenance_mode' );

    if ( isset($enable_maintenance_mode) && ! empty( $maintenance_mode_page ) && ! is_user_logged_in() ) {
      get_template_part('layouts/post/content', 'maintenance');
      exit;
    }

  }
  add_action( 'wp', 'brixey_vt_maintenance_mode', 1 );
}

/* Widget Layouts */
if ( ! function_exists( 'brixey_vt_footer_widgets' ) ) {
  function brixey_vt_footer_widgets() {

    $output = '';
    $footer_widget_layout = cs_get_option('footer_widget_layout');

    if( $footer_widget_layout ) {

      switch ( $footer_widget_layout ) {
        case 1: $widget = array('piece' => 1, 'class' => 'col-md-12'); break;
        case 2: $widget = array('piece' => 2, 'class' => 'col-md-6'); break;
        case 3: $widget = array('piece' => 3, 'class' => 'col-md-4'); break;
        case 4: $widget = array('piece' => 4, 'class' => 'col-md-3 col-sm-3'); break;
        case 5: $widget = array('piece' => 3, 'class' => 'col-md-3', 'layout' => 'col-md-6', 'queue' => 1); break;
        case 6: $widget = array('piece' => 3, 'class' => 'col-md-3', 'layout' => 'col-md-6', 'queue' => 2); break;
        case 7: $widget = array('piece' => 3, 'class' => 'col-md-3', 'layout' => 'col-md-6', 'queue' => 3); break;
        case 8: $widget = array('piece' => 4, 'class' => 'col-md-2', 'layout' => 'col-md-6', 'queue' => 1); break;
        case 9: $widget = array('piece' => 4, 'class' => 'col-md-2', 'layout' => 'col-md-6', 'queue' => 4); break;
        default : $widget = array('piece' => 4, 'class' => 'col-md-3'); break;
      }

      for( $i = 1; $i < $widget["piece"]+1; $i++ ) {

        $widget_class = ( isset( $widget["queue"] ) && $widget["queue"] == $i ) ? $widget["layout"] : $widget["class"];

        $output .= '<div class="'. $widget_class .'">';
        ob_start();
        if (is_active_sidebar('footer-'. $i)) {
          dynamic_sidebar( 'footer-'. $i );
        }
        $output .= ob_get_clean();
        $output .= '</div>';

      }
    }

    return $output;

  }
}

/* WP Link Pages */
if ( ! function_exists( 'brixey_wp_link_pages' ) ) {
  function brixey_wp_link_pages() {
    $defaults = array(
      'before'           => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'brixey' ) . '</span>',
      'after'            => '</div>',
      'link_before'      => '<span>',
      'link_after'       => '</span>',
      'next_or_number'   => 'number',
      'separator'        => ' ',
      'pagelink'         => '%',
      'echo'             => 1
    );
    wp_link_pages( $defaults );
  }
}

/* Metas */
if ( ! function_exists( 'brixey_post_metas' ) ) {
  function brixey_post_metas() {
  $metas_hide = (array) cs_get_option( 'theme_metas_hide' );
  ?>
  <div class="post-date">
    <?php
    if ( !in_array( 'category', $metas_hide ) ) { // Category Hide
      if ( get_post_type() === 'post') {
        $category_list = get_the_category_list( ', ' );
        if ( $category_list ) {
          echo $category_list;
        }
      }
    } // Category Hides
    if ( !in_array( 'date', $metas_hide ) ) { // Date Hide
    ?>
      <span><?php echo get_the_date('M d, Y'); ?></span>
    <?php } // Date Hides
    if ( !in_array( 'author', $metas_hide ) ) { // Author Hide
    ?>
      <?php
      printf(
        '<span>'. esc_html__('by','brixey') .' <a href="%1$s" rel="author">%2$s</a></span>',
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        get_the_author()
      );
      ?>
    <?php } ?>
  </div>
  <?php
  }
}

/* Share Options */
if ( ! function_exists( 'brixey_wp_share_option' ) ) {
  function brixey_wp_share_option() {

    global $post;
    $page_url = get_permalink($post->ID );
    $media_url =  get_the_post_thumbnail_url();
    $title = $post->post_title;
    $share_text = cs_get_option('share_text');
    $share_text = $share_text ? $share_text : esc_html__( 'Share', 'brixey' );
    $share_on_text = cs_get_option('share_on_text');
    $share_on_text = $share_on_text ? $share_on_text : esc_html__( 'Share On', 'brixey' );
    ?>
    <p style="line-height: 1.65;"><?php echo esc_attr($share_text); ?>:</p>
    <ul>
      <li class="active">
        <a href="//www.facebook.com/sharer/sharer.php?u=<?php print(urlencode($page_url)); ?>&amp;t=<?php print(urlencode($title)); ?>"><i class="fa fa-facebook-official"  aria-hidden="true"></i></a>
      </li>
      <li class="active">
        <a href="//twitter.com/home?status=<?php print(urlencode($title)); ?>+<?php print(urlencode($page_url)); ?>" class="icon-fa-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      </li>
      <li class="active">
        <a href="http://pinterest.com/pin/create/button/?url=<?php print(urlencode($page_url)); ?>&amp;media=<?php print(urlencode($media_url)); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
      </li>
      <li class="active">
        <a href="//plus.google.com/share?url=<?php print(urlencode($page_url)); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="//www.linkedin.com/shareArticle?mini=true&amp;url=<?php print(urlencode($page_url)); ?>&amp;title=<?php print(urlencode($title)); ?>" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="mailto:?subject=<?php print(urlencode($title)); ?>&amp;body=<?php print(urlencode($page_url)); ?>" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
      </li>
    </ul>
    <div class="load-social"><a href="javascript:void(0);"><i class="fa fa-plus-square" aria-hidden="true"></i></a></div>
<?php
  }
}

/* Author Info */
if ( ! function_exists( 'brixey_author_info' ) ) {
  function brixey_author_info() {

    if (get_the_author_meta( 'url' )) {
      $author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
      $website_url = get_the_author_meta( 'url' );
      $target = 'target="_blank"';
    } else {
      $author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
      $website_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
      $target = '';
    }

    // variables
    $author_text = cs_get_option('author_text');
    $author_text = $author_text ? $author_text : esc_html__( 'Author', 'brixey' );
    $author_content = get_the_author_meta( 'description' );
    $facebook = get_the_author_meta( 'facebook' );
    $twitter = get_the_author_meta( 'twitter' );
    $google_plus = get_the_author_meta( 'google_plus' );
    $linkedin = get_the_author_meta( 'linkedin' );
    $pinterest = get_the_author_meta( 'pinterest' );
    if ($author_content) {
?>
      <div class="brxy-author">
        <div class="author-avatar">
          <a href="<?php echo esc_url($website_url); ?>" <?php echo esc_attr($target); ?>>
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>
          </a>
        </div>
        <div class="author-content">
          <a href="<?php echo esc_url($author_url); ?>" class="author-name"><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name'); ?> <span><?php echo esc_attr($author_text); ?></span></a>
          <p style="line-height: 1.5;"><?php echo get_the_author_meta( 'description' ); ?></p>
            <?php
              if( $facebook || $twitter || $google_plus || $linkedin ){
                echo '<div class="author-social">';
                  if($facebook){
                    echo '<a href="'.esc_url($facebook).'"><i class="fa fa-facebook"></i></a>';
                  }
                  if($twitter){
                    echo '<a href="'.esc_url($twitter).'"><i class="fa fa-twitter"></i></a>';
                  }
                  if($google_plus){
                    echo '<a href="'.esc_url($google_plus).'"><i class="fa fa-google-plus"></i></a>';
                  }
                  if($linkedin){
                    echo '<a href="'.esc_url($linkedin).'"><i class="fa fa-linkedin"></i></a>';
                  }
                  if($pinterest){
                    echo '<a href="'.esc_url($pinterest).'"><i class="fa fa-pinterest-p"></i></a>';
                  }
                echo '</div>';
              }
            ?>
        </div>
      </div>
    <?php
    } // if $author_content
  }
}

/* ==============================================
   Custom Comment Area Modification
=============================================== */
if ( ! function_exists( 'brixey_comment_modification' ) ) {
  function brixey_comment_modification($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
    $comment_class = empty( $args['has_children'] ) ? '' : 'parent';
  ?>

  <<?php echo esc_attr($tag); ?> <?php comment_class('item ' . $comment_class .' ' ); ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>">
    <?php endif; ?>
    <div class="comment-main-area">
      <div class="comment-theme">
        <div class="comment-image">
          <?php if ( $args['avatar_size'] != 0 ) {
            echo get_avatar( $comment, 80 );
          } ?>
        </div>
      </div>
      <div class="comment-wrapper">
        <div class="brxy-comments-meta">
          <h4><?php printf( '%s', get_comment_author() ); ?> <span class="comments-date"><?php echo get_comment_date('d M Y').' at '.get_comment_time(); ?></span></h4>
        </div>
        <div class="comment-area">
          <?php comment_text(); ?>
        </div>
        <div class="comments-reply">
        <?php
          comment_reply_link( array_merge( $args, array(
          'reply_text' => '<span class="comment-reply-link">'. esc_html__('Reply','brixey') .'</span>',
          'before' => '',
          'class'  => '',
          'depth' => $depth,
          'max_depth' => $args['max_depth']
          ) ) );
        ?>
        </div>
        <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation"><?php echo esc_html__( 'Your comment is awaiting moderation.', 'brixey' ); ?></em>
        <?php endif; ?>
      </div>
    </div>
  <?php if ( 'div' != $args['style'] ) : ?>
  </div>
  <?php endif;
  }
}

/* Title Area */
if ( ! function_exists( 'brixey_title_area' ) ) {
  function brixey_title_area() {
    global $post, $wp_query;
    // Get post meta in all type of WP pages
    $brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
    $brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
    $brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
    $brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );

    if ($brixey_meta && (!is_archive() || is_woocommerce_shop())) {
      $custom_title = $brixey_meta['page_custom_title'];
      if ($custom_title) {
        $custom_title = $custom_title;
      } elseif(post_type_archive_title()) {
        post_type_archive_title();
      } else {
        $custom_title = '';
      }
    } else { $custom_title = ''; }

    /**
     * For strings with necessary HTML, use the following:
     * Note that I'm only including the actual allowed HTML for this specific string.
     * More info: https://codex.wordpress.org/Function_Reference/wp_kses
     */
    $allowed_html_array = array(
        'a' => array(
          'href' => array(),
        ),
        'span' => array(
          'class' => array(),
        )
    );

    if( $custom_title ) {
      echo esc_attr($custom_title);
    } elseif ( is_home() ) {
      bloginfo('name');
    } elseif ( is_search() ) {
      printf( esc_html__( 'Search Results for %s', 'brixey' ), '<span>' . get_search_query() . '</span>' );
    } elseif ( is_category() || is_tax() ){
      single_cat_title();
    } elseif ( is_tag() ){
      single_tag_title(esc_html__('Posts Tagged: ', 'brixey'));
    } elseif ( is_archive() ){
      if ( is_day() ) {
        printf( wp_kses( __( 'Archive for <span>%s</span>', 'brixey' ), $allowed_html_array ), get_the_date());
      } elseif ( is_month() ) {
        printf( wp_kses( __( 'Archive for <span>%s</span>', 'brixey' ), $allowed_html_array ), get_the_date( 'F, Y' ));
      } elseif ( is_year() ) {
        printf( wp_kses( __( 'Archive for <span>%s</span>', 'brixey' ), $allowed_html_array ), get_the_date( 'Y' ));
      } elseif ( is_author() ) {
        printf( wp_kses( __( 'Posts by: <span>%s</span>', 'brixey' ), $allowed_html_array ), get_the_author_meta( 'display_name', $wp_query->post->post_author ));
      } elseif ( is_post_type_archive() ) {
        post_type_archive_title();
      } else {
        _e( 'Archives', 'brixey' );
      }
    } elseif( is_404() ) {
      _e('404 Error', 'brixey');
    } elseif( $custom_title ) {
      echo esc_attr($custom_title);
    } else {
      the_title();
    }

  }
}

/**
 * Pagination Function
 */
if ( ! function_exists( 'brixey_paging_nav' ) ) {
  function brixey_paging_nav() {
    $older_post = cs_get_option('older_post');
    $newer_post = cs_get_option('newer_post');
    $older_post = $older_post ? $older_post : '<i class="fa fa-angle-left" aria-hidden="true"></i>';
    $newer_post = $newer_post ? $newer_post : '<i class="fa fa-angle-right" aria-hidden="true"></i>';
    global $wp_query;
    $big = 999999999;
    if($wp_query->max_num_pages > '1' ) {
      echo '<div class="brixey-blog-pagination">';
    }
    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
      'format' => '?paged=%#%',
      'prev_text' => $older_post,
      'next_text' => $newer_post,
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages,
      'type' => 'list'
    ));
    if($wp_query->max_num_pages > '1' ) {
      echo '</div>';
    }
  }
}

if ( ! function_exists( 'brixey_single_post_pagination' ) ) {
  function brixey_single_post_pagination(){
    $older_post = cs_get_option('older_post');
    $newer_post = cs_get_option('newer_post');
    $older_post = $older_post ? $older_post : esc_html__( 'Previous Post', 'brixey' );
    $newer_post = $newer_post ? $newer_post : esc_html__( 'Next Post', 'brixey' );

    $next_post = get_next_post(false);
    $prev_post = get_previous_post(false);
    if (!$next_post) {
      $class_next = 'disabled_next';
    }else{
      $class_next = '';
    }
    if( !$prev_post ){
      $class_prev = 'disabled_prev';
    }else{
      $class_prev = '';
    }
  ?>
    <div class="brxy-more-posts">
    <?php if( $prev_post ){ ?>
      <div class="pull-left"><a href="<?php echo esc_url(get_the_permalink( $prev_post->ID)); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo esc_attr($older_post); ?></a></div>
      <?php } if ($next_post) {?>
      <div class="pull-right"><a href="<?php echo esc_url(get_the_permalink( $next_post->ID)); ?>"><?php echo esc_attr($newer_post); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
      <?php } ?>
    </div>
  <?php
  }
}

if ( ! function_exists( 'brixey_ajax_load_more_blog' ) ) {
  function brixey_ajax_load_more_blog() {
    global $wp_query;
    $big = 999999999;
    if(is_archive()){
      if (is_category()) {
          $category =  single_cat_title( '', false );
        } else {
          $category = '';
        }
        if (is_author()) {
          $author = get_the_author_meta( 'display_name', $wp_query->post->post_author );
        } else {
          $author = '';
        }
        if (is_tag()) {
          $tags = single_tag_title('', false);
        } else {
          $tags = '';
        }
        if (is_year()) {
          $year = get_the_date('Y');
        } else {
          if (is_month()) {
            $month = get_the_date('m');
            $year = get_the_date('Y');
          } else {
            if (is_day()) {
              $day = get_the_date('d');
              $month = get_the_date('m');
              $year = get_the_date('Y');
            } else {
              $day = '';
              $month = '';
              $year = '';
            }
            $day = '';
            $month = '';
            $year = '';
          }
          $day = '';
          $month = '';
          $year = '';
        }
    } else {
       $tags = '';
       $author = '';
       $category = '';
       $year = '';
       $month = '';
       $day = '';
    }
    if (is_search()) {
      $search_term = (isset($_GET['searchterm'])) ? $_GET['searchterm'] : 0;
      $classname = 'search';
    } else {
      $search_term = '';
      $classname = '';
    }
    $load_more_text = cs_get_option('load_more_text');
    $blog_all_loaded = cs_get_option('blog_all_loaded_blg');
    $load_more_text = ($load_more_text) ? $load_more_text : esc_html__( 'Load More posts' , 'brixey' );
    $blog_all_loaded = ($blog_all_loaded) ? $blog_all_loaded : esc_html__('All Loaded', 'brixey' );
    if($wp_query->max_num_pages > 1 ) {
    ?>
      <div class="clearfix text-center">
      <div class="all-loaded"></div>
      <a class="brxy-btn brxy-btn-small load-more" data-posts="<?php echo esc_attr($wp_query->found_posts); ?>" data-search="<?php echo esc_attr($search_term); ?>" data-tag="<?php echo esc_attr($tags); ?>" data-author="<?php echo esc_attr($author); ?>" data-category="<?php echo esc_attr($category); ?>" data-message="<?php echo esc_attr($blog_all_loaded); ?>" data-page="1" data-url="<?php echo esc_url(admin_url( 'admin-ajax.php' )); ?>" data-offset="10"><span class="loadtxt"><?php echo esc_attr($load_more_text); ?></span><span class="loadingtxt"><?php echo esc_html__('Loading...', 'brixey'); ?></span></a></div>
      <?php
    }
  }
}

/**
 * PAGINATION FUNCTIONS
 */
if ( ! function_exists( 'brixey_load_more_button_ajax' ) ) {
  function brixey_load_more_button_ajax() {
    $paged    = $_POST["page"]+1;
    $category   = $_POST["category"];
    $search_term  = $_POST["search_term"];
    $author   = $_POST["author"];
    $tag    = $_POST["tag"];
    $query = new WP_Query(
      array(
        'tag' => $tag,
        'category_name' => $category,
        's' => $search_term,
        'author_name' => $author,
        'post_type' => 'post',
        'paged'     => $paged,
      )
    );
    $brixey_blog_columns = cs_get_option('blog_listing_columns');
    if ($brixey_blog_columns) {
      $brixey_blog_column_class = $brixey_blog_columns;
    } else {
      $brixey_blog_column_class = 'col-md-4';
    }
    if ( $query->have_posts() ) :
      while ( $query->have_posts() ) : $query->the_post();
        echo '<div class="masonry-item '.$brixey_blog_column_class.'">';
          get_template_part( 'layouts/post/content', get_post_format() );
        echo '</div>';
      endwhile;
    endif;
    wp_reset_postdata();
    die();
  }
  add_action( 'wp_ajax_brixey_load_more_button_ajax', 'brixey_load_more_button_ajax' );
  add_action( 'wp_ajax_nopriv_brixey_load_more_button_ajax', 'brixey_load_more_button_ajax' );
}

/**
 * PROJECT LOAD MORE BUTTON
 */
if ( ! function_exists( 'brixey_project_load_more_button' ) ) {
  function brixey_project_load_more_button() {
    $paged    = $_POST["page"]+1;
    $project_show_category   = $_POST["category"];
    $project_limit   = $_POST["limit"];
    $project_order   = $_POST["order"];
    $project_orderby   = $_POST["orderby"];
    $project_style   = $_POST["style"];

    $brxy_port = new WP_Query(
      array(
      'paged' => $paged,
      'post_type' => 'project',
      'posts_per_page' => (int)$project_limit,
      'project_category' => esc_attr($project_show_category),
      'orderby' => $project_orderby,
      'order' => $project_order
      )
    );

      if ( $brxy_port->have_posts() ) : while ($brxy_port->have_posts()) : $brxy_port->the_post();

        // Category
        global $post;
        $terms = wp_get_post_terms($post->ID,'project_category');
        foreach ($terms as $term) {
          $cat_class = 'cat-' . $term->slug;
        }
        $count = count($terms);
        $i=0;
        $cat_class = '';
        if ($count > 0) {
          foreach ($terms as $term) {
            $i++;
            $cat_class .= 'cat-'. $term->slug .' ';
            if ($count != $i) {
              $cat_class .= '';
            } else {
              $cat_class .= '';
            }
          }
        }

        // Featured Image
        $large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
        $featured_image_meta = get_post_meta( get_the_ID(), 'project_featured_image_metabox', true );
        if ($featured_image_meta) {
          $masonry_featured_img = $featured_image_meta['masonry_featured_image'];
          $masonry_img_width = $featured_image_meta['item_width'];
        } else {
          $masonry_featured_img = '';
          $masonry_img_width = '';
        }
        if ($project_style == 'masonry') {
          $masonry_img_width = $masonry_img_width;
          if ( !empty( $masonry_featured_img ) ) {
             $featured_img = wp_get_attachment_url( $masonry_featured_img );
          } elseif ( isset( $large_image ) && !empty( $large_image ) ){
            $featured_img = $large_image[0];
          } else {
            $featured_img = BRIXEY_IMAGES.'/grid-img.jpg';
          }
        } else {
          $masonry_img_width = '';
          if ( isset( $large_image ) && !empty( $large_image ) ) {
            $featured_img = $large_image[0];
          } else {
            $featured_img = BRIXEY_IMAGES.'/grid-img.jpg';
          }
        }

        ?>
          <div class="masonry-item <?php echo esc_attr( $cat_class ).' '.esc_attr($masonry_img_width); ?>">
            <div class="project-list">
              <div class="project-picture">
                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
              </div>
              <div class="project-info">
                <div class="brxy-table-container">
                  <div class="brxy-align-container">
                    <div class="project-title"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="project-category">
                    <?php
                    $category_list = wp_get_post_terms( get_the_ID(), 'project_category');
                    $i=1;
                    foreach ($category_list as $term) {
                      $term_link = get_term_link( $term );
                      echo '<span><a href="'. esc_url($term_link) .'" class="bpw-category">'. $term->name .'</a></span> ';
                      if($i++==2) break;
                    }
                    ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
      endwhile;
      endif;
    wp_reset_postdata();
    die();
  }
  add_action( 'wp_ajax_brixey_project_load_more_button', 'brixey_project_load_more_button' );
  add_action( 'wp_ajax_nopriv_brixey_project_load_more_button', 'brixey_project_load_more_button' );
}

if ( ! function_exists( 'brixey_project_paging_nav' ) ) {
  function brixey_project_paging_nav($numpages = '', $pagerange = '', $paged='') {
    if (empty($pagerange)) {
      $pagerange = 2;
    }
    if (empty($paged)) {
      $paged = 1;
    }
    if ($numpages == '') {
      global $wp_query;
      $numpages = $wp_query->max_num_pages;
      if(!$numpages) {
        $numpages = 1;
      }
    }
    $big = 999999999;
?>
  <div class="brixey-blog-pagination project-pagi">
    <?php  echo paginate_links( array(
      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
      'format' => '?page=%#%',
      'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      'current' => $paged,
      'total' => $numpages,
      'type' => 'plain'
    )); ?>
  </div>
<?php
  }
}

// audio video post formats
function brixey_embeded_audio( $type = array() ) {
  $content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
  $embed =  get_media_embedded_in_content( $content, $type );
  if($embed) {
    $output = str_replace('?visual=true', '?visual=false', $embed[0] );
  } else {
    $output = '';
  }
  return $output;
}

function brixey_youtube_video_id( $url ){
  $vid_url = $url;
  $video_url = urldecode(rawurldecode( $url ));
  preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
  if (strpos($vid_url, 'youtube') !== false) {
    return $matches[1];
  } else {
    return $vid_url;
  }
}

function brixey_video_format_data( $url ){
  $parsed = parse_url($url);
  if ( strpos( $parsed['host'], 'vimeo' ) !== false ) {
    $url = $url;
    preg_match(
        '/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/',
        $url,
        $matches
    );
    $id = $matches[2];
    return 'https://player.vimeo.com/video/'.$id.'?autoplay=1&title=0&byline=0&portrait=0';
  } else {
    $url = $url;
    preg_match(
        '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
        $url,
        $matches
      );
    $id = $matches[1];

    return 'https://www.youtube.com/watch?v='.$id;
  }
}

function brixey_project_information_meta() {
    global $post;
    $portfolio_meta  = get_post_meta( $post->ID, 'project_layout_metabox', true );
    $informations = $portfolio_meta['project_information'];
    if ($informations) {
      $infos = $informations;
    } else {
      $infos = array();
    }
    foreach ( $infos as $key => $information ) {
      $meta_info = explode('<br>', nl2br($information['meta_info'], false));
      $meta_url = explode('<br>', nl2br($information['info_url'], false));
      if(!empty($information['info_url'])) {
        $meta_i = count($meta_info);
        $meta_u = count($meta_url);
        if ($meta_i > $meta_u) {
          $meta_info = array_slice($meta_info, 0, count($meta_url));
        } elseif($meta_u > $meta_i) {
          $meta_url = array_slice($meta_url, 0, count($meta_info));
        } else {
          $meta_info = $meta_info;
          $meta_url = $meta_url;
        }
        $totlal_info = array_combine($meta_info, $meta_url);
        ?>
        <li>
          <span class="detail-name"><?php echo esc_attr($information['title']); ?></span>
        <?php foreach ($totlal_info as $info => $url) {  ?>
          <span><a href="<?php echo trim($url);?>"><?php echo trim($info); ?></a></span>
        <?php }  ?>
        </li>
      <?php
      } else { ?>
      <li>
        <span class="detail-name"><?php echo esc_attr($information['title']); ?></span>
      <?php foreach ($meta_info as $key => $info) {  ?>
          <span><?php echo trim($info); ?></span>
      <?php }  ?>
      </li>
      <?php
      }
    }
}

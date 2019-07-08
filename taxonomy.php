<?php
/*
 * The template for project category pages.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
get_header();
global $wp_query;
global $paged;
global $page;

$project_layout = cs_get_option('project_taxonomy_layout');
$project_layout = $project_layout ? $project_layout : 'default';

$project_column = cs_get_option('project_taxonomy_column');
$project_column = $project_column ? $project_column : 'masonry-item-4';

$project_style = cs_get_option('project_taxonomy_style');
$project_style = $project_style ? $project_style : 'masonry';

$caption_style = cs_get_option('project_taxonomy_caption');
$caption_style = $caption_style ? $caption_style : 'style2';

$pagination_style = cs_get_option('project_taxonomy_pagination');
$pagination_style = $pagination_style ? $pagination_style : 'style2';

if ($project_layout == 'full-width-no-space') {
  $wrap_sapace_class = ' no-spacer ';
  $row_space_class = '';
} elseif($project_layout == 'full-width-gutter'){
  $wrap_sapace_class = ' spacer2 ';
  $row_space_class = '';
}elseif($project_layout == 'full-width-more-space'){
  $wrap_sapace_class = ' spacer2 ';
  $row_space_class = ' spacer2 ';
}elseif($project_layout == 'contained-less-space'){
  $wrap_sapace_class = '';
  $row_space_class = ' spacer1 ';
}elseif($project_layout == 'contained-more-space'){
  $wrap_sapace_class = '';
  $row_space_class = ' spacer4 ';
}elseif($project_layout == 'contained-extra-space'){
  $wrap_sapace_class = '';
  $row_space_class = ' spacer2 ';
}elseif($project_layout == 'contained-large-space'){
  $wrap_sapace_class = '';
  $row_space_class = ' spacer5 ';
}else{
  $wrap_sapace_class = '';
  $row_space_class = ' spacer3 ';
}

 ?>

 <div class="brxy-masonry-wrap taxonomy-page <?php echo esc_attr($wrap_sapace_class ); ?>">
    <div class="container">
      <div class="project-listings <?php echo esc_attr( $caption_style ); ?>">
        <div class="filter-buttons">
          <ul class="brxy-menu">
			      <li><a href="javascript:void(0);" class="active" data-filter="*"><?php echo esc_html__('All', 'brixey'); ?></a></li>
              <?php
              $terms = get_terms('project_category');
              $count = count($terms);
              $i=0;
              $term_list = '';
              if ($count > 0) {
                foreach ($terms as $term) {
                  $i++;
                  $term_list .= '<li><a href="javascript:void(0);" data-filter=".cat-'. esc_attr($term->slug) .'">' . esc_attr($term->name) . '</a></li>';
                  if ($count != $i) {
                    $term_list .= '';
                  } else {
                    $term_list .= '';
                  }
                }
                echo $term_list;
              } ?>
		     </ul>
      </div>

    <!-- Project Start -->
    <div class="project-row brxy-masonry <?php echo esc_attr($project_column.$row_space_class); ?>">
      <?php
      if ( have_posts() ) : while (have_posts()) : the_post();

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
          <div class="masonry-item <?php echo esc_attr($cat_class ).' '.esc_attr($masonry_img_width); ?>">
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
      wp_reset_postdata(); ?>

      </div>
    </div>
   </div>
  <?php
    if ( $pagination_style != 'hide' && $wp_query->max_num_pages > '1' ) {
      if ($pagination_style == 'button') {
        $more_project_text = cs_get_option('more_project_text');
        $all_loaded_text = cs_get_option('all_loaded_text');
        $more_project_text = $more_project_text ? $more_project_text : esc_html__( 'More Project', 'brixey' );
        $all_loaded_text = $all_loaded_text ? $all_loaded_text : esc_html__( 'All Loaded', 'brixey' );
        if (is_tax()) {
			    $category = single_cat_title( '', false );
			  } else {
			    $category = '';
			  }
        ?>
        <div class="clearfix text-center">
          <div class="all-loaded"></div>
          <a class="brxy-btn brxy-btn-small load-more-project" data-posts="<?php echo esc_attr($wp_query->found_posts); ?>" data-message="<?php echo esc_attr($all_loaded_text); ?>" data-page="1" data-url="<?php echo esc_url(admin_url( 'admin-ajax.php' )); ?>" data-category="<?php echo esc_attr($category); ?>" data-style="<?php echo esc_attr($project_style); ?>">
              <span class="loadtxt"><?php echo esc_html__('Load More', 'brixey'); ?></span>
              <span class="loadingtxt"><?php echo esc_html__('Loading...', 'brixey'); ?></span>
            </a>
        </div>
  <?php
      } else {
        brixey_project_paging_nav($wp_query->max_num_pages,"",$paged);
      }
    }

  ?>
</div>

<?php
get_footer();
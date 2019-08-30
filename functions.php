<?php

add_theme_support( 'post-thumbnails' );
add_image_size('blog-thumbnail',770, 310, true);
add_image_size('blog-small',70, 70, true);
//add_image_size('post-large',900, 800, true);
add_image_size('post-small',570, 400, true);
set_post_thumbnail_size( 570, 400 );


/**
 * Header menu
 */

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' )); // đặt tên là Header Menu
}
add_action( 'init', 'register_my_menu' );

require_once get_template_directory() . '/vendor/inc/Bootstrap-Navwalker.php';
require_once get_template_directory() . '/vendor/inc/Footer-Navwalker.php';



/*
	==========================================
	Call Ajax Page
	==========================================
*/
function submit_info() {
    $url = get_site_url(). '/forminfo/';
    $fullName = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $success = false;
    $body = array(
        '_wpcf7' => '1529',
        '_wpcf7_version' => '5.1.3',
        '_wpcf7_locale' => 'en_GB',
        '_wpcf7_unit_tag' => 'wpcf7-f1529-o1',
        '_wpcf7_container_post' => '0',
        'your-name' => $fullName,
        'your-email' => $email,
        'your-subject' => $phone,
        'your-message' => 'My phone number: '.$phone

    );
    $args = array(
        'method' => 'POST',
        'timeout' => 5,
        'redirection' => 5,
        'httpversion' => '1.0',
        'blocking' => true,
        'headers' => array(),
        'body' => $body,
        'cookies' => array()
    );
    $response = wp_remote_post( $url, $args);
    if($response instanceof WP_Error) {
        $message = $response->get_error_message();
    } else {
        $responseHtml = $response['body'];
        //$responseHtml = FakeSuccess();
        //$responseHtml = FakeFail();
        $response = new \SimpleXMLElement($responseHtml);
        $message = (string)$response->div;
        //Message success from config
        $messageSuccess = 'Thank you for your message. It has been sent.';
        if($message==$messageSuccess) {
            $success = true;
        }
    }

    $return = array(
        'name' => $fullName,
        'email' => $email,
        'phone' => $phone,
        'success' => $success,
        'message' => $message
    );
    wp_send_json($return);
    wp_die();
}
add_action( 'wp_ajax_submit_info', 'submit_info' );


/*
	==========================================
	Pagination
	==========================================
*/
function brixey_pagination($lastBlog) {
    global $wp_query;

    $pages = paginate_links( array(
            'current'       => max( 1, get_query_var('paged') ),
            'total'         => $lastBlog->max_num_pages,
            'type'          => 'array',
            'prev_next'     => true,
            'prev_text'     => __('« Trước'),
            'next_text'     => __('Sau »'),
        )
    );

    if( is_array( $pages ) ) {
        $paged = ( get_query_var('page') == 0 ) ? 1 : get_query_var('paged');
        $pagination = '<ul class="pagination justify-content-center mb-4">';
        foreach ( $pages as $page ) {
            $pagination .= "<li class='page-item'>$page</li>";
        }
        $pagination .= '</ul>';

        echo $pagination;

    }
}

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function brixey_custom_post_type (){

    $labels = array(
        'name' => 'Blog',
        'singular_name' => 'Blog',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('blog',$args);
    flush_rewrite_rules( false );
}
add_action('init','brixey_custom_post_type');


#region ===========FakeData==============
function FakeSuccess() {
    $str = '<div role="form" class="wpcf7" id="wpcf7-f1529-o1" lang="en-GB" dir="ltr">
    <div class="screen-reader-response" role="alert">Thank you for your message. It has been sent.</div>
    <form action="/forminfo/#wpcf7-f1529-o1" method="post" class="wpcf7-form sent" novalidate="novalidate">
        <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="1529"/>
            <input type="hidden" name="_wpcf7_version" value="5.1.3"/>
            <input type="hidden" name="_wpcf7_locale" value="en_GB"/>
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1529-o1"/>
            <input type="hidden" name="_wpcf7_container_post" value="0"/>
        </div>
        <p>
            <label>Your Name (required)
                <br/>
                <span class="wpcf7-form-control-wrap your-name">
                    <input type="text" name="your-name" value="" size="40"
                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                           aria-invalid="false"/>
                </span>
            </label>
        </p>
        <p>
            <label>Your Email (required)
                <br/>
                <span class="wpcf7-form-control-wrap your-email">
                    <input type="email" name="your-email" value="" size="40"
                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                           aria-required="true" aria-invalid="false"/>
                </span>
            </label>
        </p>
        <p>
            <label>Subject
                <br/>
                <span class="wpcf7-form-control-wrap your-subject">
                    <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text"
                           aria-invalid="false"/>
                </span>
            </label>
        </p>
        <p>
            <label>Your Message
                <br/>
                <span class="wpcf7-form-control-wrap your-message">
                    <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                              aria-invalid="false"></textarea>
                </span>
            </label>
        </p>
        <p>
            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"/>
        </p>
        <div class="wpcf7-response-output wpcf7-mail-sent-ok" role="alert">Thank you for your message. It has been
            sent.
        </div>
    </form>
</div>';

    return $str;
}
function FakeFail() {
    $str = '<div role="form" class="wpcf7" id="wpcf7-f1529-o1" lang="en-GB" dir="ltr">
                <div class="screen-reader-response" role="alert">One or more fields have an error. Please check and try again.
                    <ul>
                        <li>The field is required.</li>
                    </ul>
                </div>
                <form action="/forminfo/#wpcf7-f1529-o1" method="post" class="wpcf7-form invalid" novalidate="novalidate">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="1529"/>
                        <input type="hidden" name="_wpcf7_version" value="5.1.3"/>
                        <input type="hidden" name="_wpcf7_locale" value="en_GB"/>
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1529-o1"/>
                        <input type="hidden" name="_wpcf7_container_post" value="0"/>
                    </div>
                    <p>
                        <label>Your Name (required)
                            <br/>
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="your-name" value="quyet" size="40"
                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                                       aria-invalid="false"/>
                            </span>
                        </label>
                    </p>
                    <p>
                        <label>Your Email (required)
                            <br/>
                            <span class="wpcf7-form-control-wrap your-email">
                                <input type="email" name="your-email" value="" size="40"
                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email wpcf7-not-valid"
                                       aria-required="true" aria-invalid="true"/>
                                <span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>
                            </span>
                        </label>
                    </p>
                    <p>
                        <label>Subject
                            <br/>
                            <span class="wpcf7-form-control-wrap your-subject">
                                <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text"
                                       aria-invalid="false"/>
                            </span>
                        </label>
                    </p>
                    <p>
                        <label>Your Message
                            <br/>
                            <span class="wpcf7-form-control-wrap your-message">
                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                          aria-invalid="false"></textarea>
                            </span>
                        </label>
                    </p>
                    <p>
                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"/>
                    </p>
                    <div class="wpcf7-response-output wpcf7-validation-errors" role="alert">One or more fields have an error. Please
                        check and try again.
                    </div>
                </form>
            </div>';

    return $str;
}
#endregion
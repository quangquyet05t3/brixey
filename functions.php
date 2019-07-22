<?php
/*
 * Brixey Theme's Functions
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

/**
 * Define - Folder Paths
 */
define( 'BRIXEY_THEMEROOT_PATH', get_template_directory() );
define( 'BRIXEY_THEMEROOT_URI', get_template_directory_uri() );
define( 'BRIXEY_CSS', BRIXEY_THEMEROOT_URI . '/assets/css' );
define( 'BRIXEY_IMAGES', BRIXEY_THEMEROOT_URI . '/assets/images' );
define( 'BRIXEY_SCRIPTS', BRIXEY_THEMEROOT_URI . '/assets/js' );
define( 'BRIXEY_FRAMEWORK', get_template_directory() . '/inc' );
define( 'BRIXEY_LAYOUT', get_template_directory() . '/layouts' );
define( 'BRIXEY_CS_IMAGES', BRIXEY_THEMEROOT_URI . '/inc/theme-options/theme-extend/images' );
define( 'BRIXEY_CS_FRAMEWORK', get_template_directory() . '/inc/theme-options/theme-extend' ); // Called in Icons field *.json
define( 'BRIXEY_ADMIN_PATH', get_template_directory() . '/inc/theme-options/cs-framework' ); // Called in Icons field *.json

/**
 * Define - Global Theme Info's
 */
if (is_child_theme()) { // If Child Theme Active
	$brixey_theme_child = wp_get_theme();
	$brixey_get_parent = $brixey_theme_child->Template;
	$brixey_theme = wp_get_theme($brixey_get_parent);
} else { // Parent Theme Active
	$brixey_theme = wp_get_theme();
}
define('BRIXEY_NAME', $brixey_theme->get( 'Name' ), true);
define('BRIXEY_VERSION', $brixey_theme->get( 'Version' ), true);
define('BRIXEY_BRAND_URL', $brixey_theme->get( 'AuthorURI' ), true);
define('BRIXEY_BRAND_NAME', $brixey_theme->get( 'Author' ), true);
/**
 * All Main Files Include
 */
require_once( BRIXEY_FRAMEWORK . '/init.php' );





/**
 * Header menu
 */

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' )); // đặt tên là Header Menu
}
add_action( 'init', 'register_my_menu' );

require_once get_template_directory() . '/vendor/inc/Bootstrap-Navwalker.php';



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
        'your-name' => 'quyet',
        'your-email' => 'quangquyet05t3@gmail.com',
        'your-subject' => '0986017705',
        'your-message' => 'My phone number: 0986017705'

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
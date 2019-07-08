<?php
/*
 * All Brixey Theme Related Functions Files are Linked here
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

/* Theme All Basic Setup */
require_once( BRIXEY_FRAMEWORK . '/theme-support.php' );
require_once( BRIXEY_FRAMEWORK . '/backend-functions.php' );
require_once( BRIXEY_FRAMEWORK . '/frontend-functions.php' );
require_once( BRIXEY_FRAMEWORK . '/enqueue-files.php' );
require_once( BRIXEY_CS_FRAMEWORK . '/custom-style.php' );
require_once( BRIXEY_CS_FRAMEWORK . '/config.php' );

/* Install Plugins */
require_once( BRIXEY_FRAMEWORK . '/plugins/notify/activation.php' );

/* Breadcrumbs */
require_once( BRIXEY_FRAMEWORK . '/plugins/breadcrumb-trail.php' );

/* Aqua Resizer */
require_once( BRIXEY_FRAMEWORK . '/plugins/aq_resizer.php' );

/* Sidebars */
require_once( BRIXEY_FRAMEWORK . '/core/sidebars.php' );
<?php
add_action('init', 'myStartSession', 1);
function myStartSession()
{
    if (!session_id()) {
        session_start();
    }
}

// Theme support options
// require_once(get_template_directory().'/assets/functions/google-fonts.php');

// Theme support options
require_once(get_template_directory() . '/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory() . '/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory() . '/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory() . '/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory() . '/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory() . '/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory() . '/assets/functions/page-navi.php');

// Adds support for multiple languages
// require_once(get_template_directory().'/assets/translation/translation.php');

// Adds support for TGM Plugin Activation
require_once(get_template_directory() . '/assets/functions/tgm.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
require_once(get_template_directory() . '/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory() . '/assets/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory() . '/assets/functions/admin.php');

if ((isset($_GET['appeal'])) && isset($_GET['donor'])) {

    $donor     = $_GET['appeal'];
    $post_type = 'appeals';
    $donation  = $_GET['test'];
    if ($donation == 'General Donation') {
        $post_type = 'page';
    }

    // Grab the thank you message
    $querystr = "
    SELECT $wpdb->posts.id
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
    AND $wpdb->postmeta.meta_key = 'campaign_description_for_rsm' 
    AND $wpdb->postmeta.meta_value = '" . $donation . "' 
    AND $wpdb->posts.post_status = 'publish' 
    AND $wpdb->posts.post_type = '" . $post_type . "'
    AND $wpdb->posts.post_date < NOW()
    ORDER BY $wpdb->posts.post_date DESC
    LIMIT 1";

    $meta              = $wpdb->get_row($querystr, OBJECT);
    $thank_you         = get_metadata('post', $meta->id, 'thank_you_message');
    $data['thank-you'] = $thank_you['0'];

    // Grab the donor
    $donor = "
    SELECT first_name, email
    FROM sp_donors
    WHERE id = " . $donor . "
    LIMIT 1";

    $findDonor = $wpdb->get_row($donor, OBJECT);

    $data['email'] = $findDonor->email;
    $data['name']  = $findDonor->first_name;

    if ($data['thank-you'] != '') {

        // Send the email
        $from    = 'hello@spana.org';
        $to      = $data['email'];
        $subject = "Thank you so much for your gift";
        $message = "Hi " . $data['name'] . "\n\r" . $data['thank-you'];
        $headers = 'From: ' . $from . "\r\n" .
                   'Reply-To: ' . $from . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers, '-' . $from);

    }

}
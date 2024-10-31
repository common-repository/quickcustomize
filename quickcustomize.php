<?php
/*
Plugin Name: QuickCustomize
Plugin URI: https://projects.techboyg5blog.com/quickcustomize.html
Description: Adds a Quick Customize button to the top of each administration screen, which allows you to quicks customize your website without leaving the WordPress admin area.
Version: 1.0
Requires at least: 5.0
Requires PHP: 7.0
Author: techboyg5
Author URI: https://projects.techboyg5blog.com/
License: GPLv2
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

function quickcustomize_notice() {
    if (current_user_can('customize')) {
    ?>
    <?php add_thickbox(); ?>
    <div id="screen-meta-links">
        <a class="button show-settings hide-if-no-customize thickbox" href="<?php echo site_url() . '/wp-admin/customize.php?width=800&height=600&TB_iframe=true'; ?>">Quick Customize</a>
    </div>
    <?php
    }
}
add_action( 'admin_notices', 'quickcustomize_notice' );
<?php
/**
 * Plugin Name: My First Plugin
 * Description: A basic plugin for the Gitpod starter environment.
 * Version: 1.0
 * Author: Your Name
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function my_simple_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Hello from My First Plugin!', 'my-first-plugin' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'my_simple_admin_notice' );

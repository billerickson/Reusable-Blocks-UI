<?php
/**
 * Plugin Name: Reusable Blocks UI
 * Plugin URI: https://github.com/billerickson/Reusable-Blocks-UI/
 * Description: Adds "Reusable Blocks" to the admin menu for easy editing
 * Version: 1.0.0
 * Author: Bill Erickson
 * Author URI: https://www.billerickson.net
 */

function be_reusable_blocks_ui() {
    add_menu_page( __( 'Reusable Blocks', 'reusable-blocks-ui' ), __( 'Reusable Blocks', 'reusable-blocks-ui' ), 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
add_action( 'admin_menu', 'be_reusable_blocks_ui' );

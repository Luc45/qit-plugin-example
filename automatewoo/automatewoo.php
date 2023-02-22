<?php
/*
 * Plugin name: QIT Example plugin
 * Decription: This is an example plugin just to show how you can integrate the QIT on your GitHub workflows. It has no relation with AutomateWoo.
 */

add_action( 'init', static function() {
    // This will be flagged by the Security scan as an unescaped output:
    echo 'Unescaped output!';

    if ( isset( $_POST['foo'] ) ) {
        // Flagged as unsanitized input.
        $foo = $_POST['foo'];
    }

    if ( is_cart() ) {
        trigger_error( 'Simulating an error on the Cart pages.', E_USER_ERROR );
    }
} );

trigger_error( 'Simulating a notice that happens on all requests.', E_USER_NOTICE );
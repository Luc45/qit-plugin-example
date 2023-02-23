<?php
/*
 * Plugin name: QIT Example plugin
 * Decription: This is an example plugin just to show how you can integrate the QIT on your GitHub workflows. It has no relation with AutomateWoo.
 */

add_action( 'init', static function() {
    if ( isset( $_POST['foo'] ) && wp_verify_nonce( $_POST['nonce'], 'my-nonce' ) ) {
        $foo = sanitize_text_field( $_POST['foo'] );

        echo sprintf( "Unescaped output! %s", esc_html( $foo ) );
    }
} );
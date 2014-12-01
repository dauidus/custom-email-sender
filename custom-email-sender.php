<?php
/*
Plugin Name: Custom Email Sender
Plugin URI: http://dauid.dev
Description: Allows admins to change from name and address in WordPress default emails.
Version: 1.0
Author: Dave Winter
Author URI: http://dauid.dev
License: GPL2
*/


// need options page
// visible only to administrator user role


// change address
add_filter( 'wp_mail_from', 'mail_from_address' );
function mail_from_address( $email ) {
    return 'ME@MEME.ME';
}

// change name
add_filter( 'wp_mail_from_name', 'mail_from_name' );
function mail_from_name( $email ) {
    return 'Johnny Appleseed';
}

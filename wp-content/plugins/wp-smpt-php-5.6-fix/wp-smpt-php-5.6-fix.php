<?php
/*
 Plugin Name: WP SMTP PHP 5.6 fix
 Version: 1.0
 Author: unclego
 Author URI: https://profiles.wordpress.org/unclego/ 
 License: GPL2 
 Description: FIX for PHP Warning:  stream_socket_enable_crypto(): SSL operation failed with code 1. OpenSSL Error messages:\nerror:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed when using PHP 5.6+ and mail server with self signed certificate  
*/
/*
Installation
 
1. Create `wp-smpt-php-5.6-fix` into `WP_PLUGIN_DIR` ( `/wp-content/plugins/` on common WP instalation )
2. Copy this file (wp-smpt-php-5.6-fix.php) into new dir
3. Activate plugin
   
 */
#-------------------------------------------------------------------------------
class WP_SMTP_Customizer {
	#-------------------------------------------------------------------------------
	public static function _loader() {
		add_action('phpmailer_init', array( get_class(), 'phpmailer_init'), 100 );
	}
	#-------------------------------------------------------------------------------
	public static function phpmailer_init($phpmailer) { 
		// Bonus : Fixing The Return-Path Header
		$phpmailer->Sender = $phpmailer->From;
		// Fixing  PHP Warning:  stream_socket_enable_crypto(): SSL operation failed with code 1.
		$phpmailer->SMTPOptions = array(
				'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
				)
		);
	}
	#-------------------------------------------------------------------------------
}
#-------------------------------------------------------------------------------
WP_SMTP_Customizer::_loader();

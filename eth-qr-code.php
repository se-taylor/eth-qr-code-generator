<?php

/**
 * Plugin Name: Ethereum QR Code
 * Description: ‌Generate QR image to receive Ethereum donations.
 * Version:     1.0.0
 * Author:      S.E. Taylor
 * Author URI:      https://github.com/se-taylor/eth-qr-code-generator
 * License:     GPLv3
 */

namespace ETH_QR_CODE;

use ETH_QR_CODE\Admin\Init as Admin;
use ETH_QR_CODE\Includes\Assets;
use ETH_QR_CODE\Includes\Elementor;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once 'vendor/autoload.php';

register_activation_hook( __FILE__, '\ETH_QR_CODE\activation_hook_callback' );

function activation_hook_callback() {
	\ETH_QR_CODE\Includes\Init::activate();
}

register_deactivation_hook( __FILE__, '\ETH_QR_CODE\deactivation_hook_callback' );

function deactivation_hook_callback() {
	\ETH_QR_CODE\Includes\Init::deactivate();
}


Admin::instance();
Assets::instance();
Elementor::instance();

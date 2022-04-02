<?php

add_action( 'wp_ajax_ethqrc_validate_address', 'ethqrc_validate_address' );

function ethqrc_validate_address() {

	check_ajax_referer( 'ethqrc_save_settings', 'nonce' );

	$address = sanitize_text_field( $_POST['address'] );


	if ( 42 !== strlen( $address ) ) {
		wp_send_json_error(__('Ethereum address is not valid. It should have exactly 42 characters.', 'eth-qr-code'));
	}


	if ( 0 !== strpos( $address, '0x' ) ) {
		wp_send_json_error(__('Ethereum address is not valid. It should start with <code>0x</code>.', 'eth-qr-code'));
	}

	ethqrc_update_option( '_eth_qr_code_address', $address );

	wp_send_json_success(__('Saved!', 'eth-qr-code'));
}

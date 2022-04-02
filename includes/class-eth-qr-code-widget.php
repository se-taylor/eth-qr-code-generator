<?php

namespace ETH_QR_CODE\Includes;

class Ethereum_QR_Code_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'eth-qr-code';
	}

	public function get_title() {
		return __( 'Ethereum QR Code', 'eth-qr-code' );
	}

	public function get_icon() {
		return 'eicon-play';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function _register_controls() {}

	protected function render() {
		echo ethqrc_get_QR_code();
	}

}

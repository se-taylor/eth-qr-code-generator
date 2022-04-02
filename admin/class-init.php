<?php

namespace ETH_QR_CODE\Admin;

use ETH_QR_CODE\Includes\Functions;

class Init {

	private static $instance = null;

	private function __construct() {
		$this->init();
	}

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new Init();
		}

		return self::$instance;
	}

	public function init() {
		add_action( 'admin_enqueue_scripts', array( $this, 'assets' ) );
		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
	}

	public function assets( $hook ) {
		if ( 'settings_page_eth-qr-code' === $hook ) {
			wp_enqueue_style( 'ethqrc-admin' );
			wp_enqueue_script( 'ethqrc-admin' );
		}
	}

	public function add_menu_page() {
		add_submenu_page(
			'options-general.php',
			__( 'Ethereum QR Code', 'eth-qr-code' ),
			__( 'Ethereum QR Code', 'eth-qr-code' ),
			'manage_options',
			'eth-qr-code',
			array( $this, 'renbder_settings_page' ),
		);
	}

	public function renbder_settings_page() {
		?>
		<div class="ethqrc-admin-wrapper">
			<div class="ethqrc-admin-header">
				<span class="ethqrc-logo">
				<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100px" height="100px" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
				viewBox="0 0 784.37 1277.39"
				 xmlns:xlink="http://www.w3.org/1999/xlink"
				 xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
				 <g id="Layer_x0020_1">
				  <metadata id="CorelCorpID_0Corel-Layer"/>
				  <g id="_1421394342400">
				   <g>
				    <polygon fill="#343434" fill-rule="nonzero" points="392.07,0 383.5,29.11 383.5,873.74 392.07,882.29 784.13,650.54 "/>
				    <polygon fill="#8C8C8C" fill-rule="nonzero" points="392.07,0 -0,650.54 392.07,882.29 392.07,472.33 "/>
				    <polygon fill="#3C3C3B" fill-rule="nonzero" points="392.07,956.52 387.24,962.41 387.24,1263.28 392.07,1277.38 784.37,724.89 "/>
				    <polygon fill="#8C8C8C" fill-rule="nonzero" points="392.07,1277.38 392.07,956.52 -0,724.89 "/>
				    <polygon fill="#141414" fill-rule="nonzero" points="392.07,882.29 784.13,650.54 392.07,472.33 "/>
				    <polygon fill="#393939" fill-rule="nonzero" points="0,650.54 392.07,882.29 392.07,472.33 "/>
				   </g>
				  </g>
				 </g>
				</svg>
				</span>
				<span class="ethqrc-admin-title">
					<h1><?php esc_html_e( 'Ethereum QR Code', 'eth-qr-code' ); ?></h1>
				</span>
				<p><?php esc_html_e( 'Un-Official Ethereum QR Code plugin for WordPress.', 'eth-qr-code' ); ?></p>
				<p><?php esc_html_e( 'Use the following shortcode to display donation QR code. If you are using Elementor, use the Elementor widget.', 'eth-qr-code' ); ?><code>[eth_qr_code]</code></p>
				<br>
			</div>
			<div class="ethqrc-admin-main">
				<section class="ethqrc-settings">
					<label for="eth_qr_code_address">
						<?php _e( 'Ethereum QR Code address:', 'eth-qr-code' ); ?>
					</label>
					<br>
					<input type="text" id="eth-qr-code-address" name="eth_qr_code_address" placeholder="0x" size="42" pattern="[a-z0-9]{42}" value="<?php echo esc_attr( ethqrc_get_option( '_eth_qr_code_address' ) ); ?>">
					<?php wp_nonce_field( 'ethqrc_save_settings' ); ?>
					<input type="submit" id="save_eth_qr_code_address" name="save_eth_qr_code_address" value="<?php esc_attr_e( 'Save', 'eth-qr-code' ); ?>">
					<?php if ( ethqrc_get_option( '_eth_qr_code_address' ) ) : ?>
					<?php endif; ?>
					<div id="ethqrc-message-area"></div>
				</section>
			</div>
		</div>
		<?php
	}

}

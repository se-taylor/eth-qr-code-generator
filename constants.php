<?php

namespace ETH_QR_CODE;

define( 'ETHQRC_PATH', plugin_dir_path( __FILE__ ) );
define( 'ETHQRC_URL', plugin_dir_url( __FILE__ ) );

define( 'ETHQRC_VERSION', '1.0.0' );
define( 'ETHQRC_SLUG', 'eth_qr_code' ); // snake_case

define( 'ETHQRC_ADMIN_PATH', ETHQRC_PATH . 'admin/' );
define( 'ETHQRC_ADMIN_URL', ETHQRC_URL . 'admin/' );

define( 'ETHQRC_FRONT_ASSETS', ETHQRC_URL . 'front/assets/dist/' );
define( 'ETHQRC_IMG_ASSETS', ETHQRC_URL . 'front/assets/img/' );
define( 'ETHQRC_ADMIN_ASSETS', ETHQRC_ADMIN_URL . 'assets/dist/' );

<?php

function ethqrc_shortcode(){
	return ethqrc_get_QR_code();
}

add_shortcode('eth_qr_code', 'ethqrc_shortcode');

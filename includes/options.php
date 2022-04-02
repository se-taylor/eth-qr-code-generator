<?php

function ethqrc_get_option( string $option, $default = null ) {
	$options = get_option( 'ethqrc_config_eth', array() );
	return $options[ $option ] ?? $default;
}

function ethqrc_update_option( $option, $new_value ) {
	$config            = get_option( 'ethqrc_config_eth', array() );
	$config[ $option ] = $new_value;
	return update_option( 'ethqrc_config_eth', $config );
}

<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'icon',
		'label' => __( 'Icon', 'fw' )
	),
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Your url', 'clean' ),
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Icon title', 'fw' ),
	)
);
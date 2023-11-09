<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'Url' => array(
		'type'  => 'text',
		'label' => __( 'url', 'fw' ),
		'value' => '',
		'desc'  => __( 'Type the url for your slide.', 'fw' )
	),
	'Link_Title' => array(
		'type'  => 'text',
		'label' => __( 'link', 'fw' ),
		'value' => '',
		'desc'  => __( 'Type the link title for your slide.', 'fw' )
	),
);
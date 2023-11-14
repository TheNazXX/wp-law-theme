<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'column_id'    => array(
		'type'  => 'text',
		'label' => __( 'Column ID', 'fw' ),
	),
	'column_class'    => array(
		'type'  => 'text',
		'label' => __( 'Column Class', 'fw' ),
	)
);
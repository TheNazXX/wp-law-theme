<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'span_wrapper'    => array(
		'type'  => 'checkbox',
		'label' => __( 'Wrap in div', 'fw' ),
	),
	'span_wrapper_class'    => array(
		'type'  => 'text',
		'label' => __( 'Wrap class', 'fw' ),
	),
	'span_id'    => array(
		'type'  => 'text',
		'label' => __( 'Span ID', 'fw' ),
	),
	'span_icon' => array(
		'type' => 'icon',
		'label' => __( 'Span Icon', 'fw' )
	),
	'span_content'    => array(
		'type'  => 'text',
		'label' => __( 'Span Content', 'fw' ),
	),
	'span_class'    => array(
		'type'  => 'text',
		'label' => __( 'Span Class', 'fw' ),
	),
	'span_data_attrs'    => array(
		'type'  => 'text',
		'label' => __( 'Data Attributes', 'fw' ),
	)
);
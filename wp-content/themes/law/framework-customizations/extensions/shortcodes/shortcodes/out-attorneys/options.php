<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'posts_count'    => array(
		'type'  => 'text',
		'label' => __( 'Posts Count', 'fw' ),
		'desc'  => __( 'count of posts', 'fw' )
	)
);
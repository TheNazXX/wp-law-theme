<?php 

function custom_metaboxes($meta_boxes){
  $meta_boxes = [];




  $meta_boxes[] = [
    'id'         => 'attorneys_metabox',
		'title'      => 'Attorneys Options',
		'pages'      => array( 'attorneys'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => __('position', 'attorneys'),
				'desc' => __('Type the position attorneys','attorneys'),
				'id'   => 'wp_attorneys',
				'std'  => '',
				'type' => 'text',
			)
		)
  ];


  return $meta_boxes;
};


?>
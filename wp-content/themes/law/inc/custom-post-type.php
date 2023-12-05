<?php 

function create_custom_post_type(){
  register_post_type('attorneys', [
    'labels' => [
			'name'               => 'Attorneys', // основное название для типа записи
			'singular_name'      => 'Attorney', // название для одной записи этого типа
		],
    'show_in_rest' => true,
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail']
  ]);
};

add_action('init', 'create_custom_post_type');



?>
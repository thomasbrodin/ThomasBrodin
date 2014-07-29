<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_portfolio',
		'title' => 'Portfolio',
		'fields' => array (
			array (
				'key' => 'field_53c5420c9bb8b',
				'label' => 'Portfolio Images ',
				'name' => 'proj_img',
				'type' => 'gallery',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_53c54f44eeee0',
				'label' => 'Thumbnail Size',
				'name' => 'thumbnail_size',
				'type' => 'select',
				'instructions' => 'Pick the size of the thumbnail',
				'choices' => array (
					'ThWidth' => 'Thumbnail size - Width 100',
					'XSWidth' => 'X-Small size - Width 150',
					'SWidth' => 'Small size - width 200',
					'MWidth' => 'Medium size - Width 250',
					'XMWidth' => 'X-Medium size - Height 350',
					'LgWidth' => 'Large size - Width 450',
					'XLgWidth' => 'X-Large size - Width 600',
					'XXLgWidth' => 'XX-Large size - Width 900',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53c59340a26cb',
				'label' => 'Caption',
				'name' => 'proj_caption',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'author',
				6 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

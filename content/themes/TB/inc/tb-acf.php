<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_54f104a63c35c',
	'title' => 'Page',
	'fields' => array (
		array (
			'key' => 'field_54f104a787ef4',
			'label' => 'Portrait',
			'name' => 'portrait',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'large',
			'library' => 'all',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '86',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'custom_fields',
		1 => 'discussion',
		2 => 'comments',
		3 => 'author',
		4 => 'format',
		5 => 'tags',
		6 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_54e27bf90d74f',
	'title' => 'Portfolio',
	'fields' => array (
		array (
			'key' => 'field_53c54f44eeee0',
			'label' => 'Thumbnail Size',
			'name' => 'thumbnail_size',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'' => 'Plain',
				'ThWidth' => 'Thumbnail size - Width 100',
				'XSWidth' => 'X-Small size - Width 150',
				'SWidth' => 'Small size - Width 200',
				'SMWidth' => 'Small-Medium size - Width 250',
				'MWidth' => 'Medium size - Width 350',
				'LMWidth' => 'Medium-Large size - Width 400',
				'LWidth' => 'Large size - Width 450',
				'XLWidth' => 'X-Large size - Width 520',
				'XXLWidth' => 'XX-Large size - Width 600',
				'XXXLWidth' => 'XXX-Large size - Width 900',
			),
			'default_value' => array (
				'Plain' => 'Plain',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_53e119ce7b158',
			'label' => 'Reference Hover Thumb',
			'name' => 'ref_hover',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54f614720c92e',
			'label' => 'Credits & Services',
			'name' => 'credits',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_53c59340a26cb',
			'label' => 'Caption',
			'name' => 'proj_caption',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54e3c95382c1c',
			'label' => 'Project',
			'name' => 'tb_single',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add content',
			'min' => '',
			'max' => '',
			'layouts' => array (
				array (
					'key' => '54e3cf9282c31',
					'name' => 'full_width_center_image',
					'label' => 'Large Image',
					'display' => 'table',
					'sub_fields' => array (
						array (
							'key' => 'field_54e3cfc482c32',
							'label' => 'Format',
							'name' => 'format',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 15,
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'hori' => 'Centered & Padding',
								'vert' => 'Aligned Right',
								'sq' => 'Middle',
							),
							'default_value' => array (
								'' => '',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_55731bd6b9c66',
							'label' => 'caption',
							'name' => 'caption',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 15,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => 'br',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_54e3d02382c33',
							'label' => 'Large Image',
							'name' => 'large_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 70,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'large',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '54e3ccdf82c26',
					'name' => 'highlights',
					'label' => 'Highlights',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_54e3ccee82c27',
							'label' => 'Quote',
							'name' => 'quote',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => 'br',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '55a6a3916c1f9',
					'name' => 'row_img',
					'label' => 'Images Grid',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_55a6a3916c1fa',
							'label' => 'Columns',
							'name' => 'col_img',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 15,
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								2 => 2,
								3 => 3,
							),
							'default_value' => array (
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_55a6a3916c1fb',
							'label' => 'Position',
							'name' => 'pos_img',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 15,
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'centered' => 'Centered',
								'aligned' => 'Aligned Container',
							),
							'default_value' => array (
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_55a6a3916c1fc',
							'label' => 'Images Caption',
							'name' => 'cap_img',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 70,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => 'br',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a6a3916c1fd',
							'label' => 'Image 1',
							'name' => 'image_1',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 33,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_55a6a3916c1fe',
							'label' => 'Image 2',
							'name' => 'image_2',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 33,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_55a6a3916c1ff',
							'label' => 'image 3',
							'name' => 'image_3',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_55a6a3916c1fa',
										'operator' => '==',
										'value' => '3',
									),
								),
							),
							'wrapper' => array (
								'width' => 33,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '54e3cbb182c1f',
					'name' => 'description',
					'label' => 'Description of Project',
					'display' => 'table',
					'sub_fields' => array (
						array (
							'key' => 'field_54e3cbc582c20',
							'label' => 'Columns text',
							'name' => 'columns_text',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 10,
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								1 => 1,
								2 => 2,
							),
							'default_value' => array (
								'' => '',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_54e3cc6482c21',
							'label' => 'Text Column 1',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 45,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
						),
						array (
							'key' => 'field_54e3cc9f82c22',
							'label' => 'Text Column 2',
							'name' => 'text_2',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_54e3cbc582c20',
										'operator' => '==',
										'value' => '2',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '55731984f3bd0',
					'name' => 'background_image',
					'label' => 'Background Image',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_55731b58e7ef2',
							'label' => 'Large Caption',
							'name' => 'lg_caption',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 40,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55731bace7ef3',
							'label' => 'Small Caption',
							'name' => 'sm_caption',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 40,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_557346250e17e',
							'label' => 'Color',
							'name' => 'color_capt',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 20,
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'white' => 'White',
								'black' => 'Black',
								'lightgrey' => 'Grey',
							),
							'default_value' => array (
								'' => '',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_5573199ff3bd1',
							'label' => 'Background Image',
							'name' => 'bg_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 100,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'large',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'photography',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'creative-direction',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'custom_fields',
		3 => 'discussion',
		4 => 'comments',
		5 => 'author',
		6 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_54f627e78477f',
	'title' => 'Portfolio Side',
	'fields' => array (
		array (
			'key' => 'field_54f6281430b84',
			'label' => 'Small Square thumbnail',
			'name' => 'square_th',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_557593c164403',
			'label' => 'Thumbnail Padding',
			'name' => 'thumb_pad',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'pdt-3' => 'Top Padding 3em',
				'pdt-4' => 'Top Padding 4em',
				'pdt-5' => 'Top Padding 5em',
				'pdt-6' => 'Top Padding 6em',
				'pdr-3' => 'Right Padding 3em',
				'pdr-4' => 'Right Padding 4em',
				'pdr-5' => 'Right Padding 5em',
				'pdr-6' => 'Right Padding 6em',
				'pdb-3' => 'Bottom Padding 3em',
				'pdb-4' => 'Bottom Padding 4em',
				'pdb-5' => 'Bottom Padding 5em',
				'pdb-6' => 'Bottom Padding 6em',
				'pdl-3' => 'Left Padding 3em',
				'pdl-4' => 'Left Padding 4em',
				'pdl-5' => 'Left Padding 5em',
				'pdl-6' => 'Left Padding 6em',
			),
			'default_value' => array (
				'' => '',
			),
			'layout' => 'horizontal',
			'toggle' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'photography',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'creative-direction',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'side',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

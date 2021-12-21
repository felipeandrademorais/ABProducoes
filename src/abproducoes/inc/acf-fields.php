<?php
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
        'key' => 'group_61ba47bac6dca',
        'title' => 'Artista',
        'fields' => array(
            array(
                'key' => 'field_61ba47d065b91',
                'label' => 'Nome',
                'name' => 'nome',
                'type' => 'text',
                'instructions' => 'Informe o nome completo do artista',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_61ba47df65b92',
                'label' => 'Imagem',
                'name' => 'imagem',
                'type' => 'image',
                'instructions' => 'Insira uma imagem do artista',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
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
            array(
                'key' => 'field_61ba480865b93',
                'label' => 'Descrição',
                'name' => 'descricao',
                'type' => 'wysiwyg',
                'instructions' => 'Informe uma breve descrição do artista',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artistas',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
		'key' => 'group_610d69e7a4bcb',
		'title' => 'Depoimentos',
		'fields' => array(
			array(
				'key' => 'field_610d69f28a605',
				'label' => 'Texto Depoimento',
				'name' => 'texto',
				'type' => 'textarea',
				'instructions' => 'Escreva o depoimento a ser inserido no site;',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'new_lines' => '',
				'maxlength' => '',
				'placeholder' => '',
				'rows' => '',
			),
			array(
				'key' => 'field_610d6a628a606',
				'label' => 'Imagem Depoimento',
				'name' => 'imagem',
				'type' => 'image',
				'instructions' => 'Insira a imagem do avatar da pessoa que fez o depoimento',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
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
			array(
				'key' => 'field_610d6aab8a607',
				'label' => 'Nome',
				'name' => 'nome',
				'type' => 'text',
				'instructions' => 'Nome da pessoa que fez o depoimento',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_610d6ac88a608',
				'label' => 'Cargo',
				'name' => 'cargo',
				'type' => 'text',
				'instructions' => 'Cargo da pessoa que fez o depoimento',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_610d7707d5c19',
				'label' => 'Imagem de Fundo',
				'name' => 'fundo',
				'type' => 'image',
				'instructions' => 'Imagem a ser utilizado ao fundo do depoimento',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
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
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'depoimentos',
				),
			),
		),
		'menu_order' => 10,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
endif;		
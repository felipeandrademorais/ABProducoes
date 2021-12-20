<?php 

function wp_ab_customizer( $wp_customize ) {

    $wp_customize->add_panel('home_panel',array(
		'title' => 'Home',
		'description' => 'Alterar conteúdo da pagina inicial',
		'priority' => 10,
	));

    //section 1
    $wp_customize->add_section(
		'set_section_1',
		array(
			'title' => __('Seção 1'),
			'description' => __('Editar a primeira seção da página inicial'),
			'panel' => 'home_panel'
        ),
	);

    $wp_customize->add_setting(
		'set_section_1_titulo',
		array(
			'type' => 'theme_mod',
			'default' => 'Nós transformamos sonhos em realidade'
        ),
	);

	$wp_customize->add_control(
		'set_section_1_titulo', 
		array(
			'label' => ('Título'),
			'section' => 'set_section_1',
			'type' => 'text'
        ),
	);

    $wp_customize->add_setting(
		'set_section_1_subtitulo',
		array(
			'type' => 'theme_mod',
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ),
	);

	$wp_customize->add_control(
		'set_section_1_subtitulo', 
		array(
			'label' => ('Subtítulo'),
			'section' => 'set_section_1',
			'type' => 'text'
        ),
	);

	//section 3
    $wp_customize->add_section(
		'set_section_3',
		array(
			'title' => __('Seção 3'),
			'description' => __('Editar a terceira seção da página inicial'),
			'panel' => 'home_panel'
        ),
	);

    $wp_customize->add_setting(
		'set_section_3_titulo',
		array(
			'type' => 'theme_mod',
			'default' => 'Descrição quem sou eu'
        ),
	);

	$wp_customize->add_control(
		'set_section_3_titulo', 
		array(
			'label' => ('Título'),
			'section' => 'set_section_3',
			'type' => 'text'
        ),
	);

    $wp_customize->add_setting(
		'set_section_3_subtitulo',
		array(
			'type' => 'theme_mod',
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ),
	);

	$wp_customize->add_control(
		'set_section_3_subtitulo', 
		array(
			'label' => ('Subtítulo'),
			'section' => 'set_section_3',
			'type' => 'textarea'
        ),
	);

	$wp_customize->add_setting(
		'set_section_3_subtitulo_small',
		array(
			'type' => 'theme_mod',
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ),
	);

	$wp_customize->add_control(
		'set_section_3_subtitulo_small', 
		array(
			'label' => ('Subtítulo Pequeno'),
			'section' => 'set_section_3',
			'type' => 'textarea'
        ),
	);

	// Imagem
	$wp_customize->add_setting(
		'set_section_3_img',
		array()
	);

	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'set_section_3_img_control',
		array(
			'label' => __('Imagem'),
			'settings'  => 'set_section_3_img',
			'section'   => 'set_section_3'
		)
	));

}

add_action( 'customize_register', 'wp_ab_customizer' );
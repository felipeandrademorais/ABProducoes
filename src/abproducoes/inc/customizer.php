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
			'title' => __('Seção 1', 'wpfaculdades'),
			'description' => __('Editar a primeira seção da página inicial', 'wpfaculdades'),
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

}

add_action( 'customize_register', 'wp_ab_customizer' );
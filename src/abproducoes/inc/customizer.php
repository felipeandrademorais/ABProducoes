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

	//section 3
    $wp_customize->add_section(
		'set_contato_section',
		array(
			'title' => __('Contato'),
			'description' => __('Editar formulário de contato'),
			'panel' => 'home_panel'
        ),
	);

	//Descrição Página de Contato
	$wp_customize->add_setting(
		'set_form_contato',
		array(
			'type' => 'theme_mod',
			'default' => '23'
		)
	);

	$wp_customize->add_control(
		'set_form_contato',
		  array(
			'label' => ('Numero do ID do formulário contact-form'),
			'section' => 'set_contato_section',
			'type' => 'text'
		)
	);


	//Logo Header
    $wp_customize->add_section(
		'set_section_logo',
		array(
			'title' => __('Logo'),
			'description' => __('Editar a logo'),
			'panel' => 'home_panel'
        ),
	);

	// Imagem
	$wp_customize->add_setting(
		'set_logo',
		array()
	);

	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'set_logo',
		array(
			'label' => __('Logo'),
			'settings'  => 'set_logo',
			'section'   => 'set_section_logo'
		)
	));

	//Logo Abertura
    $wp_customize->add_section(
		'set_section_abertura',
		array(
			'title' => __('Logo Abertura'),
			'description' => __('Editar a logo de abertura da página'),
			'panel' => 'home_panel'
        ),
	);

	// Imagem
	$wp_customize->add_setting(
		'set_logo_abertura',
		array()
	);

	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'set_logo_abertura',
		array(
			'label' => __('Logo Abertura'),
			'settings'  => 'set_logo_abertura',
			'section'   => 'set_section_abertura'
		)
	));

	//section whatsapp
    $wp_customize->add_section(
		'set_whats_section',
		array(
			'title' => __('Whatsapp Contato'),
			'description' => __('Editar número whatsapp contato'),
			'panel' => 'home_panel'
        ),
	);

	//Numero Celular contato Whatsapp
	$wp_customize->add_setting(
		'set_whatsapp',
		array(
			'type' => 'theme_mod',
			'default' => '5549999987007'
		)
	);

	$wp_customize->add_control(
		'set_whatsapp',
		  array(
			'label' => ('Informe o número do Whatsapp sem pontuação nem espaçamento'),
			'section' => 'set_whats_section',
			'type' => 'text'
		)
	);

	//section Redes Sociais
    $wp_customize->add_section(
		'set_social_section',
		array(
			'title' => __('Redes Sociais'),
			'description' => __('Editar redes sociais'),
			'panel' => 'home_panel'
        ),
	);

	//Facebook
	$wp_customize->add_setting(
		'set_facebook',
		array(
			'type' => 'theme_mod',
			'default' => 'https://www.facebook.com/adrianobedinproducoes'
		)
	);

	$wp_customize->add_control(
		'set_facebook',
		  array(
			'label' => ('Informe o link da sua conta no facebook'),
			'section' => 'set_social_section',
			'type' => 'text'
		)
	);

	//Instagram
	$wp_customize->add_setting(
		'set_instagram',
		array(
			'type' => 'theme_mod',
			'default' => 'https://www.instagram.com/adriano_bedin/'
		)
	);

	$wp_customize->add_control(
		'set_instagram',
		  array(
			'label' => ('Informe o link da sua conta no Instagram'),
			'section' => 'set_social_section',
			'type' => 'text'
		)
	);

	//Youtube
	$wp_customize->add_setting(
		'set_youtube',
		array(
			'type' => 'theme_mod',
			'default' => 'https://www.youtube.com/channel/UCRYk8dxLh5N2tVHJudwcHWw'
		)
	);

	$wp_customize->add_control(
		'set_youtube',
		  array(
			'label' => ('Informe o link da sua conta no Youtube'),
			'section' => 'set_social_section',
			'type' => 'text'
		)
	);

	//Termos de Privacidade
    $wp_customize->add_section(
		'set_privacity_terms',
		array(
			'title' => __('Termos de Privacidade'),
			'description' => __('Editar termos de privacidade rodapé'),
			'panel' => 'home_panel'
        ),
	);

	//Termo de Privacidade
	$wp_customize->add_setting(
		'set_privacity_text',
		array(
			'type' => 'theme_mod',
			'default' => '© 2022 Todos os direitos reservados AB Produções.'
		)
	);

	$wp_customize->add_control(
		'set_privacity_text',
		  array(
			'label' => ('Informe o termo de privacidade desejado.'),
			'section' => 'set_privacity_terms',
			'type' => 'text'
		)
	);

}

add_action( 'customize_register', 'wp_ab_customizer' );
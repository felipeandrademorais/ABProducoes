    <div class="footer destaque">
        <div class="menu_bar">
            <ul class="nav_container">
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><img src="<?php echo get_theme_mod('set_logo_rodape_1');?>"></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><img src="<?php echo get_theme_mod('set_logo');?>"></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><img src="<?php echo get_theme_mod('set_logo_rodape_2');?>"></a>
                </li>
            </ul>
        </div>
        <hr class="featurette-divider">
        <div class="menu_bar">
            <ul class="nav_container">
                <li class="nav-item">
                    <a class="nav-link" href="#section-1">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-2">Nossos Artistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-3">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-4">Depoimentos</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#section-6">Eventos</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-5">Parceiros</a>
                </li>
            </ul>
        </div>
        <div class="social">
            
            <a 
                target="_blank" 
                class="<?php echo empty(get_theme_mod('set_facebook')) ? 'd-none' : 'social_item';?>" 
                href="<?php echo get_theme_mod('set_facebook');?>"
            >
                <span class="iconify" data-icon="entypo-social:facebook-with-circle"></span>
            </a>
            <a 
                target="_blank"
                class="<?php echo empty(get_theme_mod('set_instagram')) ? 'd-none' : 'social_item';?>" 
                href="<?php echo get_theme_mod('set_instagram');?>"
            >
                <span class="iconify" data-icon="entypo-social:instagram-with-circle"></span>
            </a>
            <a 
                target="_blank"
                class="<?php echo empty(get_theme_mod('set_youtube')) ? 'd-none' : 'social_item';?>"  
                href="<?php echo get_theme_mod('set_youtube');?>"
            >
                <span class="iconify" data-icon="entypo-social:youtube-with-circle"></span>
            </a>
            
        </div>
        <div class="privacy_terms">
            <small>© 2022 Todos os direitos reservados AB Produções.</small>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>
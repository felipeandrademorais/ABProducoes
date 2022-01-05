<section id="contato">
    <div class="agrouped-container">
        <div class="container">
            <h3>Vamos conversar?</h3>
            <div class="form-container">
                <?php echo do_shortcode('[contact-form-7 id="' . get_theme_mod( 'set_form_contato' ) . '"]'); ?>
            </div>
        </div>
        <div class="container">
            <h5>Ou entre em contato pelo Whatsapp</h5>
            <br>
            <p>Adriano Bedin</p>
            <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod( 'set_whatsapp' ) ?>&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20a%20respeito%20do%20seu%20trabalho" target="_blank" >
                <span class="iconify" data-icon="logos:whatsapp" data-width="70"></span>
            </a>
        </div>
    </div>
</section>
<?php 
     $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'eventos',
    );

    $the_eventos = new WP_Query($args);
?>


<section class="eventos" id="section-6">
    <div class="container">
        <h2>Eventos Realizados</h2>
        <div class="eventos_slider">
            <?php if ($the_eventos->have_posts()) : ?>
                <?php while ($the_eventos->have_posts()) : $the_eventos->the_post(); ?>
                    <div class="carousel-evento-item"  style="background-image: url('<?php echo get_field('fundo'); ?>');">
                        <div class="carousel-evento-item-cover">
                            <div class="text">
                                <p><?php echo get_field('texto') ?></p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_field('imagem'); ?>" alt="imagem_evento" />
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <div><?php _e('Nenhum evento cadastrado'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
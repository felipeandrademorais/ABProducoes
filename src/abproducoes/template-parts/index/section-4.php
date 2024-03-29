<?php 
     $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'depoimentos',
    );

    $the_depoimentos = new WP_Query($args);
?>


<section class="depoimentos back-ligth" id="section-4">
    <div class="container">
        <div class="depoimentos_slider">
        <?php if ($the_depoimentos->have_posts()) : ?>
            <?php while ($the_depoimentos->have_posts()) : $the_depoimentos->the_post(); ?>
                <div class="carousel-depoimento-item"  style="background-image: url('<?php echo get_field('fundo'); ?>');">
                    <div class="carousel-depoimento-item-cover">
                        <div class="text">
                            <p><?php echo get_field('texto') ?></p>
                        </div>
                        <div class="img">
                            <img src="<?php echo get_field('imagem'); ?>" alt="imagem_depoimento" />
                        </div>
                        <div class="name">
                            <h3><?php echo get_field('nome') ?></h3>
                            <p><?php  echo get_field('cargo') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div><?php _e('Nenhum depoimento cadastrado'); ?></div>
        <?php endif; ?>
        </div>
    </div>
</section>
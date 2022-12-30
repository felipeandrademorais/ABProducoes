<?php 
     $args = array(
    'post_status'    => 'publish',
    'post_type'      => 'eventos',
    'posts_per_page'  => -1,
    );

    $the_eventos = new WP_Query($args);
?>


<section class="eventos" id="section-6">
    <div class="container">
        <h2>Eventos Realizados</h2>
        <div class="eventos_slider">
            <?php if ($the_eventos->have_posts()) : ?>
                <?php while ($the_eventos->have_posts()) : $the_eventos->the_post();
                    $imagens = get_field('imagem'); 
                    foreach($imagens as $image):
                ?>
                    <div class="carousel-evento-item"  style="background-image: url('<?php echo get_field('fundo'); ?>');">
                        
                        <div class="carousel-evento-item-cover">
                            <div class="img">
                                <img src="<?php echo $image['full_image_url']; ?>" alt="<?php echo $image['title']; ?>">                                    
                            </div>
                        </div>
                    </div>
                <?php 
                    endforeach; 
                 endwhile; 
                ?>
                    <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <div><?php _e('Nenhum evento cadastrado'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
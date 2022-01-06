<?php
    $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'artistas',
    );

    $the_content = new WP_Query($args);
?>

<section id="section-2">
    <div class="container">
        <h3>Nossos Artistas</h3>
        <div class="artistas">
            <?php if ($the_content->have_posts()) : ?>
                <?php while ($the_content->have_posts()) : $the_content->the_post(); ?>
                    <!-- Variables -->
                    <?php 
                        $image = get_field('imagem');
                        $nome_field = get_field('nome');
                        $nome = strval($nome_field);
                    ?>

                    <div class="artista-item">
                        <small><?php echo $nome_field; ?></small>
                        <!-- Buttom -->
                        <button 
                            class="toggle-artista"
                            type="button" 
                            data-toggle="modal" 
                            data-target="#<?php echo preg_replace('/\s+/', '', $nome); ?>"  
                            style="background-image: url('<?php echo esc_url($image); ?>')"
                        ></button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo preg_replace('/\s+/', '', $nome); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-image: url('<?php echo esc_url($image); ?>')">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo '<h1>' . $nome_field . '</h1>'; ?>
                                    <?php echo get_field('descricao'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <div><?php _e('Nenhum artista cadastrado até o momento'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
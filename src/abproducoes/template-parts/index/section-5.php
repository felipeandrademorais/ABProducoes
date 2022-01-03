<?php
    $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'parceiros',
    );

    $the_content = new WP_Query($args);
?>

<section id="section-2">
    <div class="container">
        <h3>Parceiros</h3>
        <div class="parceiros">
            <?php if ($the_content->have_posts()) : ?>
                <?php while ($the_content->have_posts()) : $the_content->the_post(); ?>
                    <!-- Variables -->
                    <?php 
                        $image = get_field('imagem');
                        $url = get_field('link');
                    ?>

                    <!-- Buttom -->
                    <a 
                        href="<?php echo $url;?>"
                        target="_blank"
                        style="background-image: url('<?php echo esc_url($image); ?>')"
                    ></a>

                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <div><?php _e('Nenhum parceiro cadastrado até o momento'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php 
     $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'depoimentos',
    );

    $parceiros = new WP_Query($args);
?>

<section id="section-5">
    <div class="container">
        <?php if ($parceiros->have_posts()) : ?>
                <?php while ($parceiros->have_posts()) : $parceiros->the_post(); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div><?php _e('Nenhum parceiro cadastrado até o momento'); ?></div>
        <?php endif; ?>
    </div>
</section>
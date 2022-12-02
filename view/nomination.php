    <?php $image_id = get_field('example_figure'); ?>
    <div class="nomination">
        <div class="div">
        <h2><?php the_title(); ?></h2>
    </div>
        <?php if($image_id){
            echo '<div class="image" style="background-image:url('.wp_get_attachment_url( $image_id ).')"></div>';
        } ?>
        <a class="wp_noms_button" href="<?php the_permalink(); ?>">Read More</a>
    </div>
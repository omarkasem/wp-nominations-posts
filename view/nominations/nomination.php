<?php
$image_id = get_field('example_figure'); 
$terms = get_the_terms(get_the_ID(),'nomination_category');
$classes = '';
if(!empty($terms)){
    foreach($terms as $term){
		$classes.= $term->slug.' ';
	}
}
?>

<div class="nomination <?php echo $classes; ?>">
    <div class="div">
    <h2><?php the_title(); ?></h2>
</div>
    <?php if($image_id){
        echo '<div class="image" style="background-image:url('.wp_get_attachment_url( $image_id ).')"></div>';
    } ?>

    <?php if(get_field('summary_')){
        echo '<div class="summary">'.get_field('summary_').'</div>';
    } ?>

    <a class="wp_noms_button elementor-button-link elementor-button elementor-size-sm" href="<?php the_permalink(); ?>">Read More</a>
</div>
<div class="quote">
    <h1><?php echo $i; ?></h1>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if(get_field('description')){
        echo '<p><b>Description: </b> '.get_field('description').'</p>';
    } ?>

    <?php if(get_field('citation')){
        $cit = get_field('citation');
        echo '<p><b>Citation: </b> <a target="'.$cit['target'].'" href="'.$cit['url'].'">'.$cit['title'].'</a></p>';
    } ?>

    <?php if(get_field('nomination')){
        echo '<p><b>Nomination: </b> <a href="'.get_permalink(get_field('nomination')).'">'.get_the_title(get_field('nomination')).'</a></p>';
    } ?>
</div>
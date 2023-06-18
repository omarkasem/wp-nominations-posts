<style>
    .wp_nom_videos{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1rem;
    }
    .wp_nom_videos.one{
        grid-template-columns: 1fr;
    }
    .video img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .wp_nom_videos.one img{
        height:auto;
    }
    .wp_nom_video{
        position:relative;
    }

    @media (max-width: 600px) {
        .wp_nom_videos { grid-template-columns: repeat(1, 1fr); }
        .video img{
            height: auto;
        }
    }

</style>

<div id="single-nom">
<?php if(get_field('example_figure')){
    echo wp_get_attachment_image(get_field('example_figure'),'large');
} ?>

<?php if(get_field('summary_')){
    echo '<div><b>Summary: </b> '.get_field('summary_').'</div>';
} ?>

<?php if(get_field('quote')){
    echo '<div><b>Quote: </b> '.get_field('quote').'</div>';
} ?>

<?php if(get_field('technique')){
    echo '<div><b>Technique: </b> '.get_field('technique').'</div>';
} ?>

<?php if(get_field('reference_')){

    echo '<div><b>Reference: </b><p> '.linkifyText2(wp_strip_all_tags(get_field('reference_'))).'</p></div>';
} ?>


<?php if(get_field('videos_')){ ?>
    <div class="wp_nom_videos <?php if(count(get_field('videos_')) === 1){echo 'one';} ?>">
        <?php foreach(get_field('videos_') as $video){
            $url = $video['video_url'];
            $img_url = $video['thumbnail'];
            ?>
        <div class="video">
            <a class="wp_nom_video" href="<?php echo $url; ?>">
                <?php if(strpos($url,'youtube') !== false){
                        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                        $img_url = 'https://img.youtube.com/vi/'.$my_array_of_vars['v'].'/hqdefault.jpg';
                }
                echo '<img src="'.$img_url.'">';
                ?>
     

            </a>
        </div>
        <?php } ?>
    </div>
<?php } ?>
	
</div>
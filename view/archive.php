<style>
    .wp_noms{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-column-gap: 2rem;
        grid-row-gap: 2.5rem;
    }

    .wp_noms_button {
        text-decoration: none!important;
        background: #000;
        border-radius: 5px;
        color: #fff;
        outline: none;
        border: none;
        padding: 10px 20px;
        display: inline-block;
        margin-top: 10px;
        transition:all .5s;
    }

    .wp_noms_button:hover{
        background:#252525;
        color:#fff;
    }

    .wp_noms h2{
        font-size:20px;
    }
    .wp_noms .image{
        background-size: cover;
    height: 300px;
    }

    .load_more{
        margin-top:30px;
        background:#8c0a0a;
    }
    .load_more:hover{
        background:#580909;
    }

    .load_more img{
        position: relative;
        top: 3px;
    }

    @media (max-width: 1200px) {
        .wp_noms { grid-template-columns: repeat(2, 1fr); }
    }

    
    @media (max-width: 900px) {
        .wp_noms { grid-template-columns: repeat(1, 1fr); }
    }

</style>



<?php 
$count = 3;
$args = array(
    'posts_per_page'=>$count,
    'post_type'=>'wp_nomination'
);
$query = new WP_Query($args);

if($query->have_posts()){
?>
<div class="wp_noms">
    <?php 
    while ( $query->have_posts() ) {
        $query->the_post();
        include(OK_NOM_POSTS_PATH . 'view/nomination.php');
    }
    ?>
</div>

<?php if($query->found_posts > $count){
        echo '<div style="text-align:center;"><a full_count="'.$query->found_posts.'" class="load_more wp_noms_button" href="">Load More <img style="display:none;" src="'.site_url('wp-includes/images/wpspin.gif').'"></a></div>';
    } ?>

<?php }else{
    echo '<p>There is no nominations.</p>';
} wp_reset_postdata(); ?>


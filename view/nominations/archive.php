<style>
    .wp_noms{
        padding: 0;
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }

    .wp_noms .nomination{
        display: block;
        max-width: calc(33% - 30px);
        flex: 0 0 calc(33% - 30px);
        width: calc(33% - 30px);
        margin: 15px;
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

    .wp_noms .summary{
        overflow: hidden;
	text-overflow: clip;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
    margin: 10px 0;
    }
    .button-group button.active{
        background:#000;
        color:#fff;
    }

    [type=button]:focus, [type=button]:hover, [type=submit]:focus, [type=submit]:hover, button:focus, button:hover{
        background:#000;
        color:#fff;
    }


    @media (max-width: 1200px) {
        .wp_noms .nomination { 
            max-width: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            width: calc(50% - 30px);
         }
    }

    
    @media (max-width: 992px) {
        .wp_noms .nomination {
            max-width: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            width: calc(100% - 30px);
            margin: 15px;
        }
    }

</style>



<?php 
$count = -1;
$args = array(
    'posts_per_page'=>$count,
    'post_type'=>'wp_nomination'
);
$query = new WP_Query($args);

if($query->have_posts()){
?>
<?php 
    $terms = get_terms('nomination_category',array('hide_empty'=>true,));
    if(!empty($terms)){
?>
<h5 style="display:inline-block;margin-right:5px;">Filter By Category: </h5>
<div style="display:inline-block;" class="button-group filter-button-group">
  <button class="active" data-filter="*">All</button>
    <?php foreach($terms as $term){ ?>
        <button data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
    <?php } ?>
</div>
<?php } ?>

<div class="wp_noms">
    <?php 
    while ( $query->have_posts() ) {
        $query->the_post();
        include(OK_NOM_POSTS_PATH . 'view/nominations/nomination.php');
    }
    ?>
</div>
<br><br>

<?php }else{
    echo '<p>There is no nominations.</p>';
} wp_reset_postdata(); ?>


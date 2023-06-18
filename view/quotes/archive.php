<style>
    .wp_quotes{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-column-gap: 1rem;
    }

	
    .wp_quotes .quote{
        display: block;
/*         max-width: calc(50% - 30px);
        flex: 0 0 calc(50% - 30px);
        width: calc(50% - 30px); */
        margin: 15px;
    }
	
	.wp_quotes .quote h1{
		margin-bottom:0;
	}

    .wp_quotes_button {
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

    .wp_quotes_button:hover{
        background:#252525;
        color:#fff;
    }

    .wp_quotes h2{
        font-size:30px;
		margin-top:0;
		margin-bottom:5px;
		line-height: 1.2em;
    }
	
	.wp_quotes p:first-of-type b{
		font-size:24px;
	}
    .wp_quotes .image{
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

    .wp_quotes .summary{
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

    
    @media (max-width: 992px) {
        .wp_quotes { grid-template-columns: repeat(1, 1fr); }
    }

</style>



<?php 
$count = -1;
$args = array(
    'posts_per_page'=>$count,
    'post_type'=>'wp_quote'
);
$query = new WP_Query($args);
$i=0;
if($query->have_posts()){ 
?>

<div class="wp_quotes">
    <?php 
    while ( $query->have_posts() ) { $i++;
        $query->the_post();
        include(OK_NOM_POSTS_PATH . 'view/quotes/quote.php');
    }
    ?>
</div>
<br><br>

<?php }else{
    echo '<p>There is no quotes.</p>';
} wp_reset_postdata(); ?>


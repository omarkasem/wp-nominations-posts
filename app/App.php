<?php
namespace Ok_Nom_Posts;

class App{

    public function __construct(){
        add_filter( 'the_content', array($this,'add_templates'),1 );
        add_shortcode( 'WP_NOM_ARCHIVE',array($this,'archive_shortcode'));
        add_action( 'wp_ajax_wp_nom_load_more',array($this,'load_more'));
        add_action( 'wp_ajax_nopriv_wp_nom_load_more',array($this,'load_more'));
        
    }

    function load_more(){
        $exist = intval($_GET['exist']);
        $args = array(
            'posts_per_page'=>3,
            'post_type'=>'wp_nomination',
            'offset'=>$exist,
        );
        $query = new \WP_Query($args);
        $content = '';
        ob_start();
        while ( $query->have_posts() ) {
            $query->the_post();
            include(OK_NOM_POSTS_PATH . 'view/nomination.php');
            $content .= ob_get_contents();
            ob_end_clean();
        }
        wp_reset_postdata();

        echo $content;
        wp_die();
    }

    function archive_shortcode($atts){
        ob_start();

        wp_enqueue_script( OK_NOM_POSTS_NAME.'isotope', OK_NOM_POSTS_URL.'public/isotope.pkgd.min.js', array('jquery'),OK_NOM_POSTS_VERSION,true );
        wp_enqueue_script( OK_NOM_POSTS_NAME, OK_NOM_POSTS_URL.'public/app.js', array('jquery'),OK_NOM_POSTS_VERSION,true );

        wp_localize_script( OK_NOM_POSTS_NAME, 'ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ),) );


        include(OK_NOM_POSTS_PATH . 'view/archive.php');
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
    

    function add_templates( $content ) {
        if ( is_singular('wp_nomination')) {
            ob_start();
            
            if(get_field('videos_')){
                wp_enqueue_style( 'ok-nom-posts-lightbox', OK_NOM_POSTS_URL.'public/glightbox.min.css', OK_NOM_POSTS_VERSION,true );
                wp_enqueue_script( 'ok-nom-posts-lightbox', OK_NOM_POSTS_URL.'public/glightbox.min.js', array('jquery'),OK_NOM_POSTS_VERSION,true );
                wp_enqueue_script( OK_NOM_POSTS_NAME, OK_NOM_POSTS_URL.'public/app.js', array('jquery'),OK_NOM_POSTS_VERSION,true );
            }

            include(OK_NOM_POSTS_PATH . 'view/single.php');
            $content = ob_get_contents();
            ob_end_clean();

            return $content;
        }
 

        return $content;
    }


}

new App();
<?php
namespace Ok_Nom_Posts;

class App{

    public function __construct(){
        add_filter( 'the_content', array($this,'add_templates'),1 );
        add_filter( 'the_post', array($this,'add_templates2'),1 );
    }

    function add_templates2($test){
        
        return 'gd';
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
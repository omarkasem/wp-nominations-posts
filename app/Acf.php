<?php
namespace Ok_Nom_Posts;
class Acf{

    public function __construct(){
        include_once( OK_NOM_POSTS_ACF_PATH . 'acf.php' );
        $this->add_hooks();
        $this->acf_code();
    }

    public function add_hooks(){
        
        add_filter('acf/settings/url', array($this,'my_acf_settings_url'));
        add_filter('acf/settings/show_admin', array($this,'show_admin'));

    }

    public function my_acf_settings_url( $url ) {
        return OK_NOM_POSTS_ACF_URL;
    }

    
    public function show_admin( $show_admin ) {
        return OK_NOM_POSTS_ACF_SHOW;
    }



    public function acf_code(){

    }

}

new Acf();
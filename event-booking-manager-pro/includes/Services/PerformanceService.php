<?php
namespace EBMP\Services;

class PerformanceService {

    public function register(){

        add_action('wp_enqueue_scripts', function(){

            wp_dequeue_style('wp-block-library');
            wp_dequeue_style('wp-block-library-theme');
        });

        add_filter('script_loader_tag', function($tag){
            return str_replace(' src',' defer src',$tag);
        });
    }
}

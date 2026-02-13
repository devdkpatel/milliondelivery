<?php
namespace EBMP\Blocks;

class UpcomingEvents {

    public function register() {
        add_action('init', [$this,'init_block']);
    }

    public function init_block() {

        wp_register_script(
            'ebmp-block',
            plugins_url('../../assets/block.js', __FILE__),
            ['wp-blocks','wp-element','wp-editor'],
            true
        );

        register_block_type('ebmp/upcoming-events',[
            'editor_script'=>'ebmp-block',
            'render_callback'=>[$this,'render'],
            'attributes'=>[
                'count'=>[
                    'type'=>'number',
                    'default'=>3
                ],
                'showLocation'=>[
                    'type'=>'boolean',
                    'default'=>true
                ]
            ]
        ]);
    }

    public function render($atts){

        $url = rest_url('ebmp/v1/events?limit='.$atts['count']);
        $res = wp_remote_get($url);

        if(is_wp_error($res)) return '';

        $events = json_decode(wp_remote_retrieve_body($res),true);

        ob_start();

        echo '<div class="ebmp-events">';

        foreach($events as $e){
            echo '<article class="event">';
            echo '<h3>'.$e['title'].'</h3>';
            echo '<p>'.$e['date'].'</p>';

            if($atts['showLocation']){
                echo '<p>'.$e['location'].'</p>';
            }

            echo '</article>';
        }

        echo '</div>';

        return ob_get_clean();
    }
}

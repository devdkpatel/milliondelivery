<?php
namespace EBMP\Controllers;

use EBMP\Models\Event;

class EventController {

    public function register_cpt(){

        // register_post_type('event',[
        //     'label'=>'Events',
        //     'public'=>true,
        //     'supports'=>['title','editor']
        // ]);
        register_post_type('event',[
        'label'=>'Events',
        'public'=>true,
        'show_in_rest'=>true,
        'supports'=>['title','editor']
        ]);
    }

    public function register_meta(){

        add_meta_box(
            'event_meta',
            'Event Details',
            [$this,'meta_box'],
            'event'
        );
    }

    public function meta_box($post){

        foreach(Event::fields() as $field){
            $value = get_post_meta($post->ID,$field,true);
            echo "<p>$field<br><input style='width:100%' name='$field' value='$value'></p>";
        }
    }

    public function save_meta($post_id){

        foreach(Event::fields() as $field){
            if(isset($_POST[$field])){
                update_post_meta(
                    $post_id,
                    $field,
                    sanitize_text_field($_POST[$field])
                );
            }
        }
    }
}

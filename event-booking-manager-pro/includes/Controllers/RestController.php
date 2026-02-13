<?php
namespace EBMP\Controllers;

use EBMP\Services\EventService;
use WP_REST_Request;

class RestController {

    public function routes(){

        register_rest_route('ebmp/v1','/events',[
            'methods'=>'GET',
            'callback'=>[$this,'get_events']
        ]);
    }

    public function get_events(WP_REST_Request $req){

        $limit = $req->get_param('limit') ?? 5;

        $service = new EventService();
        //$query = $service->upcoming($limit);
        $query = new \WP_Query([
        'post_type'=>'event'
        ]);

        $data=[];

        while($query->have_posts()){
            $query->the_post();

            $data[]=[
                'title'=>get_the_title(),
                'date'=>get_post_meta(get_the_ID(),'date',true),
                'location'=>get_post_meta(get_the_ID(),'location',true)
            ];
        }

        wp_reset_postdata();

        return $data;
    }
}

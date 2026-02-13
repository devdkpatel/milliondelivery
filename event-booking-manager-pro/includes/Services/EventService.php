<?php
namespace EBMP\Services;

class EventService {

    public function upcoming($limit=5){

        return new \WP_Query([
            'post_type'=>'event',
            'posts_per_page'=>$limit,
            'meta_key'=>'date',
            'orderby'=>'meta_value',
            'order'=>'ASC',
            'meta_query'=>[
                [
                    'key'=>'date',
                    'value'=>date('Y-m-d'),
                    'compare'=>'>='
                ]
            ]
        ]);
    }
}

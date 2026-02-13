<?php
namespace EBMP\Core;

use EBMP\Controllers\EventController;
use EBMP\Controllers\RestController;
use EBMP\Blocks\UpcomingEvents;
use EBMP\Services\PerformanceService;

class Loader {

    public function run() {

        $event = new EventController();
        $rest  = new RestController();

        $block = new UpcomingEvents();
        $block->register();

        $perf = new PerformanceService();
        $perf->register();

        add_action('init', [$event,'register_cpt']);
        add_action('add_meta_boxes', [$event,'register_meta']);
        add_action('save_post', [$event,'save_meta']);

        add_action('rest_api_init', [$rest,'routes']);
    }
}

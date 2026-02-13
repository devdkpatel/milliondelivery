<?php
namespace EBMP\Models;

class Event {

    public static function fields() {
        return ['date','time','location','seats','status'];
    }
}

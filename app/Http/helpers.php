<?php

use Illuminate\Http\Request;

class Helpers {
    public static function active_link($path) {
        return request()->is($path.'*') ? 'active' : '';
    }
}
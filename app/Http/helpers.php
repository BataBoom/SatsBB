<?php

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Helpers {
    public static function active_link($path) {
        return request()->is($path.'*') ? 'active' : '';
    }
}

function str_random(int $int)
{
return Str::random($int);
}

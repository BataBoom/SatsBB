<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OwnerProvider extends ServiceProvider
{
    public static function getOwner() {
        $me = auth()->user();
        return $me->parent == 0 ? $me->id : $me->parent;
    }
}

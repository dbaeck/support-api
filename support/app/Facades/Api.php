<?php

namespace App\Facades;

class Api extends \Illuminate\Support\Facades\Facade {
    protected static function getFacadeAccessor() { return 'api'; }
}
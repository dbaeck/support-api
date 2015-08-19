<?php

namespace App\Classes;

use App\User;


class ApiService {

    private $user;

    public function authUser($api_key)
    {
        $this->user = User::where('api_key', $api_key)->firstOrFail();
    }

    public function isAuthenticated()
    {
        return isset($this->user) && isset($this->user->id);
    }

    public function user()
    {
        return $this->user;
    }
}
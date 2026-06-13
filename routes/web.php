<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Force Laravel to use file sessions, ignoring whatever is broken in config
    config(['session.driver' => 'file']);

    return '<h1>Hello World! Running via official Laravel Installer!</h1>';
});
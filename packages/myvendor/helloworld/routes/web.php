<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', function () {
    return view('helloworld::hello');
});
Route::get('hello-config', function () {
    return view('helloworld::hello', ['greeting' => config('helloworld.greeting')]);
});


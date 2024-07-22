<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('index');
});

Route::get('{page_name}', function ($page_name) {
    return View::make('/' . $page_name);
});

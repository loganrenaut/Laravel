<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title'=> 'home . Schuts',
        'owner_firstname' => config('schuts.owner_firstname'),
        'owner_lastname' => config('schuts.owner_lastname'),
        'game_name'=> config('schuts.game_name'),
    ]);
})->name('home');

Route::get('/overview', function () {
    return view('overview',[
        'title' => 'overview . Schuts',
    ]);
})->name('overview');
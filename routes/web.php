<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title'=> 'home . SCHÜT',
        'owner_firstname' => config('schuts.owner_firstname'),
        'owner_lastname' => config('schuts.owner_lastname'),
        'game_name'=> config('schuts.game_name'),
    ]);
})->name('home');

Route::get('/contact', function () {
    return view('contact',[
        'title' => 'contact . Schuts',
    ]);
})->name('contact');

Route::get('/game', function () {
    return view('game',[
        'title'=> 'game.Schuts',
        'game_name' => config('schuts.game_name'),
        ]);
})->name('game');
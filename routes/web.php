<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProjectController;

Route::get('/', function () {

    $projects = [
        [
            'id' => 1,
            'title' => 'Portfolio ESGI',
            'description' => 'Personal Website for academic projects, built with Laravel and Tailwind.',
            'status' => 'en_cours'
        ],
        [
            'id' => 2,
            'title' => 'Game Code Snippets for Schüts',
            'description' => 'Snippets of my code that I\'d like to share.',
            'status' => 'en_cours'
        ],
        [
            'id' => 3,
            'title' => 'Upcoming features',
            'description' => 'Tasks management with filters and priorities.',
            'status' => 'en_cours'
        ],
        [
            'id' => 4,
            'title' => 'Promotional Blog',
            'description' => 'Articles about features and upcoming games or updates',
            'status' => 'en_cours'
        ],
    ];


    return view('home',[
        'title'=> 'home . SCHÜT',
        'owner_firstname' => config('schuts.owner_firstname'),
        'owner_lastname' => config('schuts.owner_lastname'),
        'game_name'=> config('schuts.game_name'),
        'projects' => array_slice($projects, 0 , 3),
    ]);
})->name('home');

Route::get('/contact', function () {
    return view('contact',[
        'title' => 'contact . Schuts',
    ]);
})->name('contact');

Route::get('/game', function () {
    $faqs = [
        [
            'question' => 'What motivated you to create this game?',
            'answer' => 'Answer by HL coming soon.',
        ],
        [
            'question' => 'What challenges did face while developing it?',
            'answer' => 'Answer by HL coming soon.',
        ],
        [
            'question' => 'What advice would you give to people dev their own games?',
            'answer' => 'Answer by HL coming soon.',
        ],
    ];

    return view('game',compact('faqs'),
        [
        'title'=> 'game.Schuts',
        'owner_firstname' => config('schuts.owner_firstname'),
        'game_name' => config('schuts.game_name'),
        ]);
})->name('game');
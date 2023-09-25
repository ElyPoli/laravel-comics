<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Array con i dati da passare
    $data = [
        "navLinks" => [
            [
                "name" => "characters",
            ],
            [
                "name" => "comics",
            ],
            [
                "name" => "movies",
            ],
            [
                "name" => "tv",
            ],
            [
                "name" => "games",
            ],
            [
                "name" => "collectibles",
            ],
            [
                "name" => "videos",
            ],
            [
                "name" => "fans",
            ],
            [
                "name" => "news",
            ],
            [
                "name" => "shop",
            ]
        ]
    ];

    return view('home', $data);
});

Route::get('characters', function () {
    return view('characters');
});

Route::get('comics', function () {
    return view('comics');
});

Route::get('movies', function () {
    return view('movies');
});

Route::get('tv', function () {
    return view('tv');
});

Route::get('games', function () {
    return view('games');
});

Route::get('collectibles', function () {
    return view('collectibles');
});

Route::get('videos', function () {
    return view('videos');
});

Route::get('fans', function () {
    return view('fans');
});

Route::get('news', function () {
    return view('news');
});

Route::get('shop', function () {
    return view('shop');
});
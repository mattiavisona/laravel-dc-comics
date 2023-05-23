<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;



$links = [
    ['title' => 'Home', 'route' => 'Home'],
    ['title' => 'Movies', 'route' => 'Movies'],
    ['title' => 'Tv', 'route' => 'Tv'],
];


$comics = config('comics');


$icons = [
    [
        'src' => 'buy-comics-digital-comics.png',
        'text' => 'Digital Comics'
    ],
    [
        'src' => 'buy-comics-merchandise.png',
        'text' => 'Dc Merchandise'
    ],
    [
        'src' => 'buy-comics-subscriptions.png',
        'text' => 'Subscription'
    ],
    [
        'src' => 'buy-comics-shop-locator.png',
        'text' => 'Comic Shop Locator'
    ],
    [
        'src' => 'buy-dc-power-visa.svg',
        'text' => 'Dc Power Visa'
    ],
];

$footerLinks = [
    [
        'name' => 'Comics',
        'text' =>
        [
            'ciao',
            'tu'
        ],
    ],
    [
        'name' => 'movie',
        'text' => 'ciao'
    ],
    [
        'name' => 'tv',
        'text' => 'ciao'
    ],
];

$footerIcons = [
    ['src' => 'footer-facebook.png'],
    ['src' => 'footer-twitter.png'],
    ['src' => 'footer-youtube.png'],
    ['src' => 'footer-pinterest.png'],
    ['src' => 'footer-periscope.png'],
];

$data = [
    'links' => $links,
    'comics' => $comics,
    'footerLinks' => $footerLinks,
    'icons' => $icons,
    'footerIcons' => $footerIcons
];

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('/comics', ComicController::class);

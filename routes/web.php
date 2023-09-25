<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ],
        "bannerLinks" => [
            [
                "name" => "digital comics",
                "srcImg" => "img/buy-comics-digital-comics.png",
            ],
            [
                "name" => "dc merchandise",
                "srcImg" => "img/buy-comics-merchandise.png",
            ],
            [
                "name" => "subscriptions",
                "srcImg" => "img/buy-comics-subscriptions.png",
            ],
            [
                "name" => "comic shop locator",
                "srcImg" => "img/buy-comics-shop-locator.png",
            ],
            [
                "name" => "dc power visa",
                "srcImg" => "img/buy-dc-power-visa.svg",
            ]
        ],
        "comics" => Config::get('comics'),
    ];

    return view('home', $data);
});

Route::get('characters', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('characters', $data);
});

Route::get('comics', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('comics', $data);
});

Route::get('movies', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('movies', $data);
});

Route::get('tv', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('tv', $data);
});

Route::get('games', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('games', $data);
});

Route::get('collectibles', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('collectibles', $data);
});

Route::get('videos', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('videos', $data);
});

Route::get('fans', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('fans', $data);
});

Route::get('news', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('news', $data);
});

Route::get('shop', function () {
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
        ],
        "footerLinks" => [
            [
                "title" => "DC comics",
                "subheading" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "Shop",
                "subheading" => [
                    "Shop DC",
                    "Shop DC collectibles",
                ]
            ],
            [
                "title" => "DC",
                "subheading" => [
                    "Terms Of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us",
                ]
            ],
            [
                "title" => "Sites",
                "subheading" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ]
    ];

    return view('shop', $data);
});

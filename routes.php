<?php

use App\Router;

Router::addRoute('/', function () {
    $title = 'World';
    $posts = [
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2021',
            'author' => 'Pets',
            'body' => 'Some World content 1',
        ],
        [
            'title' => 'Some World title 2',
            'date' => 'January 3, 2021',
            'author' => 'Manivald',
            'body' => 'Some World content 2',
        ],
        [
            'title' => 'Some World title 3',
            'date' => 'January 5, 2021',
            'author' => 'Jorss',
            'body' => 'Some World content 3',
        ],
        [
            'title' => 'Some World title 4',
            'date' => 'January 7, 2021',
            'author' => 'Heli Kopter',
            'body' => 'Some World content 4',
        ],
    ];
    include __DIR__ . '/views/index.php';
});

Router::addRoute('/us', function () {
    $title = 'U.S';
    $posts = [
        [
            'title' => 'Some U.S title 1',
            'date' => 'January 1, 2021',
            'author' => 'Pets',
            'body' => 'Some U.S content 1',
        ],
        [
            'title' => 'Some U.S title 2',
            'date' => 'January 3, 2021',
            'author' => 'Manivald',
            'body' => 'Some U.S content 2',
        ],
        [
            'title' => 'Some U.S title 3',
            'date' => 'January 5, 2021',
            'author' => 'Jorss',
            'body' => 'Some U.S content 3',
        ],
        [
            'title' => 'Some U.S title 4',
            'date' => 'January 7, 2021',
            'author' => 'Heli Kopter',
            'body' => 'Some U.S content 4',
        ],
    ];

    include __DIR__ . '/views/us.php';
});

Router::addRoute('/technology', function () {
    $title = 'Technology';
    $posts = [
        [
            'title' => 'Very good tahvel',
            'date' => 'September 22, 2026',
            'author' => 'Rainer Tahker',
            'body' => 'Eternal Blue'

        ],
        [
            'title' => 'Kas sellest piisab?',
            'date' => 'September 28, 2008',
            'author' => 'Rainer T',
            'body' => 'NotPetya'

        ],
        [
            'title' => 'AI is not the way',
            'date' => 'September 5, 2029',
            'author' => 'Futuristic Genius',
            'body' => 'WannaCry'

        ],
        [
            'title' => "I'm out of ideas",
            'date' => 'September 22, 2026',
            'author' => 'Minecraft',
            'body' => 'Timo: "Kuidas projektiga läheb" (päriselt praegu ütles, kui technology page teen)'

        ],
    ];
    include __DIR__ . '/views/technology.php';
});

Router::addRoute('/test', function () {
    $db = new App\DB();
});

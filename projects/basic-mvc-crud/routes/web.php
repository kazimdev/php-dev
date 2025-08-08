<?php

use App\Core\Router;


Router::get('/', [HomeController::class, 'index']);

Router::get('/about', function () {
    echo 'This is About Page';
});

Router::get('/contact', function () {
    echo '<h1>This is Contact Page</h1>';
});


Router::post('/user', function () {
    echo 'This is User Post Controller';
});

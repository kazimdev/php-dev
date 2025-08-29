<?php

use App\Core\Router;
use App\Controllers\Auth\RegisterController;

// Router::get('/', [HomeController::class, 'index']);

Router::get('/register', [RegisterController::class, 'index']);
Router::post('/register', [RegisterController::class, 'store']);

Router::get('/', 'HomeController@index');

Router::get('/service', function () {
    echo '<h1>This is Service Page</h1>';
});

Router::get('/about', function () {
    echo '<h1>This is About Page</h1>';
});

Router::get('/contact', function () {
    echo '<h1>This is Contact Page</h1>';
});


Router::post('/user', function () {
    echo 'This is User Post Controller';
});

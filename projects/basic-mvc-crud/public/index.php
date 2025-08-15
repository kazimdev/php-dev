<?php

require_once __DIR__ . '/../app/Core/Model.php';
require_once __DIR__ . '/../app/Models/Home.php';

require_once __DIR__ . '/../app/Core/Controller.php';
require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../routes/web.php';

use App\Core\Router;

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

Router::dispatch($uri, $method);

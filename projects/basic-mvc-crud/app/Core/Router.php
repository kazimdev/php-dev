<?php

namespace App\Core;

class Router
{
    protected static $routes = [];

    public static function get($uri, $action)
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, $action)
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function dispatch($uri, $method)
    {
        $uri = explode('/', parse_url($uri, PHP_URL_PATH));

        $uri = end($uri);

        $uri = '/' . $uri;

        $routes = self::$routes[$method] ?? [];

        if (!array_key_exists($uri, $routes)) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        $action = $routes[$uri];

        if (is_callable($action)) {
            call_user_func($action);
        }

        // Last class was Ended here.

        // elseif (is_string($action)) {
        //     // If it's a Controller@method
        //     [$controller, $method] = explode('@', $action);
        //     $controllerClass = "App\\Controllers\\$controller";
        //     $controllerFile = __DIR__ . "/../Controllers/$controller.php";

        //     if (!file_exists($controllerFile)) {
        //         http_response_code(500);
        //         echo "Controller file not found.";
        //         return;
        //     }

        //     require_once $controllerFile;
        //     $controllerInstance = new $controllerClass;

        //     if (!method_exists($controllerInstance, $method)) {
        //         http_response_code(500);
        //         echo "Method $method not found in controller $controllerClass.";
        //         return;
        //     }

        //     $controllerInstance->$method();
        // } else {
        //     http_response_code(500);
        //     echo "Invalid route action.";
        // }
    }
}

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
        } else if (is_array($action)) {
            $controllerClass = $action[0];

            if (strpos($controllerClass, '\\') === false) {
                if ($uri == '/register' || $uri == '/login') {
                    $controllerClass = "App\\Controllers\\Auth\\$controllerClass";
                } else {
                    $controllerClass = "App\\Controllers\\$controllerClass";
                }
            }

            if ($uri == '/register' || $uri == '/login') {
                $controllerFile = __DIR__ . "/../Controllers/Auth/" . basename(str_replace('\\', '/', $controllerClass)) . ".php";
            } else {
                $controllerFile = __DIR__ . "/../Controllers/" . basename(str_replace('\\', '/', $controllerClass)) . ".php";
            }

            if (!file_exists($controllerFile)) {
                http_response_code(500);
                echo "Controller file not found.";
                return;
            }

            require_once $controllerFile;

            $controllerInstance = new $controllerClass();

            call_user_func_array([$controllerInstance, $action[1]], []);
        } else if (is_string($action)) {

            // print_r($action);

            // Get the controller name and method
            [$controller, $method] = explode('@', $action);

            // get controller class name with namespace
            $controllerClass = "App\\Controllers\\$controller";

            //             print_r($controllerClass);

            /// get controller file path
            $controllerFile = __DIR__ . "/../Controllers/$controller.php";

            // check if file exists
            if (!file_exists($controllerFile)) {
                http_response_code(500);
                echo "Controller file not found.";
                return;
            }

            require_once $controllerFile;

            // create a controller instance
            $controllerInstance = new $controllerClass;

            if (!method_exists($controllerInstance, $method)) {
                http_response_code(500);
                echo "Method $method not found in controller $controllerClass.";
                return;
            }

            $controllerInstance->$method();
        } else {
            http_response_code(500);
            echo "Invalid route action.";
        }
    }
}

<?php

namespace App\Core;

class Controller
{
    function view($view, $data = [])
    {
        extract($data);
        
        require_once __DIR__ . '/../Veiws/' . $view . '.php';
    }
}

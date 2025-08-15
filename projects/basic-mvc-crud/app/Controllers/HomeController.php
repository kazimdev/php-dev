<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Home;
class HomeController extends Controller
{
    public function index()
    {
        $data = Home::get_data();

        return $this->view('home', $data);
    }
}

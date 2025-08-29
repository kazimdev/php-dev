<?php

namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view('register');
    }

    public function store()
    {
        $data = array(
            'your_name' => $_POST['your_name'],
            'your_email' => $_POST['your_email'],
            'your_password' => password_hash($_POST['your_password'], PASSWORD_DEFAULT)
        );

        // Validation 
        //$validated_data = validated($data);

        // Security

        if (isset($_POST['register'])) {
            User::create($data);
        }
    }
}

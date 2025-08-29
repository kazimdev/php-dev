<?php

namespace App\Models;

use App\Core\Model;

class Home extends Model
{
    function get_data()
    {
        $data = [
            'title' => 'This is Home Page',
            'desc' => 'asdfdf asdfdfdas asdfdf'
        ];

        return $data;
    }
}

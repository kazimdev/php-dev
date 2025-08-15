<?php

namespace App\Models;

use App\Core\Model;

class Home extends Model
{
    static function get_data()
    {
        $data = [
            'title' => 'This is Home Page',
            'desc' => 'asdfdf asdfdfdas asdfdf'
        ];

        return $data;
    }
}

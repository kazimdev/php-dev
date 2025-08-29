<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    function __construct() {}

    public static function create($data = [])
    {
        self::insert("users", $data);
    }
}

<?php

require_once __DIR__ . '/user.php';

trait Circle{
    function show(){
        
    }
}

class Rectangle
{
    use Circle;

    private static $length;
    private static $height;

    public function __construct($length, $height)
    {
        self::$length = $length;
        self::$height = $height;

        $this->show();
    }

    public static function create()
    {
        $rect = self::$length * self::$height;

        return $rect;
    }
}

// $first_rect = new Rectangle(20, 30);

// echo $first_rect->create() . "<br/>";

// $second_rect = new Rectangle(10, 10);
// echo $second_rect->create();

$user2 = new User("Mizan", 12);

echo Rectangle::create();

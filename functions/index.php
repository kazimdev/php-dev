<?php

// function PanirFilter($x)
// {
//     $x = "Pure Pani";

//     $x .= " + Lebur Ros";

//     echo $x;
// }

// PanirFilter("Moyla Pani");

// function add($x, $y)
// {
//     $sum = $x + $y;

//     echo $sum;
// }

// add(10, 20);

// echo "<br>";

// add(100, 200);

// echo "<br>";

// add(1.3, 2.5);


function addMultiples(...$x)
{
    // echo "<pre>";
    // print_r($x);

    $sum = 0;

    foreach ($x as $value) {
        $sum += $value;
    }

    return $sum;
}

$my_sum = addMultiples(1, 3, 4, 7, 20, 34, 20, 39);

echo $my_sum;

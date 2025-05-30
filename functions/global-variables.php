<?php

$y = 30; // Global Scope

function myTestFunc() {

    // global $y;

    $x = 100; // Local Scope

    // echo $x;

    $GLOBALS['y'] = 40;

    // echo $GLOBALS['y'];

    $GLOBALS['y'] = 50;

    echo $GLOBALS['y'];
}

myTestFunc();

// echo $y;


// function showSomeList($list){
//     // echo "<pre>";
//     // print_r($list);

//     echo "<ul>";

//     foreach( $list as $key => $item){
//         echo "<li>" . $item . "</li>";
//     }

//     echo "</ul>";
// }

// $myList = array("Item 1", "Item 2", "Item 3", "Item 1", "Item 2", "Item 3");
// showSomeList($myList);


// $newList = array(3, 4, 6, 50, 40);
// showSomeList($newList);


// $anotherList = ["Sagor", "Halim", "Alamin", 400, 500];
// showSomeList($anotherList);
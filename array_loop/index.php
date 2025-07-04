<?php

$my_arr = array("Mosharof", 90, "Halim", true, false); // Indexed

// Multidimensional Array
$persons = array(  
    array( // Associative array
        'id' => "asdfdfasdfdf4343",
        'name' =>  "Mosharof",
        'email' => "mosharof@gmail.com",
        'age' => 10,
        'district' => "Sherpur",
        "country" => "BD"
    ),
    array(
        'name' =>  "Halim",
        'age' => 12,
        'district' => "Bogura",
        "country" => "Saudi Arab",
        "interest" => array("Programming", "Eating", "sdf")
    ),
    array(
        'name' =>  "Tahmina",
        'age' => 12,
        'district' => "Bogura",
        "country" => "Saudi Arab",
        "interest" => array("Programming", "Eating", "sdf")
    ),
);


// // Foreach Loop
echo "<ul>";

foreach ($persons as $person) {
   echo "<li>" . $person['name'] . " - " . $person['age'] . "</li>";
}

echo "</ul>";


// // For Loop

// $arr_len = count($persons);

// echo "<ul>";

// for ($index = 0; $index < $arr_len ; $index++) { 

//     echo "<li>" . $persons[$index]['name'] . " - " . $persons[$index]['age'] . "</li>";

// }

// echo "<ul>";


// // Access Array

// echo "<pre>";
// // print_r($my_arr[2]);

// print_r($persons[0]['name']);
// print_r($persons[1]['age']);

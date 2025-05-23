<?php

// Generate me only 3 very simple problems (not answers) for basic PHP learning using only variable, condition and loop

$my_arr = ["Mosharof", "Alamin", "Tahmina", "Fuad", "asdfdf", "addf", "asddf", "asff", 45, 34, "asdfdf"];

$n = count($my_arr);

for ($index = 0; $index < $n; $index++) {

    if ($index == 2 || $index == 3) {
        // break;
        continue;
    }

    echo $my_arr[$index] . "<br/>";
}


// $end = 100;

// for ($start = 0; $start <= $end; $start++) {

//     echo "<h1>My Number " .  $start . "</h1>";
// }


// while ($start > $end) { // 2. Condition

//     echo $start . "<br/>";

//     $start++; // 3. inc / dec
// }

// echo "Something..";

// do {

//     echo $start . "<br/>";

//     $start++;   
// } while ($start > $end);

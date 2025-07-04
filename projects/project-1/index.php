<?php

// Multiplication Table
?>

<form action="" method="get">
    <label for="my_number">Enter Your Number</label>

    <input type="number" name="my_number" id="my_number">

    <br> <br>

    <input type="submit" name="generate_m_table" value="Generate">
</form>

<div class="result">
    <?php

    $my_number = isset($_GET['my_number']) ? intval($_GET['my_number']) : null;

    if (isset($_GET['generate_m_table'])) {

        if (empty($my_number) || $my_number <= 0) {
            echo "Please provide a positive number.";
            
        } else {
            for ($i = 1; $i <= 10; $i++) {

                $result = $i * $my_number;

                echo "$my_number x $i = $result <br>";

                // echo $my_number . ' x ' . $i . ' = ' . $i * $my_number . ' <br>';
            }
        }
    }

    // echo "2 x 1 = 2 <br>";
    // echo "2 x 2 = 4 <br>";
    // echo "2 x 3 = 6 <br>";
    ?>
</div>
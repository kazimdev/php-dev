<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>

<body>
    <form action="" method="post">
        <label for="your_number">Give Your Number</label> <br>
        <input type="number" name="your_number" id="your_number">

        <br><br>
        <input type="submit" name="generate_table" value="Generate Table">
    </form>

    <div class="result">

        <?php
        if (isset($_POST['generate_table'])) {

            for ($i=1; $i <= 10 ; $i++) { 
                echo  $_POST['your_number'] * $i;
                
                echo "<br>";
            }
           
        }
        ?>

    </div>
</body>

</html>
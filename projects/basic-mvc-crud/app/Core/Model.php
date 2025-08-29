<?php

namespace App\Core;

use mysqli;

class Model
{
    private function db_connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "new_db";

        // Create connection
        $conn = new \mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            // echo "DB Connected <br> <br>";
        }

        return $conn;
    }

    public static function insert($tablename, $data = [])
    {
        $keys = trim(implode(', ', array_keys($data)));

        $values = array_values($data);

        $values = array_map(function ($val) {
            return "'" . $val . "'";
        }, $values);

        $values = trim(implode(', ', $values));

        $instance = new self();

        $conn = $instance->db_connect();

        $sql = "INSERT INTO $tablename ($keys)
VALUES ($values);";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    // Update

    // Delete

    public function get_data()
    {
        // SQL Query

        $data = [];

        return $data;
    }
}

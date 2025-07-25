<?php

class User
{
    public $user_name;
    public $age;

    function __construct($username, $age)
    {
        $this->user_name = $username;
        $this->age = $age;
    }

    function create()
    {
        // SQL Query Methods
        $created = true; // From SQL Query

        $message = "";

        if ($created) {
            $message = $this->user_name . ' has been created successfully';
        } else {
            $message = $this->user_name . ' user creation failed';
        }

        return $message;
    }

    function update($id){
        // GET SQL Query

        // Update SQL

        $updated = true;
    }
}

$user1 = new User("Mosharof", 20);

echo $user1->create();

$user1->update(2);



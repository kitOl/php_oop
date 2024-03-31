<?php

class User 
{
    public $name, $password;

    function save_user()
    {
        echo "Here is code to save User\n";
    }
}

$object = new User;
print_r($object);

$object->name = "Oleg";
$object->password = "mypass";
print_r($object);

$object->save_user();

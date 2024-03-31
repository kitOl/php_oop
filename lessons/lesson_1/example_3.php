<?php

class User
{
    public $name, $password;

    function save_user()
    {
        echo "There are code to save user";
    }
}

class Subscriber extends User
{
    public $phone, $email;

    function display()
    {
        echo "Name [parent feature]: " . $this->name . "\n";
        echo "Pass [parent feature]: " . $this->password . "\n";
        echo "Phone: " . $this->phone . "\n";
        echo "Email: " . $this->email . "\n";
    }
}

$object = new Subscriber;
$object->name = "Oleg";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "oleg@mail.ru";
$object->display();


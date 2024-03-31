<?php

class User 
{
    public $username;
    function __construct($param1, $param2)
    {
        if ($param1 == '' && $param2 == '') {
            $this->username = "Anonymous";
        } else {
            $this->username = $param1 . $param2;
        }    
    }
}

$object = new User('','');
echo "Hello, " . $object->username, "!\n";

<?php

class User 
{
    private $name, $password;

    public function __construct()
    {
        $this->name = null;
        $this->password = null;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_password($pword)
    {
        $this->password = $pword;
    }

    function get_password()
    {
        return $this->password;
    }
}


$object = new User;
print_r($object);

$object->set_password('mypword');
$object->set_name('Alex');
print_r($object);

echo "object name = " . $object->get_name(), "\n";
echo "object password = " . $object->get_password(), "\n";
<?php

class User
{
    public $name;
}

$object1 = new User();
$object1->name = 'Alice';
$object2 = $object1; // !!! Это не копия объекта, но ссылка на один и тот же объект - $object1
$object2->name = 'Ann';

echo "object1 name = " . $object1->name . "\n";
echo "object2 name = " . $object2->name . "\n";

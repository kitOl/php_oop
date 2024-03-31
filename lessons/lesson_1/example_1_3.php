<?php 

class  User 
{
    public $name;
}


$object1 = new User();
$object1->name = 'Alice';
$object2 = clone $object1; // ! Это именно копия объекта, а не ссылка на первый объект
$object2->name = 'Ann';

echo "object1 name = " . $object1->name . "\n";
echo "object2 name = " . $object2->name . "\n";

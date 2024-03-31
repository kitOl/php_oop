<?php

/* !
Конструкторы подкласса
При распространении класса и объявлении собственного конструктора PHP не станет автоматически вызывать метод-конструктор родительского класса. Чтобы обеспечивалось выполнение всего кода инициализации, подкласс всегда должен вызывать родительские конструкторы.
 */

class Wildcat
{
    public $fur;

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent::__construct();
        $this->stripes = "TRUE";
    }
}


$object = new Tiger();
echo "У тигров есть...\n";
echo "Mex: " . $object->fur . "\n";
echo "Полосы: " . $object->stripes, "\n";


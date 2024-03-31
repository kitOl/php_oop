<?php
// Наследование классов

class Dad
{
    function test()
    {
        echo "[Class Dad] Я твой отец\n";
    }
}

class Son extends Dad
{
    function test()
    {
        echo "[Class Son] Я Иван\n";
    }

    function test2()
    {
        echo "[Class Son] Вызов метода из родительского класса (parent::test) -> ";

        parent::test();
    }

    function test3()
    {
        echo "[Class Son] Вызов метода из текущего класса (self::test) -> ";
        self::test();
    }
}

$object = new Son;
$object->test();
$object->test2();
$object->test3();

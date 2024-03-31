<?php

class User
{
    final function copyright() // ! запрет переписывать родительского метода
    {
        echo "Этот Класс создан мной в 2024";
    }
}

class Developer extends User
{
    function copyright() // ! warning
    {
        echo "Класс написал Developer";
    }
}

<?php

printf("В вашей корзине находятся %d покупки", 3);
echo "\n";
printf("Номер вашего билета: %08d", 732);
echo "\n";
printf("В регистре находится двоичное число %b", 7);
echo "\n";
printf("В регистре находится двоичное число %08b", 7);

echo "\n";
$res = printf("Меня зовут %s. Мне %d года, и мое любимое число - шестнадцатиричное %03X", "Тихон", 33, 33);
echo "\n";
var_dump($res);

echo "\n";
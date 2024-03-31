<?php

$paper[] = 'Copier';
$paper[] = 'Inkjet';
$paper[] = 'Laser';
$paper[] = 'Photo';

for ($j = 0; $j < count($paper); $j++) {
    echo "$j: $paper[$j]\n";
}

//========== АССОЦИАТИВНЫЙ МАССИВ

$paper = [];
$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser'] = "Laser Printer";
$paper['photo'] = "Photographic Paper";

echo $paper['laser'], "\n";

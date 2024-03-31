<?php

$arr1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "Элемент массива arr1: " . $arr1[2], "\n";
foreach ($arr1 as $key => $value) {
    echo "$key: $value\n";
}

$arr2 = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper"
);
echo "Элемент массива arr2: " . $arr2['inkjet'], "\n";
foreach ($arr2 as $item => $description) {
    echo "$item: $description\n";
}
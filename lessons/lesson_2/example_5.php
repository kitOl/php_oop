<?php

$numArray = [3, 33, 5, 1, 0, -2, 10];

$strArray = ['long', 'weight', 'short', 'argo', 'bit', 'serso', 'ping'];

// ==== sort
echo "sort()\n";
$res = sort($numArray);
var_dump($res);
print_r($numArray);

echo "sort()\n";
$res = sort($strArray);
var_dump($res);
print_r($strArray);

//===== shuffle and rsort

echo "shuffle()\n";
$res = shuffle($numArray);
var_dump($res);
print_r($numArray);

echo "rsort()\n";
$res = rsort($numArray);
var_dump($res);
print_r($numArray);

echo "shuffle()\n";
$res = shuffle($strArray);
var_dump($res);
print_r($strArray);

echo "rsort()\n";
$res = rsort($strArray);
var_dump($res);
print_r($strArray);
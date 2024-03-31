<?php

$temp = [
    'name' => 'Oleg',
    'age' => 53,
    'married' => false,
    'interest' => "code programming",
];

print_r($temp);

foreach ($temp as $key => $value) {
    if ($value === false) {
        reset($temp);
        break;
    }
    // echo "$value\n";
}

$first = reset($temp);
echo "first element = $first\n";

$last = end($temp);
echo "last element = $last\n";

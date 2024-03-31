<?php

$products = [
    'paper' => [

        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper",
    ],

    'pens' => [

        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers",
    ],

    'misc' => [

        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips",
    ]
    ];

    echo "<pre>";

    foreach ($products as $section => $items) {
        foreach ($items as $key => $value) {
            echo "$section:\t$key\t($value)\n";
        }
    }

    echo "size of array: " . sizeof($products), "\n"; // 3

    echo "count elements in array: " . count($products, 1), "\n"; // 13 ?
    echo "count elements in array: " . count($products, COUNT_RECURSIVE), "\n"; // 13 ?
    
    echo "real count elements in array: " . array_sum(array_map('count', $products)), "\n"; // 10 !!!
    echo "real count elements in array: " . (count($products, COUNT_RECURSIVE) - sizeof($products)), "\n"; // 10 !!!


    echo "</pre>";
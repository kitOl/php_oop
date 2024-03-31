<?php

$chessboard = [
    ['r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'],
    ['p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'],
    ['-', '-', '-', '-', '-', '-', '-', '-'],
    ['-', '-', '-', '-', '-', '-', '-', '-'],
    ['-', '-', '-', '-', '-', '-', '-', '-'],
    ['-', '-', '-', '-', '-', '-', '-', '-'],
    ['P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'],
    ['R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R']
];

// echo "<pre>";

foreach ($chessboard as $row) {
    foreach ($row as $piece) {
        echo "$piece ";
    }
    echo "\n";
}

// echo "chessboard[7][3] = " . $chessboard[7][3], "\n";

echo "count elements in array: " . count($chessboard, COUNT_RECURSIVE), "\n"; // 72 ?
echo "count elements in array: " . count($chessboard, 1), "\n"; // 72 ?
echo "size of array: " . sizeof($chessboard), "\n"; // 8

echo "real count elements in array: " . array_sum(array_map('count', $chessboard)), "\n"; // 64 !
echo "real count elements in array: " . (count($chessboard, 1) - sizeof($chessboard)), "\n"; // 64 !

echo "element in array: " . in_array('P',$chessboard), "\n";
var_dump(in_array('P',$chessboard));

// echo "</pre>";
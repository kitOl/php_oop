<?php

$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($contact);

$contact = compact(explode(' ', 'fname sname planet system constellation'));
print_r($contact);

// === extract

echo "EXTRACT\n";
$fname = $sname = $planet = $system = $constellation = '';
$res = extract($contact);
var_dump($res);
echo "fname = $fname\n";
echo "sname = $sname\n";
echo "planet = $planet\n";
echo "system = $system\n";
echo "constellation = $constellation\n";

echo "\$_POST\n";
print_r($_POST);
$_POST = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($_POST);
echo "EXTRACT 'frompost' prefix\n";
extract($_POST, EXTR_PREFIX_ALL, 'frompost');
echo "fname = $frompost_fname\n";
echo "sname = $frompost_sname\n";
echo "planet = $frompost_planet\n";
echo "system = $frompost_system\n";
echo "constellation = $frompost_constellation\n";

<?php

use App\Developer;
use App\Visitor;
use App\Worker;

require_once('./vendor/autoload.php');

$developer = new Developer('Oleg', 54, [5, 6, 7]);

// $developer->setPosition('developer');
// var_dump($developer->getPosition());

var_dump($developer);

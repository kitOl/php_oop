<?php

use App\Visitor;
use App\Worker;

require_once('./vendor/autoload.php');

$worker = new Worker();
$visitor = new Visitor();

var_dump($worker);

$worker->work();
$visitor->visit();

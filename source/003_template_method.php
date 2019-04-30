<?php

use App\TemplateMethod\CharDisplay;
use App\TemplateMethod\StringDisplay;

require '../vendor/autoload.php';

$d1 = new CharDisplay('H');
$d2 = new StringDisplay('Hello, World');
$d3 = new StringDisplay('こんにちは。');
$d1->display();
$d2->display();
$d3->display();
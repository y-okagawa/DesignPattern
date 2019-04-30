<?php

use App\Adapter\PrintBanner;

require '../vendor/autoload.php';

$print = new PrintBanner('Hello');
$print->printWeak();
$print->printStrong();
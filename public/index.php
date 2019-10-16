<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new SayHello();
$talk = new \App\Wcs\Hello();

echo $talk -> talk();
echo '<br>';
echo SayHello:: world();
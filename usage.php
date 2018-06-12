<?php

use Loftschool\Image;
use \Loftblog\Image as LoftImage;

require "loftblog.php";
require "loftschool.php";


$object1 = new Image();
$object1->sayHi();
echo PHP_EOL;
$object2 = new LoftImage();
$object2->sayHi();
echo PHP_EOL;

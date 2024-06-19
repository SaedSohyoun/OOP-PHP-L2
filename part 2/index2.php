<?php
declare(strict_types=1);

require_once 'Typbijarg.php';

$Typbijarg1 = new Typbijarg( name: 'Avatar', genre: 'fantasy', seen: 5);

echo $Typbijarg1->getName();

var_dump($Typbijarg1);
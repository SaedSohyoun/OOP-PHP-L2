<?php
declare(strict_types=1);

require_once 'Propertydatatypes.php';

$Propertydatatypes1 = new Propertydatatypes( name: 'Avatar', genre: 'fantasy', seen: 5);

echo $Propertydatatypes1->getName();

var_dump($Propertydatatypes1);

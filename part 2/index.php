<?php

require_once 'Typesdoc.php';

$Typesdoc1 = new Typesdoc( name: 4, genre: ['fantasy' ,'sf'], seen: 5);

echo $Typesdoc1->getName();

var_dump($Typesdoc1);

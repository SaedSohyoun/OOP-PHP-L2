<?php

require_once 'Person.php';
require_once 'Group.php';

class Student extends Person {
    public $heeftBetaald = false;
    public $groep;

    public function __construct($naam, $leeftijd, Group $groep, $heeftBetaald = false) {
        parent::__construct($naam, $leeftijd);
        $this->groep = $groep;
        $this->heeftBetaald = $heeftBetaald;
        if ($heeftBetaald) {
            Person::collectPayment(10); // Stel betaling is 10 eenheden
        }
    }
}
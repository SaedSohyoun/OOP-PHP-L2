<?php

require_once 'Person.php';

class Teacher extends Person {
    public static $teachers = [];

    public function __construct($naam, $leeftijd) {
        parent::__construct($naam, $leeftijd);
        self::$teachers[] = $this;
    }
}
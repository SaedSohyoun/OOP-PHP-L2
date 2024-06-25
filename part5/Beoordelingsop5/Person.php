<?php

abstract class Person {
    public $naam;
    public $leeftijd;
    public static $totalCollectedAmount = 0;

    public function __construct($naam, $leeftijd) {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
    }

    public static function collectPayment($amount) {
        self::$totalCollectedAmount += $amount;
    }
}
<?php

class SavingsAccount extends BankAccount {
    private $interestRate;

    public function __construct($accountNumber, $balance, $interestRate) {
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $this->balance += $this->balance * $this->interestRate;
    }
}

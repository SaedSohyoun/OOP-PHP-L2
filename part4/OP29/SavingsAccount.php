<?php

class SavingsAccount extends BankAccount {
    private $interestRate;

    public function __construct(string $accountNumber, float $balance, float $interestRate) {
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function addInterest(): void {
        $this->balance += $this->balance * $this->interestRate;
    }
}

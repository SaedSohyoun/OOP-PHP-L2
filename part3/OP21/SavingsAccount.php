<?php

require_once 'BankAccount.php';

class SavingsAccount extends BankAccount {
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate) {
        parent::__construct($accountNumber, $accountHolder, $balance, 'Savings');
        $this->interestRate = $interestRate;
    }

    public function getAccountDetails(): array {
        $details = parent::getAccountDetails();
        $details['Interest Rate'] = $this->interestRate;
        return $details;
    }
}
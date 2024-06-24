<?php

require_once 'BankAccount.php';

class SavingsAccount extends BankAccount {
    private float $interestRate;

    public function setSavingsAccount(string $accountNumber, string $accountHolder, float $balance, float $interestRate): void {
        $this->setAccount($accountNumber, $accountHolder, $balance);
        $this->interestRate = $interestRate;
    }

    public function getAccountDetails(): array {
        $details = parent::getAccountDetails();
        $details['Interest Rate'] = $this->interestRate;
        $details['Account Type'] = 'Savings';
        return $details;
    }
}
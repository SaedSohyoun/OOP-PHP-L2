<?php

require_once 'BankAccount.php';

class SavingsAccount extends BankAccount {
    private float $interestRate;

    public function setSavingsAccount(string $accountNumber, string $accountHolder, float $balance, float $interestRate): void {
        $this->setAccount($accountNumber, $accountHolder, $balance);
        $this->interestRate = $interestRate;
        $this->setType('Savings'); // Set the account type
    }

    public function getAccountDetails(): array {
        $details = parent::getAccountDetails();
        $details['Interest Rate'] = $this->interestRate;
        return $details;
    }
}
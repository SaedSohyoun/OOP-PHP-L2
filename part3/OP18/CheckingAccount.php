<?php

require_once 'BankAccount.php';

class CheckingAccount extends BankAccount {
    private float $overdraftLimit;

    public function setCheckingAccount(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit): void {
        $this->setAccount($accountNumber, $accountHolder, $balance);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw(float $amount): bool {
        if ($amount > ($this->balance + $this->overdraftLimit)) {
            return false;
        }
        $this->balance -= $amount;
        return true;
    }

    public function getAccountDetails(): array {
        $details = parent::getAccountDetails();
        $details['Overdraft Limit'] = $this->overdraftLimit;
        $details['Account Type'] = 'Checking';
        return $details;
    }
}
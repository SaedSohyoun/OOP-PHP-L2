<?php

require_once 'BankAccount.php';

class CheckingAccount extends BankAccount {
    private float $overdraftLimit;

    public function setCheckingAccount(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit): void {
        $this->setAccount($accountNumber, $accountHolder, $balance);
        $this->overdraftLimit = $overdraftLimit;
        $this->setType('Checking'); // Set the account type
    }

    public function withdraw(float $amount): bool {
        if ($this->validateWithdrawal($amount - $this->overdraftLimit)) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getAccountDetails(): array {
        $details = parent::getAccountDetails();
        $details['Overdraft Limit'] = $this->overdraftLimit;
        return $details;
    }
}
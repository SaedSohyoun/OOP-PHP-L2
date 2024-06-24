<?php

require_once 'BankAccount.php';

class CheckingAccount extends BankAccount {
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit) {
        parent::__construct($accountNumber, $accountHolder, $balance, 'Checking');
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw(float $amount): bool {
        if ($this->balance - $amount >= -$this->overdraftLimit) {
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
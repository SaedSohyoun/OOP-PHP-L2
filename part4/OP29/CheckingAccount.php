<?php

class CheckingAccount extends BankAccount {
    private $overdraftLimit;

    public function __construct(string $accountNumber, float $balance, float $overdraftLimit) {
        parent::__construct($accountNumber, $balance);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw(float $amount): void {
        if ($amount <= $this->balance + $this->overdraftLimit) {
            $this->balance -= $amount;
        } else {
            throw new \Exception("Overdraft limit exceeded");
        }
    }
}

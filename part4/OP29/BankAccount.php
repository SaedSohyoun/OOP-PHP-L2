<?php

class BankAccount {
    protected $accountNumber;
    protected $balance;

    public function __construct(string $accountNumber, float $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            throw new \Exception("Insufficient funds");
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}

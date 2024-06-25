<?php

class BankAccount {
    protected $accountNumber;
    protected $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            throw new \Exception("Insufficient funds");
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

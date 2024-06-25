<?php

class CheckingAccount extends BankAccount {
    private $overdraftLimit;

    public function __construct($accountNumber, $balance, $overdraftLimit) {
        parent::__construct($accountNumber, $balance);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance + $this->overdraftLimit) {
            $this->balance -= $amount;
        } else {
            throw new \Exception("Overdraft limit exceeded");
        }
    }
}

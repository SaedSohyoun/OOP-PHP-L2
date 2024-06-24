<?php

class BankAccount {
    protected string $accountNumber;
    protected string $accountHolder;
    protected float $balance;
    protected string $accountType; // New protected property

    public function setAccount(string $accountNumber, string $accountHolder, float $balance): void {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function setType(string $accountType): void {
        $this->accountType = $accountType; // Set the account type
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): bool {
        if ($this->validateWithdrawal($amount)) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    protected function validateWithdrawal(float $amount): bool {
        return $this->balance - $amount >= 0;
    }

    public function getAccountDetails(): array {
        return [
            'Account Number' => $this->accountNumber,
            'Account Holder' => $this->accountHolder,
            'Balance' => $this->balance,
            'Account Type' => $this->accountType,
        ];
    }
}
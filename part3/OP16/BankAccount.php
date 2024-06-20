<?php

class BankAccount {
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, string $accountType): void {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): bool {
        if ($amount > $this->balance) {
            return false;
        }
        $this->balance -= $amount;
        return true;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function getAccountDetails(): array {
        return [
            'Account Number' => $this->accountNumber,
            'Account Holder' => $this->accountHolder,
            'Balance' => $this->balance,
            'Account Type' => $this->accountType
        ];
    }
}

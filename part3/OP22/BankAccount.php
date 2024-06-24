<?php

class BankAccount {
    protected string $accountNumber;
    protected string $accountHolder;
    protected float $balance;
    protected string $accountType;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): bool {
        if ($this->balance - $amount >= 0) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function getAccountInfo(): string {
        return "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance}, Account Type: {$this->accountType}";
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
<?php

class BankAccount
{
    public string $accountNumber;
    public float $balance;

    public function __construct(string $accountNumber, float $balance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $newAccountNumber): void
    {
        $this->accountNumber = $newAccountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): bool
    {
        if ($amount > 0)
        {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function withdraw(float $amount): bool
    {
        if ($amount > 0 && $amount <= $this->balance)
        {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount(accountNumber: "123456", balance: 50.00);

echo "Uw bankaccount nummer is: " . $account->getAccountNumber() . "<br>";
echo "Uw huidige saldo is: € " . number_format($account->getBalance(), 2) . "<br>";

if ($account->withdraw(15))
{
    echo "U heeft € 15 opgenomen. Uw huidige saldo is: € " . number_format($account->getBalance(), 2) . "<br>";
}

if ($account->deposit(20))
{
    echo "U heeft € 20 op uw bankaccount gezet. Uw huidige saldo is: € " . number_format($account->getBalance(), 2) . "<br>";
}

if (!$account->withdraw(100))
{
    echo "U heeft onvoldoende saldo om € 100.00 op te nemen.<br>";
}

$account->setAccountNumber("98765");
echo "Uw bankaccount nummer is gewijzigd in: " . $account->getAccountNumber() . "<br>";

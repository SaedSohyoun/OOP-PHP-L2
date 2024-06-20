<?php

require_once 'BankAccount.php';
require_once 'BankList.php';

$account1 = new BankAccount();
$account1->setAccount('123456789', 'Alice Smith', 1000.00, 'Savings');

$account2 = new BankAccount();
$account2->setAccount('987654321', 'Bob Johnson', 500.00, 'Checking');

$account3 = new BankAccount();
$account3->setAccount('555555555', 'Charlie Brown', 1500.00, 'Savings');

$bankList = new BankList();
$bankList->addAccount($account1);
$bankList->addAccount($account2);
$bankList->addAccount($account3);

function printAccounts(BankList $bankList): void {
    $accounts = $bankList->getAccounts();
    echo "<table border='1'>";
    echo "<tr><th>Account Number</th><th>Account Holder</th><th>Balance</th><th>Account Type</th></tr>";
    foreach ($accounts as $account) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($account['Account Number']) . "</td>";
        echo "<td>" . htmlspecialchars($account['Account Holder']) . "</td>";
        echo "<td>" . htmlspecialchars(number_format($account['Balance'], 2)) . "</td>";
        echo "<td>" . htmlspecialchars($account['Account Type']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

printAccounts($bankList);

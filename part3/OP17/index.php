<?php

require_once 'SavingsAccount.php';
require_once 'CheckingAccount.php';
require_once 'BankList.php';

$savingsAccount = new SavingsAccount('123456789', 'Alice Smith', 1000.00, 0.03);
$checkingAccount = new CheckingAccount('987654321', 'Bob Johnson', 500.00, 200.00);

$bankList = new BankList();
$bankList->addAccount($savingsAccount);
$bankList->addAccount($checkingAccount);

function printAccounts(BankList $bankList): void {
    $accounts = $bankList->getAccounts();
    echo "<table border='1'>";
    echo "<tr><th>Account Number</th><th>Account Holder</th><th>Balance</th><th>Interest Rate / Overdraft Limit</th><th>Account Type</th></tr>";
    foreach ($accounts as $account) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($account['Account Number']) . "</td>";
        echo "<td>" . htmlspecialchars($account['Account Holder']) . "</td>";
        echo "<td>" . htmlspecialchars(number_format($account['Balance'], 2)) . "</td>";
        if ($account['Account Type'] == 'Savings') {
            echo "<td>" . htmlspecialchars($account['Interest Rate']) . "</td>";
        } else {
            echo "<td>" . htmlspecialchars($account['Overdraft Limit']) . "</td>";
        }
        echo "<td>" . htmlspecialchars($account['Account Type']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

printAccounts($bankList);
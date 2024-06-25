<?php
require_once 'BankAutoloader.php';

use BankAccount;
use SavingsAccount;
use CheckingAccount;
use BankList;

$account1 = new BankAccount("123456", 1000);
$account2 = new SavingsAccount("234567", 2000, 0.05);
$account3 = new CheckingAccount("345678", 1500, 500);

$bankList = new BankList();
$bankList->addAccount($account1);
$bankList->addAccount($account2);
$bankList->addAccount($account3);

echo "Total Balance: " . $bankList->getTotalBalance();


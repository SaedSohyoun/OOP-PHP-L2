<?php

require_once 'SavingsAccount.php';
require_once 'CheckingAccount.php';

class BankList {
    private array $bankAccounts = [];

    public function addAccount($account): void {
        $this->bankAccounts[] = $account;
    }

    public function getAccounts(): array {
        $accounts = [];
        foreach ($this->bankAccounts as $account) {
            $accounts[] = $account->getAccountDetails();
        }
        return $accounts;
    }
}
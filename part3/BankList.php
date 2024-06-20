<?php

require_once 'BankAccount.php';

class BankList {
    private array $bankAccounts = [];

    public function addAccount(BankAccount $account): void {
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

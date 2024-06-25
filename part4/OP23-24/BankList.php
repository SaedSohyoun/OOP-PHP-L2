<?php

class BankList {
    private $accounts = [];

    public function addAccount(BankAccount $account) {
        $this->accounts[] = $account;
    }

    public function getTotalBalance() {
        $total = 0;
        foreach ($this->accounts as $account) {
            $total += $account->getBalance();
        }
        return $total;
    }
}

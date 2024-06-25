<?php

class BankList {
    private $accounts = [];

    public function addAccount(BankAccount $account): void {
        $this->accounts[] = $account;
    }

    public function getTotalBalance(): float {
        $total = 0;
        foreach ($this->accounts as $account) {
            $total += $account->getBalance();
        }
        return $total;
    }
}

<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if($amount > 0){
            $this->balance += $amount;
            return "Deposit of $amount sucessfully made. New balance: $this->balance" . PHP_EOL;
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance){
            $this->balance -= $amount;
            return "Withdrawal of $amount sucessfully made. New balance: $this->balance" . PHP_EOL;
        } else {
            return "Insufficient funds. Current balance: $this->balance" . PHP_EOL;
        }
    }
}

$account = new BankAccount(123456789, 1000);
$account->withdraw(999);
$account->deposit(14);
echo "Account Number: " . $account->getAccountNumber() . PHP_EOL;
echo "Current Balance: " . $account->getBalance() . PHP_EOL;
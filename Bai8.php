<?php
class BankAccount {
  private $accountNumber;
  private $balance;

  public function __construct($accountNumber) {
    $this->accountNumber = $accountNumber;
    $this->balance = 0;
  }

  public function getAccountNumber() {
    return $this->accountNumber;
  }

  public function getBalance() {
    return $this->balance;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function withdraw($amount) {
    if ($amount <= $this->balance) {
      $this->balance -= $amount;
    } else {
      echo "The withdrawal amount exceeds the account balance.";
    }
  }
}

// Example usage:
$bankAccount = new BankAccount("1234567890");
echo "Account Number: " . $bankAccount->getAccountNumber() . "<br>";
echo "Balance: " . $bankAccount->getBalance() . "<br>";

$bankAccount->deposit(500);
echo "Balance after deposit: " . $bankAccount->getBalance() . "<br>";

$bankAccount->withdraw(200);
echo "Balance after withdrawal: " . $bankAccount->getBalance() . "<br>";

$bankAccount->withdraw(400);
echo "Balance after second withdrawal: " . $bankAccount->getBalance() . "<br>";
?>
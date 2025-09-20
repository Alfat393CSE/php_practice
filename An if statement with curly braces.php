<?php
$bank_balance = 50; // example starting balance

if ($bank_balance < 100)
{
    $money = 1000;
    $bank_balance += $money;
}

echo $bank_balance; // shows updated balance
?>

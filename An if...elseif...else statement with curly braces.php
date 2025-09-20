<?php
$bank_balance = 150; // example starting balance
$savings = 0; // example savings balance

if ($bank_balance < 100)
{
$money = 1000;
$bank_balance += $money;
}
elseif ($bank_balance > 200)
{
$savings += 100;
$bank_balance -= 100;
}
else
{
$savings += 50;
$bank_balance -= 50;
}
echo $bank_balance; // shows updated balance
?>
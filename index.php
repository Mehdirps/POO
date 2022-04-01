<?php
require_once 'classes/Account.php';
require_once 'classes/CurrentAccount.php';
require_once 'classes/SavingAccount.php';
require_once 'classes/SavingCurrentAccount.php';

$currentAccount1 = new CurrentAccount('Mehdi', 500, 200);

$currentAccount1->setOwner('Julia');

$currentAccount1->remove(700);

var_dump($currentAccount1);

$savingAccount = new SavingAccount('Perrine', 1298, 1.5);

$savingAccount->addIntressting();

var_dump($savingAccount);

$savingCurrentAccount = new SavingCurrentAccount('Mehdi', 1298, 12.5, 150);

$savingCurrentAccount->addIntressting();

$savingCurrentAccount->remove(300);

var_dump($savingCurrentAccount);
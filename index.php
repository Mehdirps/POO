<?php

use App\Client\Account as ClientAccount;
use App\Bank\{CurrentAccount, SavingAccount, SavingCurrentAccount};

require_once 'classes/Bank/Account.php';
require_once 'classes/Bank/CurrentAccount.php';
require_once 'classes/Bank/SavingAccount.php';
require_once 'classes/Bank/SavingCurrentAccount.php';
require_once 'Classes/Client/Account.php';

$currentAccount1 = new CurrentAccount('Mehdi', 500, 200);

$currentAccount1->setOwner('Robert');

$currentAccount1->remove(700);

var_dump($currentAccount1);

$savingAccount = new SavingAccount('Patrick', 1298, 1.5);

$savingAccount->addIntressting();

var_dump($savingAccount);

$savingCurrentAccount = new SavingCurrentAccount('Mehdi', 1298, 12.5, 150);

$savingCurrentAccount->addIntressting();

$savingCurrentAccount->remove(300);

var_dump($savingCurrentAccount);

$client = new ClientAccount;

var_dump($client);
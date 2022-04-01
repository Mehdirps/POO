<?php

use App\Autoload;
use App\Client\Account as ClientAccount;
use App\Bank\{CurrentAccount, SavingAccount, SavingCurrentAccount};

require_once 'Classes/Autoload.php';
Autoload::register();

$client = new ClientAccount('Raposo', 'Mehdi', 'Sens');

$client2 = new ClientAccount('Salut', 'Robert', 'Marseille');

$currentAccount1 = new CurrentAccount($client, 500, 200);

$currentAccount1->setOwner($client2);

$currentAccount1->remove(300);

var_dump($currentAccount1);

// $savingAccount = new SavingAccount('Patrick', 1298, 1.5);

// $savingAccount->addIntressting();

// var_dump($savingAccount);

// $savingCurrentAccount = new SavingCurrentAccount('Mehdi', 1298, 12.5, 150);

// $savingCurrentAccount->addIntressting();

// $savingCurrentAccount->remove(300);

// var_dump($savingCurrentAccount);


// var_dump($client);
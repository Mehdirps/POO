<?php
require_once 'classes/Account.php';
require_once 'classes/CurrentAccount.php';
require_once 'classes/SavingAccount.php';

$current_account1 = new CurrentAccount('Mehdi', 500, 200);

$current_account1->remove(500);

var_dump($current_account1);

// $account1 = new Account('Mehdi',300);

// $account2 = new Account('Perrine', 789);

// if (!empty($_POST)) {

//     if (isset($_POST['name'], $_POST['drop'], $_POST['remove'])
//     ) {
//         var_dump($_POST);
//         $name = $_POST['name'];
//         $drop = floatval($_POST['drop']);
//         $remove = floatval($_POST['remove']);


        // $account1->drop($drop);

        // $account1->remove($remove);
        // $account1->drop(50);

        // $account1->remove(100);

        // echo $account1->getOwner();

        // $account1->setOwner('Julia');

        // $account1->setPay();

        // echo $account1;
//     }
// }
?>
<!-- <form method="POST">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
    <label for="remove">Retiter de l'argent</label>
    <input type="text" name="remove" id="remove">
    <label for="drop">Déposer de l'argent</label>
    <input type="text" name="drop" id="drop">
    <button type="submit">Envoyer</button>
</form> -->
<?php

// $account1->owner = 'Mehdi';

// $account1->pay = 1230.89;

// var_dump($account1, $account2);

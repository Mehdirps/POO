<?php

// const DBHOST = 'localhost';

// const DBUSER = 'root';

// const DBPASS = '';

// const DBNAME = 'trema';

// $dsn = 'mysql:dbname=' . DBNAME . ';host=' . DBHOST;

// try {
//     $pdo = new PDO($dsn, DBUSER, DBPASS);

//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//     $pdo->exec('SET NAMES utf8');
// } catch (PDOException $e) {
//     die($e->getMessage());
// }

// $sql = "SELECT * FROM `user` WHERE `id` = 1 ";

// $query = $pdo->prepare($sql);


// $query->execute();

// $user = $query->fetch();

// $name = $user['nick_name'];

// var_dump($_POST);
// die;
require_once 'classes/Account.php';

$account1 = new Account('Mehdi',300);

$account2 = new Account('Perrine', 789);

// if (!empty($_POST)) {

//     if (isset($_POST['name'], $_POST['drop'], $_POST['remove'])
//     ) {
//         var_dump($_POST);
//         $name = $_POST['name'];
//         $drop = floatval($_POST['drop']);
//         $remove = floatval($_POST['remove']);


        // $account1->drop($drop);

        // $account1->remove($remove);
        $account1->drop(50);

        $account1->remove(100);

        // echo $account1->getOwner();

        $account1->setOwner('Julia');

        // $account1->setPay();

        echo $account1;
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
<p> <?= $account1->viewAccount(); ?> </p>
<p><?= "Le taux d'interêt du compte est de <strong>" . Account::INTRESTING . "</strong> %" ?></p>
<p> <?= $account2->viewAccount() . " " . "avec les intêrets"; ?> </p>
<?php

// $account1->owner = 'Mehdi';

// $account1->pay = 1230.89;

var_dump($account1, $account2);

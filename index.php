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

$account1 = new Account('Mehdi', 590);

$account2 = new Account('Perrine', 789);

$account1->drop(100);

$account2->remove(500);

?>
<p> <?= $account1->viewAccount(); ?> </p>
<p> <?= $account2->viewAccount(); ?> </p>
<?php

// $account1->owner = 'Mehdi';

// $account1->pay = 1230.89;

var_dump($account1, $account2);
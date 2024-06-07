<?php
$host = 'localhost';
$user = 'root';
$password= 'root';
$dbname = 'pdotest';

// Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// $status = 'admin';

// $sql = 'SELECT * FROM users WHERE status = :status';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['status' => $status]);
// $users = $stmt->fetchAll(PDO::FETCH_OBJ);

// foreach ($users as $user) {
//     echo $user->name . '<br>';
// }
$name = 'Karen WIlliams';
$email = 'larst@larst.ch';
$status = 'admin';

$sql = 'INSERT INTO users (name, email, status) VALUES (:name, :email, :status)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email,'status' => $status]);
echo 'added user '. $name. '<br>';
?>

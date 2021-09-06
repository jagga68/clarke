<?php


$host = '127.0.0.1';
$dbname = 'pdo-demo';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     
]; 

try {

    $pdo = new PDO($dsn, $user = 'root', $passwprd = '', $options);
} catch (PDOException $PDOException) {

    throw new PDOException($PDOException->getMessage(), (int) $PDOException->getCode());

}

// $stmt = $pdo->query('SELECT  name FROM users');
// while($row = $stmt->fetch()){
//     echo $row['name'] . '<br>';
// }

// $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND name = ?');
// $email = 'jacek.gadomski@gmail.com';
// $name = 'Jacek Gadomski';
// $stmt->execute([$email, $name]);
// $user = $stmt->fetch();
// print_r($user);


// $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND name = :name');
// $email = 'jacek.gadomski@gmail.com';
// $name = 'Jacek Gadomski';
// $stmt->execute(['email' => $email, 'name' => $name]);
// $user = $stmt->fetch();
// print_r($user);

// $stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
// $name = 'Jane Fox';
// $email = 'jf@gmail.com';
// $stmt->execute(['email' => $email, 'name' => $name]);
// $inserted = $stmt->rowCount();
// print_r($inserted);

// $sql = 'UPDATE users SET email = :email WHERE id = :id';
// $pdo->prepare($sql)->execute(['email' => 'jfox@example.com', 'id' => 2]);

// $stmt = $pdo->query('SELECT name FROM users');
// foreach ($stmt as $row) {
//     echo $row['name'] . '<br>';
// }

// $stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
// $stmt->execute(['id' => 2]);
// $name = $stmt->fetchColumn();
// print_r($name);

// $count = $pdo->query('SELECT count(*) from users')->fetchColumn();
// print_r($count);

require_once 'User.php';
$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_CLASS, User::class);
print_r($users);

?>
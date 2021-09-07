<?php

namespace App\Models;

class UserRepository
{
    private $pdo;

    private function getPdo(): \PDO
    {

        if ($this->pdo === null) {

            $host = '127.0.0.1';
            $dbname = 'pdo-demo';
            $charset = 'utf8mb4';
            $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, 
            ]; 

            try {

                $this->pdo = new \PDO($dsn, $user = 'root', $passwprd = '', $options);
            } catch (\PDOException $PDOException) {

                throw new \PDOException($PDOException->getMessage(), (int) $PDOException->getCode());

            }

        }

        return $this->pdo;

    }

    public function save(array $userData)
    {
        $sql = 'INSERT INTO users (name, email) VALUES (:name, :email)';
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->execute(['name' => $userData['name'], 'email' => $userData['email']]);
        
        // $count = $pdo->query('SELECT count(*) from users')->fetchColumn();
        // return $count;

        return $stmt->rowCount() === 1;

    }

    public function findById($id): ?User
    {
        $sql = 'SELECT * FROM users WHERE id = :id';
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $userArray  = $stmt->fetch(\PDO::FETCH_ASSOC);

         if (!$userArray) {
             return null;
         }

         return $this->makeUser($userArray);

    }

    private function makeUser(array $userData): User
    {
        $user = new User();
        $user->setId($userData['id']);
        $user->setName($userData['name']);
        $user->setEmail($userData['email']);
        $user->setCreated_at(date_create($userData['created_at']));

        return $user;

    }

}

?>
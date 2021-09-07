<?php

namespace App\Models;

class UserRepository extends ModelRepository
{

    public function save(array $userData)
    {
        $sql = 'INSERT INTO users (name, email, user_timezone) VALUES (:name, :email, :user_timezone)';
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->execute([
            'name'              => $userData['name'], 
            'email'             => $userData['email'], 
            'user_timezone'     => $userData['user_timezone'],
        ]);
        
        // $count = $pdo->query('SELECT count(*) from users')->fetchColumn();
        // return $count;

        return $stmt->rowCount() === 1;

    }

    public function findAll()
    {
        $users = $this->getPdo()->query('SELECT * FROM users')->fetchAll(\PDO::FETCH_CLASS, User::class);
        return $users;
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
        //$user->setCreated_at(date_create($userData['created_at']));

        return $user;

    }

}

?>
<?php

namespace App\Model;

abstract class ModelRepository
{
    
    protected $pdo;

    protected function getPdo(): \PDO
    {

        if ($this->pdo === null) {

            $host = '127.0.0.1';
            $dbname = 'clarke-amababa';
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
}

?>
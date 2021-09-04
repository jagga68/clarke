<?php

namespace App\Connection;

use Database\MySQL\Connection;

class MySqlConnection
{

    // public string $databaseUrl;

    // public function __construct(string $databaseUrl = 'mysql-database-url')
    // {
    //     $this->databaseUrl = $databaseUrl;
    // }

public function getDatabaseUrl(): string
{
    $connection = new Connection();
    return $connection->getDatabaseUrl();
}

} 

?>
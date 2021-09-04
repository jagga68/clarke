<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces</title>
</head>
<body>
    <?php

        use Database\MySQL\Connection as MySqlConnection;
        use Database\PostgreSQL\Connection as PostgreSqlConnection;
        require('Database/MySQL/Connection.php');
        require('Database/PostgreSQL/Connection.php');

        $mySqlConnection = new MySQLConnection();
        $postgreSqlConnection = new PostgreSqlConnection();


    ?>
    <h1>Datanase Connections</h1>
    <ul>
        <li><?php echo $mySqlConnection->getDatabaseUrl(); ?></li>
        <li><?php echo $postgreSqlConnection->getDatabaseUrl(); ?></li>
    </ul>
</body>
</html>
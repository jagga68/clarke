<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require 'Connection.php';
        $connection1 = new Connection();
        $connection2 = new Connection();
        $connection3 = new Connection();
        unset($connection2);

        $connection1->setConnectionId('127.0.0.1');  

        print($connection1);

    ?>
    <p><?php echo 'The number of connections is: ' . $connection1->getCount() . '<br>'; ?></p>
    <p><?php echo 'The number of connection ID is: ' . $connection1->connectionId . '<br>'; ?></p>
    <p><?php echo 'The conference ID is: ' . $connection1->conferenceId . '<br>'; ?></p>
</body>
</html>
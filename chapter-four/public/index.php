<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading</title>
</head>
<body>
    <?php

    use App\Connection\MySqlConnection;
    use App\Utility\RandomUtilityClass;

    include('autoload.php');

    $mySqlConnection = new MySqlConnection();
    $utility = new RandomUtilityClass();


    ?>

    <p><?php echo $mySqlConnection->getDatabaseUrl(); ?></p>
    <p><?php echo $utility->status; ?></p>

</body>
</html>
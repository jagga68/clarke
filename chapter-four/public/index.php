<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static </title>
</head>
<body>
    <?php

    // code below is used for autoload

    // use App\Connection\MySqlConnection;
    // use App\Utility\RandomUtilityClass;

    // include('autoload.php');

    // $mySqlConnection = new MySqlConnection();
    // $utility = new RandomUtilityClass();

    // Code below is used for trait example

    // use App\Logging\Logger;
    // use App\Users\Customer;

    // require_once 'autoload.php';

    // $logger = new Logger();
    // $customer = new Customer();
    // $customer->setLogger($logger);

    // Code below is used for late static binding

    use App\Conference\Attendee;
use App\Conference\Host;

require_once 'autoload.php';

    $jag = Attendee::create(['username' => 'Jacek']);

    $gac = new Host;


    ?>

    <p><?=  $gac->getMeta(); ?></p>

</body>
</html>
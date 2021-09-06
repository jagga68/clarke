<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
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

    // use App\Conference\Attendee;
    // use App\Conference\Host;

    // require_once 'autoload.php';
    // $jag = Attendee::create(['username' => 'Jacek']);
    // $gac = new Host;

    // Code below is used for exceptions

use App\Exceptions\BadJsonException;
use App\Exceptions\FileNotFoundException;
use App\Utility\JsonFileReader;

require_once 'autoload.php';
$filename = './../files/inventory.json';

    $jsonFileReader = new JsonFileReader();


    // Version 1
    // try {
    //     $inventory = $jsonFileReader->readFileAsAssociativeArray($filename);
    //     print_r($inventory);
    // } catch(FileNotFoundException $exception) {
    //     // print_r($exception->getMessage() . ' in file ' . $exception->getFile() . ' on line ' . $exception->getLine());
    //     print_r('The file ' . $filename . ' could not be found');
    // } catch (BadJsonException $exception) {

    //     print_r('The file ' . $filename . ' is not properly formatted');
    // }

    // Version 2
    try {
        $inventory = $jsonFileReader->readFileAsAssociativeArray($filename);
        print_r($inventory);
    } catch(FileNotFoundException | BadJsonException $exception) {
        print_r('The file ' . $filename . ' could not be processed. Please check the filepath and the content');
    } catch (Exception $exception) {
        print_r($exception->getMessage() . ' in file ' . $exception->getFile() . ' on line ' . $exception->getLine());
    } finally {
        print_r(PHP_EOL . 'Some final processing.');
    }

    ?>



</body>
</html>
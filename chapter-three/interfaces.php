<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    <?php

        require('DarkSkyApiClient.php');

        $weatherApiClient = new DarkSkyApiClient();
        $forecast = $weatherApiClient->getForecast('New York');

    ?>
    <h1>Weather App</h1>
    <p><?php echo $forecast; ?></p>
</body>
</html>
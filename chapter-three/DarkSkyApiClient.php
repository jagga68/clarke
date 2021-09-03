<?php

require_once('WeatherApiClientInterface.php');

class DarkSkyApiClient implements WeatherApiClientInterface
{
     public function getForecast(string $city)
     {
          return 'It is raining in ' . $city;
     }
}

?>
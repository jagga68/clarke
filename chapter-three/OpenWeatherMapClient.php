<?php

require_once('WeatherApiClientInterface');

class OpenWeatherMapClient implements WeatherApiClientInterface
{
    public function getForecast(string $city)
    {
        return 'It is raining in ' . $city;
    }

}

?>
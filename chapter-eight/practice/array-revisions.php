<?php

use phpDocumentor\Reflection\PseudoTypes\True_;

require './vendor/autoload.php';

$city = [
    'name' => 'Frankfurt',
    'country' => 'Germany',
    'population' => 785000,
    'latitude' => 50.110924,
    'longitude' => 8.682127
];

$cities = [
    [
        'name' => 'Frankfurt',
        'country' => 'Germany',
        'population' => 785000,
        'latitude' => 50.110924,
        'longitude' => 8.682127
    ],
    [
        'name' => 'Mumbai',
        'country' => 'India',
        'population' => 785000,
        'latitude' => 50.110924,
        'longitude' => 8.682127
    ]
];

// array_keys
$return = array_keys($city);
// array_values
$return = array_values($city);
// in_array
$return = in_array('Frankfurt', $city);
// array_key_exists
$return = array_key_exists('latitude', $city);
// array_search
$return = array_search('Germany', $city);
// array_count_values
$numbers = [10,10,20,20,20,20,30,40,50,50,50,50];
$return = array_count_values($numbers);
// array_unique
$return = array_unique($numbers);
// array_column
$return = array_column($cities, 'country');

class City
{
    public string $name;
    public string $country;
    public int $population;
    public float $latitude;
    public float $longitude;

    public function __construct($name, $country, $population, $latitude, $longitude)
    {
        $this->name = $name;
        $this->country = $country;
        $this->population = $population;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}

$cities = [
    new City('Mumbai', 'India', 20667656, 19.076090, 72.877426),
    new City('Frankfurt', 'Germany', 785000, 50.110924, 8.682127)
];
$return = array_column($cities, 'country');

// array_unshift
array_unshift($return, 'Poland', 'Slovakia');
// array_pop
$popped = array_pop($return);
// array_shift
$shifted = array_shift($return);
// array_push
array_push($return, 'Netherland', 'UK');
// array_diff
$array1 = [1,2,3,4,5];
$array2 = [1,2,3,4,5,7];
$diff = array_diff($array2, $array1);
// array_intersect
$intersection = array_intersect($array2, $array1);
// array_slice
$slice = array_slice($array2, 2, 2);
// range
$array3 = range(0, 23, 1.1);
// array_map
$squared = array_map(function($item) {
    return $item ** 2;
}, $array2);
// array_filter
$squaredfiltered = array_filter($squared, function ($item) {
    return $item > 10;
});

$cityFiltered = array_filter($city, function ($item) {
    return in_array($item, ['city', 'town', 'country']);
}, ARRAY_FILTER_USE_KEY);

//array_combine
$keys = ['name', 'country', 'population', 'latitude', 'longitude'];
$citiesArray = [
    ['Frankfurt', 'Germany', 785000, 50.1, 8.68],
    ['Mumbai', 'india', 2345000, 19.1, 72.68],

];
$keyValueCities = [];
foreach ($citiesArray as $city) {
    $keyValueCities[] = array_combine($keys, $city);
}

//array_merge
$mergedCities = array_merge($citiesArray, [
    ['Valencia', 'Spain', 834920, 39.46, -0.37]
]);

// array_replace
$globalConfig = [
    'env' => 'prod',
    'debug' => false,
    'db_name' => 'prod_db'
];

$devConfig = [
    'env' => 'dev',
    'debug' => true,
    'db_name' => 'dev_db'
];

$localConfig = [
    'db_name' => 'my_local_db'
];

$myConfig = array_replace($globalConfig, $devConfig, $localConfig);

// array_sum
$sum = array_sum([1, 2, 3.45, 6, 7.8]);

// array_product
$product = array_product([1, 2, 3.45, 6, 7.8]);
//dd($sum, $product);

// list
$values = [23, 45, 67];
list($a, $b, $c) = $values;
//dd($a, $b, $c);

// explode
$csvString = 'PHP,JavaScript,Python,C';
$languagesArray = explode(',',$csvString);
//dd($languagesArray);

// implode
$languageString = implode('|', $languagesArray);
//dd($languageString);

// compact
$name = 'Frankfurt';
$country = 'Germany';
$population = 785000;
$latitude = 50.110924;
$longitude = 8.682127;

$location = compact('name', 'country', 'population', 'latitude', 'longitude');
dd($location);


 




?>
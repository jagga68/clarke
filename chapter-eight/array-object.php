<?php

require './vendor/autoload.php';

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
    ],
    [
        'name' => 'Valencia',
        'country' => 'Spain',
        'population' => 834920,
        'latitude' => 39.466667,
        'longitude' => 0.375000
    ]
];

class Collection extends ArrayObject
{
    // public function __construct($array = array(), $flags = 0, $iteratorClass = "ArrayIterator")
    // {
    //     parent::__construct($array, $flags, $iteratorClass);
    // }

    public function __construct($array = array())
    {
        parent::__construct($array);
    }

    public function column($column)
    {
        return array_column($this->getArrayCopy(), $column);
    }

    public function zip($keys, $values)
    {
        return array_combine($this->column($keys), $this->column($values));
    }
}

$citiesCollection = new Collection($cities);

// foreach ($citiesCollection as $index => $city) {
//     print "City: {$city['name']} Population: city['population']" . PHP_EOL;
// }

//dd($citiesCollection->column('name'));
//dd(array_combine($citiesCollection->column('name'), $citiesCollection->column('population')));
dd($citiesCollection->zip('name', 'population'));

?>
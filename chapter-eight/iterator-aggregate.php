<?php

require './vendor/autoload.php';

class IterAggDemo implements IteratorAggregate
{

    private array $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        print 'getIterator called' . PHP_EOL;

        return new ArrayIterator($this->items);
    }
}

$mappedArray = [
    'name' => 'Gary',
    'location' => 'Manchester, UK',
    'role' => 'Software Developer'
];

$iterAggDemo = new IterAggDemo($mappedArray);

// foreach ($iterAggDemo as $item => $value) {
//     print "$item: $value" . PHP_EOL; 
// }

$iterator = $iterAggDemo->getIterator();

//dd(iterator_to_array($iterator));
dd($iterator->offsetGet('location')); 


?>
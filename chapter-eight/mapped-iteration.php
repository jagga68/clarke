<?php

require './vendor/autoload.php';

class MappedIteratorDemo implements Iterator, Countable
{

    private array $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function current()
    {
        return current($this->items);
    }

    public function  next()
    {
        return next($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function valid()
    {
        return key($this->items) !== null;
    }

    public function rewind()
    {
        return reset($this->items);
    }

    public function count()
    {
        //return sizeof($this->items);
        return count($this->items);
    }

}

$mappedArray = [
    'name' => 'Gary',
    'location' => 'Manchester, UK',
    'role' => 'Software Developer'
];

$mappedIteratorDemo = new MappedIteratorDemo($mappedArray);

foreach ($mappedIteratorDemo as $item => $value) {
    print "$item: $value" . PHP_EOL;
}

dd(count($mappedIteratorDemo));

?>
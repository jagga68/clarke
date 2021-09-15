<?php

require './vendor/autoload.php';

class ArrayAccessDemoClass implements ArrayAccess
{

    private array $items = [];

     public function offsetExists($offset): bool
     {
         return isset($this->items[$offset]);
     }

     public function offsetGet($offset)
     {

        print 'Getting ' . $offset . PHP_EOL;

        return isset($this->items[$offset]) ? $this->items[$offset] : null;
     }

     public function offsetSet($offset, $value)
     {
           if(is_null($offset)) {
            print 'Setting null ' . $offset . PHP_EOL;
               $this->items[] = $value;
           } else {

                print 'Setting ' . $offset . PHP_EOL;
                $this->items[$offset] = $value;
           }
     }

     public function offsetUnset($offset): void
     {
         unset($this->items[$offset]);
     }
}

$demoObject = new ArrayAccessDemoClass();
 
$demoObject['item-1'] = 'Example item number 1';
$demoObject['item-2'] = 'Example item number 2';
$demoObject[] = 'A random item';

unset ($demoObject['item-two']);

dd($demoObject['item-two']);

?>
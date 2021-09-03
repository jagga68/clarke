<?php

require_once('NonCuboidShape.php');

class Cylinder extends NonCuboidShape
{
     public function volume(): float
     {
         return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
     }
}

?>
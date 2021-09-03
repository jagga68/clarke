<?php

require_once('NonCuboidShape.php');

class Sphere extends NonCuboidShape 
{
    // 4/3 pi*r|3
    public function volume(): float
    {
        return (pi()*pow($this->dimensions['radius'], 3)) * 4 / 3;
    }
}

?>
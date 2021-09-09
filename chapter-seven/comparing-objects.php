<?php

require_once './vendor/autoload.php';

class Math
{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}

class Geometry extends Math
{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b)
    {
        parent::__construct($a, $b);
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}

$math1 = new Math(3, 6);
$math2 = new Geometry(3, 6);

$math1 = $math2;

dd($math1 == $math2);



?>
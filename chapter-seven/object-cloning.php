<?php

require_once './vendor/autoload.php';

class Manager
{
    public int $id;
    public string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

}

class Department
{
    public ?Manager $manager;
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // added for allowing deep clone
    public function __clone()
    {
        if (isset($this->manager)) {
            $this->manager = clone $this->manager;
        }
    }
}

// Referencing the same object

// $department1 = new Department('IT');
// $department2 = $department1;
// $department2->name = 'Sale';
// dd($department1, $department2);

// cloning the object (shallow copy)

// $department1 = new Department('IT');
// $department2 = clone $department1;
// $department2->name = 'Sale';
// dd($department1, $department2);

// cloning the object (deep copy, added __clone to Department class)

$department1 = new Department('IT');
$department1->manager = new Manager(1, 'Jacek G'); 
$department2 = clone $department1;
$department2->name = 'Sale';
$department2->manager->id = 2;
$department2->manager->name = 'Jacky C';
dd($department1, $department2);


?>
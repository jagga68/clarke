<?php

use Manager as GlobalManager;

require_once './vendor/autoload.php';

class Manager
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}

class Department implements Serializable
{
    public ?Manager $manager;
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __sleep()
    {
        echo 'Serializing...' . PHP_EOL;

        return ['name'];
    }

    public function __wakeup()
    {
        echo 'Unserializing... establishing DB connection etc...' . PHP_EOL;
    }

    public function serialize()
    {
        return json_encode([
            'name' => $this->name,
            'manager' => $this->manager,
            'manager_class' => get_class($this->manager)
        ]);
    }

    public function unserialize($serialized)
    {
        $jsonDepartment = json_decode($serialized);
        $this->name = $jsonDepartment->name;
        $this->manager = new $jsonDepartment->manager_class($jsonDepartment->manager->name);
        
    }

}

$department1 = new Department('IT');
$department1->manager = new Manager('Jacek G');

// $department1String = serialize($department1);
// $department2 = unserialize($department1String);
// $department2->name = 'Jacky C';

// deep copy using serialization:
// $department1 = new Department('IT');
// $department1->manager = new Manager('Jacek G');
// $department2 = unserialize(serialize($department1));

// $string = serialize($department1);
// $department2 = unserialize($string);
// dd($department2);

$department1String = serialize($department1); // !!! this will return JSON as serialize function has been implemented by Serializable interface
$department2 = unserialize($department1String);

dd($department2);

?>
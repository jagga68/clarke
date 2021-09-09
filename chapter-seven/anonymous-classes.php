<?php

require_once './vendor/autoload.php';

// bellow is just sample to demonstrate anonymous classes in simplest way

// $randomClass = new class
// {
//     public string $name = 'Anonymous class';


//     /**
//      * Get the value of name
//      */ 
//     public function getName()
//     {
//         return $this->name;
//     }

//     /**
//      * Set the value of name
//      *
//      * @return  self
//      */ 
//     public function setName($name)
//     {
//         $this->name = $name;

//         return $this;
//     }
// };

// $name = $randomClass->getName();
// dd($name);

interface Logger
{
    public function log(string $text);
}

class AppErrorHandler
{

    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}


$appErrorHandler = new AppErrorHandler(new class implements Logger {
    public function log(string $text)
    {
        print $text;
    }
});

$appErrorHandler->getLogger()->log('Logging an error' . PHP_EOL);







?>
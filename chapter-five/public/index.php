<?php

use Symfony\Component\VarDumper\VarDumper;

require_once __DIR__ . '/../vendor/autoload.php'; 

$data = [
    'foo' => 'bar',
    'bar' => 'baz'
];

$jag = new \App\Models\User();
$jag->setId(1);
$jag->setName('Jacek');

VarDumper::dump($jag);

?>
<?php

interface RandomInterface
{

}

class A implements RandomInterface 
{
    
}
class B extends A
{

}

$a = new A();
$b = new B();

if ($b instanceof RandomInterface) {
    echo 'True <br>';
} else {
    echo 'False <br>'; 
}



?>
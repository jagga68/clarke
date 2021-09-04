<?php

namespace App\Utility;

class RandomUtilityClass
{
     public string $status;

     public function __construct(string $status = 'Working!')
     {
         $this->status = $status;
     }
}

?>
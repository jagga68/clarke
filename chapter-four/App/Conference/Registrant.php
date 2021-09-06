<?php

namespace App\Conference;

abstract class Registrant
{
    protected static $meta = 'Conference Registrant';


    /**
     * Get the value of meta
     */ 
    public function getMeta()
    {
        return static::$meta;
    }

} 

?>
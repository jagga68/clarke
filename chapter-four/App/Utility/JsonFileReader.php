<?php

namespace App\Utility;

use App\Exceptions\BadJsonException;
use App\Exceptions\FileNotFoundException;

class JsonFileReader
{
    public function readFileAsAssociativeArray (string $filename): array
    {
        if(!file_exists($filename)){
            throw new FileNotFoundException('The file ' . $filename . ' could not be found');
            
        } 
        
        $content = file_get_contents($filename);
        $items = json_decode($content, true);

        if(!isset($items)){
            throw new BadJsonException('The content of ' . $filename . 'could not be decoded into an array');

        }

        return $items;
    
    }
}

?>
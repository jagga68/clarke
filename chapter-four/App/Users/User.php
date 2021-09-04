<?php

namespace App\Users;

use App\Logging\Logger;

class User
{

    public function setLogger(Logger $logger)
    {
        echo 'Called from user class <br>';
        $this->logger = $logger;
    }
    
}


?>
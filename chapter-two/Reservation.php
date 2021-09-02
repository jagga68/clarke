<?php

class Reservation {

    private $host = 'Host class';
    private $guest = 'Guest class';

    public function cancel(){
        $this->sendCancellationNotification();
        $this->refundGuest();

        echo "... and a lot of other stuff ... <br>";

    }

    private function sendCancellationNotification()
    {
        echo 'Sending notification to ' . $this->host . '<br>';
    }

    private function refundGuest()
    {
        echo 'Refunding to ' . $this->guest . '<br>';
    }

}

?>
<?php

class User {
    public $user;
    public $username;
    public $followerCount;
}

$jagObject = new User();
$jagObject->user = "Jacek";
$jagObject->username = "jagga";
$jagObject->followerCount = 30;

print_r($jagObject);

?>
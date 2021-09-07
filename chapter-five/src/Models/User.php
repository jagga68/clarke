<?php

namespace App\Models;

use DateInterval;
use DateTime;
use DateTimeZone;

class User 
{
    private int $id;
    private string $name;
    private string $email;
    private string $user_timezone;
    // private \DateTime|string $created_at;
    // private \DateTime|string $updated_at;
    private string $created_at;
    private string $updated_at;

     public function __get($name)
     {
          if (property_exists($this, $name)) {
              return $this->$name;
          }
     }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        // this is old version returning string:
        // return $this->created_at;

        // this is new version returning object DateTime
        return new \DateTime($this->created_at);

    }

    public function getUpdatedAt(): \DateTime
    {
        // this is old version returning string:
        // return $this->created_at;

        // this is new version returning object DateTime
        return new \DateTime($this->updated_at);

    }

    public function getLocalTime()
    {
        // $tz = new DateTimeZone($this->user_timezone);
        // $localTime = new DateTime('now', $tz);
        // return $localTime;how

        return date_create('now', new \DateTimeZone($this->user_timezone))->format('G:i');

    }

    // this is first version:

    // public function accountAge()
    // {
    //     $past = date_create($this->created_at);
    //     $now = date_create('now');
    //     $interval = $now->diff($past);

    //     return $interval->days . 'd ' . $interval->h . 'h ' . $interval->i . 'm ' . $interval->s . 's';

    // }

    // this is second version using getter:

    public function accountAge(): \DateInterval
    {
        return date_diff(date_create('now'), $this->getCreatedAt());
    }

    // this is first version:

    // public function isActive(): bool
    // {
    //     $howOldIsAccount=date_diff(date_create('now'), $this->getCreatedAt())->days;
    //     $lastUpdated=date_diff(date_create('now'), $this->getUpdatedAt())->days;

    //     if ($howOldIsAccount < 90)
    //     {
    //         return true;
    //     }
    //     elseif ($lastUpdated < 90)
    //     {
    //         return true;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    // this is second version:

    public function isActive(): bool
    {
        if ($this->accountAge()->days < 90) {
            return true;
        }

        $lastUpdatedInterval = date_diff(date_create('now'), $this->getUpdatedAt());
        return $lastUpdatedInterval->days < 90;

    }




}

?>
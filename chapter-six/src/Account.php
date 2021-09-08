<?php

namespace App;

class Account
{
    private int $accountNumber;
    private User $accountHolder;
    
    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $property => $value)
        {
            if (property_exists($this, $property)) {
                $this->$property = $value; 
            }
        }
    }

    /**
     * Get the value of accountNumber
     */ 
    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    /**
     * Set the value of accountNumber
     *
     * @return  self
     */ 
    public function setAccountNumber(int $accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function setAccountHolder(User $user)
    {
        $this->accountHolder = $user;
    }

    public function getAccountHolder(): User
    {
        return $this->accountHolder;
    }
}

?>
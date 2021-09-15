<?php

namespace App\Model;

class Review
{
    private int $id;
    private int $rating;
    private ?string $body;
    private string $publication_date;
    private Product $product;

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __isset(string $name): bool
    {
        return isset($this->$name);
    }

    /**
     * Get the value of rating
     */ 
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get the value of publicateion_date
     */ 
    public function getPublicationDate(): \DateTimeInterface
    {
        // return $this->publication_date;
        return new \DateTimeImmutable($this->publication_date);

    }
}

?>
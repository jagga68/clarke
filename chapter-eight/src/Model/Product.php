<?php

namespace App\Model;

class Product
{
    private int $id;
    private string $name;
    private int $price;
    private string $description;
    private string $image_name;

    private Collection $reviews;


    public function __construct()
    {
        $this->reviews = new Collection();
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    public function getDisplayPrice(): string
    {
        return number_format($this->getPrice()/100,2);
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of image_name
     */ 
    public function getImage_name()
    {
        return $this->image_name;
    }

    /**
     * Get the value of reviews
     */ 
    public function getReviews()
    {

        if($this->reviews->isEmpty()) {
            // need a ReviewRepository
            $reviewRepository = new ReviewRepository();
            $reviewsArray = $reviewRepository->findForProduct($this->id);    

            $this->reviews = new Collection($reviewsArray);
        }


        return $this->reviews;
    }
}


?>
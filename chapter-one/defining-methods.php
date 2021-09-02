<?php

class Basket {
    public $itemsTotal;
    public $shippingCost;
    public $discountValue;

    public function calculateSubTotal(){
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discountValue;
        return $subTotal;
    }

}

$myBasket = new Basket();
$myBasket->itemsTotal = 5;
$myBasket->shippingCost = 20;
$myBasket->discountValue = 7;

$subTotal = $myBasket->calculateSubTotal();

var_dump($subTotal);

?>
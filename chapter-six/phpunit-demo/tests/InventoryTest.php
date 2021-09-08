<?php

use App\Inventory;
use App\ProductRepository;

class InventoryTest extends \PHPUnit\Framework\TestCase
{

    /** @group db */
    public function testProductsCanBeSet()
    {
        // Setup
        $mockRepo = $this->createMock(ProductRepository::class);

        $inventory = new Inventory($mockRepo);
        
        $mockProductsArray = [
            ['id' => 1, 'name' => 'Acme Radio Knobs'],
            ['id' => 2, 'name' => 'Apple iPhone'],
        ];

        $mockRepo->expects($this->exactly(1))->method('fetchProducts')->willReturn($mockProductsArray);

        // Do something

        $inventory->setProducts();

        // Make assertions
        $this->assertEquals('Acme Radio Knobs', $inventory->getProducts()[0]['name']);
        $this->assertEquals('Apple iPhone', $inventory->getProducts()[1]['name']);
    }













}

?>
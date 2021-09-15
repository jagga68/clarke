<?php

use App\Model\Collection;
use App\Model\ReviewRepository;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function the_Collection_class_can_count_array_values()
    {
        // Setup
        // A Collection of reviews
        $data = (new ReviewRepository())->findForProduct(1);
        $reviews = new Collection($data);

        // Do something
        // Get a Collection with elements
        $ratings = $reviews->column('rating')->countValues();

        // Make assertions
        $this->assertSame(3, $ratings[5]);
        $this->assertSame(3, $ratings[4]);
        $this->assertSame(2, $ratings[3]);
        $this->assertSame(1, $ratings[2]);
        $this->assertSame(1, $ratings[1]);

        $this->assertNotSame([
            5 => 3,
            4 => 3,
            3 => 2,
            2 => 1,
            1 => 1
        ], $ratings->toArray());
    }

    /** @test */
    public function a_collection_can_be_sorted_by_key()
    {
        // Setup
        // A collection with keys in non-sorted order

        $ratings = new Collection([
            4 => 3,
            5 => 3,
            3 => 2,
            1 => 1,
            2 => 1
        ]);

        // Do something
        // Sort the collection
        $ratings->krsort();

        // Make assertions
        $this->assertSame([
            5 => 3,
            4 => 3,
            3 => 2,
            2 => 1,
            1 => 1
        ], $ratings->toArray());
    }

}

?>
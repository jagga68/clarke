<?php

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function a_user_can_be_made_from_an_array()
    {
        // Setup

        $userArray = [
            'name'                  => 'Jacek G',
            'prod_server_access'    => 0,
            'prod_data_access'      => 0,
            'dev_server_access'     => 1,
            'dev_data_access'       => 1,
            'test_server_access'    => 1,
            'test_data_access'      => 1,
        ];

        $user = new User();

        // Do something
        $user->hydrate($userArray);

        // Make assertions
        $this->assertSame('Jacek G', $user->name);
        $this->assertSame(0, $user->prod_server_access);
        $this->assertSame(1, $user->dev_data_access);
        $this->assertSame(1, $user->test_data_access);
    }
}

?>
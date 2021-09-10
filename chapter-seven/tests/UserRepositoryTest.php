<?php

use App\Entity\User;
use App\Entity\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    /** @test */
    public function a_user_can_be_retrieved_from_the_database()
    {
        $userRepo = new UserRepository();

        $user = $userRepo->findById(1);

        $this->assertInstanceOf(User::class, $user);
        $this->assertSame(0, $user->prod_server_access);

    }
}

?>
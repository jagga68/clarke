<?php

use App\Account;
use App\User;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{

    /** @test */
    public function an_account_number_can_be_set()
    {
        // Setup
        $account = new App\Account();   

        // Do something
        $account->setAccountNumber(1);

        // Make assertions
        $this->assertSame(1, $account->getAccountNumber());

    }

    /** @test */
    public function an_account_can_be_related_to_a_user()
    {

        // Setup

        // A user
        $accountHolder = new App\User();

        // An account
        $account = new App\Account();

        // Do something
        $account->setAccountHolder($accountHolder);
    
        // Make assertions
        $this->assertSame($accountHolder, $account->getAccountHolder());

    }

    /** @test */
    public function an_account_can_be_hydrated_on_creation()
    {
        // Setup

         $user = new User();
         $accountNumber = 345;

        // Do something

        $account = new Account(['accountHolder' => $user, 'accountNumber' => $accountNumber]);

        // Make assertions

        $this->assertSame($user, $account->getAccountHolder());
        $this->assertSame($accountNumber, $account->getAccountNumber());
    }

}

?>
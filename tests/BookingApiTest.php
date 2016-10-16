<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookingApiTest extends TestCase
{
    /**
     * A booking API test
     *
     * @return void
     */
    public function testEBookingApi()
    {
        $this->get('/api/event/halldata/1')
             ->seeJson([
                 'is_stand' => true,
        	]);
    }
}

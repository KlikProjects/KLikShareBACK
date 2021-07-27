<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    
    public function test_can_retreive_contacts()
    {
        $response = $this->get(route('ChatContacts'));
        dd($response);
        $response->assertStatus(200);
       
    }
}

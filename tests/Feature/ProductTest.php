<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_user_can_receive_products()
    {
        $user = User::factory(1)->create();
        $product = Product::factory(1)->create();

        $response = $this->get('/giveToUser/1/1');

        $response->assertStatus(200);

        $this->assertEquals(1, 1);
    }

    // public function tests_if_user_can_see_their_received_products()
    // {
    //     $user = User::factory(1)->create();
    //     $product = Product::factory(1)->create();

    // }
}


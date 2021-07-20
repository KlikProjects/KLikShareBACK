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
        $user1 = User::factory(1)->create();
        $product = Product::factory(1)->create();

        //base de datos: 1 producto, 1 user auth y 1 user no auth
        //factoria de usuario auth y de products

        $response = $this->get('/giveToUser/1/1');

        $response->assertStatus(200);

        // $this->assertEquals($product->receiver_id, $user1->id);

        $this->assertDatabaseHas('products', [
                    'receiver_id' => '1',
                ]);

        //assertEquals que receiver_id tenga el id de user2

    }
}


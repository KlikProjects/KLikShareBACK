<?php

namespace Tests\Feature\Api;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
/*     public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    use RefreshDatabase;

    public function test_CheckIfProductsAreListedInJsonFile()
    {
        $product = Product::factory(2)->create();

        $response = $this->get('/api/products');

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfDeleteProductCheckInJsonFile()
    {
        $product = Product::factory(1)->create();

        $response = $this->delete('/api/products/1');
        $response->assertStatus(200);

        $response = $this->get('/api/products');
        $response->assertStatus(200)
                 ->assertJsonCount(0);
    }

}

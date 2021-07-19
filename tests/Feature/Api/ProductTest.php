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

    public function test_CheckCreateProductCheckInJsonFile()
    {
        $response = $this->post('/api/products', [
            'title' => 'Boots',
            'description' => 'Beautifull Boots',
            'image' => 'imageOfBoots',
            'category' => 'clothing',
            'klikcoinsProducts' => 100,
        ]);

        $response = $this->get('/api/products');
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckUpdateProductCheckInJsonFile()
    {
        $response = $this->post('/api/products', [
            'title' => 'Boots',
            'description' => 'Beautifull Boots',
            'image' => 'imageOfBoots',
            'category' => 'clothing',
            'klikcoinsProducts' => 100,
        ]);
        $data = ['klikcoinsProducts' => "100"];
        $response = $this->get('/api/products');
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);


        $response = $this->put('/api/products/1', [
            'title' => 'Boots',
            'description' => 'Beautifull Boots',
            'image' => 'imageOfBoots',
            'category' => 'clothing',
            'klikcoinsProducts' => 200,
        ]);

        $data = ['klikcoinsProducts' => "200"];
        $response = $this->get('/api/products');
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);
    }
}

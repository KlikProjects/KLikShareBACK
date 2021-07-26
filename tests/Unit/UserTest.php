<?php

namespace Tests\Feature\Api;


use App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Facade\FlareClient\Api;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\assertEquals;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_giveToUser_reciver_id()
    {
        $product = Product::factory(1)->create();
        $user = User::factory(1)->create();

        $response = $this->get('api/giveToUser/1/1');

        $response = $this->get(route('apihome'));

        $data = ['receiver_id' => 1];
        $response->assertJsonFragment($data);

    }

    public function test_sum_klikcoins()
    {
        $product1 = Product::factory(1)->create(['klikcoinsProducts'=>30]);
        $product2 = Product::factory(1)->create(['klikcoinsProducts'=>50]);
        
        $user = User::factory(1)->create(['klikcoinsUsers'=>70]);

        $response = $this->get('api/giveToUser/1/1');
        $response = $this->get('api/users');
        

        $data = ['klikcoinsUsers' => 70];
        $response->assertJsonFragment($data);
    }
}



    

<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        do{
            $from = rand(1, 5);
            $to = rand (1, 5);
        } while($from===$to);
        
        return [
            'from' =>$from,
            'to' => $to,
            'text' => $this->faker->sentence,
        ];
    }
}

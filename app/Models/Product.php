<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'klikcoinsProducts',
        'user_id',
        'receiver_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userRequest(){
        return $this->belongsToMany(User::class);
    }

    static function checkIfAlreadySolicited($user, $product) {

        $solicited = false;
        foreach ($user->productRequested as $item) {
            if ($product->id === $item->id) {
                $solicited = true;
            }
        }
        return($solicited);
    }


}


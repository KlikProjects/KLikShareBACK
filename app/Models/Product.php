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
        'klikcoinsProducts'
    ];


    public function user(){
        return $this->belongsToOne(User::class/* , 'product_user' */);
    }
}


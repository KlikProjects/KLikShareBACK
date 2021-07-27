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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userRequest()
    {
        return $this->belongsToMany(User::class);
    }

    public function checkIfAlreadySolicited($user)
    {

        $solicited = false;
        foreach ($user->productRequested as $item) {
            if ($this->id === $item->id) {
                $solicited = true;
            }
        }
        return ($solicited);
    }

    public function isTheCreator($user)
    {

        $isTheCreator = false;
        if ($this->user_id === $user->id) {
            $isTheCreator = true;
        }

        return ($isTheCreator);
    }
}

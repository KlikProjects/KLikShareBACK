<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function getContacts(){

        $user=User::find(Auth::id());
        $products= $user->productRequested();
        
    }
}

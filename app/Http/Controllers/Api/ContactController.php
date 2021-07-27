<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:api']);
    }

    public function getContacts(){

        $user=User::find(Auth::id());
        $products= $user->productRequested();
        return response()->json($products, 200);
        
    }
}

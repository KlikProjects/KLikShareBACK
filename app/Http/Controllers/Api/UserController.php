<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

     public function __construct(){
         $this->middleware(['auth:api']);
     }
    public function getUserData(Request $request){
        // dd($request->user());\
        $user = $request->user();
        return response()->json([
            'id'=>$user->id,
            'email'=>$user->email,
            'name'=>$user->name,
            'klikcoinsUsers'=>$user->klikcoinsUsers,
        ]);
    }
    public function getRequestedProducts(){

        $id = Auth::id();
        $user=User::find($id);
        $products = $user->productRequested;
        return response()->json($products, 200);

    }


}

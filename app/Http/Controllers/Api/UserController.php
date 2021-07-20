<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

     public function __construct(){
         $this->middleware(['auth:api']);
     }
    public function __invoke(Request $request){
        // dd($request->user());
        $user= $request->user();
        return response()->json([
            'id'=>$user->id,
            'email'=>$user->email,
            'name'=>$user->name,
            'klikcoinsUsers'=>$user->klikcoinsUsers,
        ]);
    }


}

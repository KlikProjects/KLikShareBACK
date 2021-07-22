<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'klikcoinsProducts' => $request->klikcoinsProducts,
            'user_id' => $request->user_id
        ]);

        $product->save();
        return response()->json($product, 200);
    }

    public function update(Request $request, $id)
    {
        $product = Product::Find($id);
        $product->update([

            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'klikcoinsProducts' => $request->klikcoinsProducts,
        ]);

        $product->save();
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
    }

    public function request($id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $product->userRequest()->attach($user);
    }

    public function usersRequest($id){

        $product = Product::find($id);
        $usersRequest = $product->userRequest;

        return response()->json($product, 200);
    }

    public function giveToUser($productID, $userID){

        $product = Product::find($productID);
        $product->update([
            'receiver_id'=>$userID
        ]);
        $product->save();
        $this->sumKlikcoins($product);
        return response()->json($product, 200);

    }

    public function sumKlikcoins($product)
    {
        
        $id=Auth::id();
        $user=User::find($id);

        $user->klikcoinsUsers += $product->klikcoinsProducts;
        $user->update([
            'klikcoinsUsers'=> $user->klikcoinsUsers
        ]);
        $user->save();
        return response()->json($user, 200);
    }
}   

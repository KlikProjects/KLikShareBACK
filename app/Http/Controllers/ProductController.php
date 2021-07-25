<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
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
        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productsForms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();

        Product::create([

            'title' => $request->newtitle,
            'description' => $request->newdescription,
            'image' => $request->newimage,
            'category' => $request->newcategory,
            'klikcoinsProducts' => $request->newklikcoins,
            'user_id' => $user->id,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('productsForms.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $isTheCreator = Product::isTheCreator($user, $product);

        if ($isTheCreator) {
            return view('productsForms.edit', compact('product'));
        }
        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::Find($id);

        // $product->update($request->all());
        // $product->save();

        $product->update([

            'title' => $request->newtitle,
            'description' => $request->newdescription,
            'image' => $request->newimage,
            'category' => $request->newcategory,
            'klikcoinsProducts' => $request->newklikcoins,
        ]);


        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $isTheCreator = Product::isTheCreator($user, $product);

        if ($isTheCreator) {
            Product::find($id)->delete();
        }
        return redirect()->route('home');
    }

    public function request($id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $alreadyInscribed = Product::checkIfAlreadySolicited($user, $product);

        if (!$alreadyInscribed) {
            $product->userRequest()->attach($user);
        }

        return redirect()->route('home');
    }

    public function usersRequest($id)
    {

        $product = Product::find($id);
        $usersRequest = $product->userRequest;

        return view('productsForms.usersRequest', compact('usersRequest', 'product'));
    }

    public function giveToUser($productID, $userID)
    {

        $product = Product::find($productID);
        $product->update([
            'receiver_id' => $userID
        ]);
    }

    public function productsReceived()
    {
        $products = Product::all();

        $productsReceived = $products->filter(function ($value, $key) {
            $user = User::find(Auth::id());
            if ($value->receiver_id === $user->id) {
                return $value->id;
            }
        });

        $productsReceived->all();

        return view('productsForms.productsReceived', ["productsReceived" => $productsReceived]);
    }


}

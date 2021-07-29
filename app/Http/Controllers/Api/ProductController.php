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
        $user = Auth::user();


        $product = Product::create([

            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'klikcoinsProducts' => $request->klikcoinsProducts,
            'user_id' => $user->id,
        ]);

        $product->save();
        return response()->json($product, 200);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        $isTheCreator = $product->isTheCreator($user);
        if ($isTheCreator) {

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
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $isTheCreator = $product->isTheCreator($user);

        if ($isTheCreator) {
            $product->delete();
        }
    }

    public function request($id)
    {
        $user = Auth::user();

        $product = Product::find($id);
        $alreadyRequested = $product->checkIfAlreadySolicited($user);

        if (!$alreadyRequested) {
            $product->userRequest()->attach($user);
            return response()->json($user, 200);
        } else {
            return response()->json(null, 500);
        }
    }

    public function unrequest($id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $product->userRequest()->detach($user);
    }

    public function usersRequest($id)
    {
        $product = Product::find($id);
        $usersRequest = $product->userRequest;

        return response()->json($usersRequest, 200);
    }

    public function giveToUser($productID, $userID)
    {

        $product = Product::find($productID);
        $product->update([
            'receiver_id' => $userID
        ]);
        $product->save();
        $this->sumKlikcoins($product);
        return response()->json($product, 200);
    }

    public function sumKlikcoins($product)
    {

        $id = Auth::id();
        $user = User::find($id);

        $user->klikcoinsUsers += $product->klikcoinsProducts;
        $user->update([
            'klikcoinsUsers' => $user->klikcoinsUsers
        ]);
        $user->save();
        return $this->sendResponse($user->name, 'User register successfully.');
    }

    public function productsReceived($id)
    {
        $productsReceived = Product::where('receiver_id', $id)->get();

        return response()->json($productsReceived, 200);
    }

    public function productsDonated($id)
    {
        $productsReceived = Product::where('user_id', $id)->get();

        return response()->json($productsReceived, 200);
    }

    public function search($request)
    {
        $products = Product::where('title', 'LIKE', '%' . $request . '%')->get();

        return response()->json($products, 200);
    }

    public function getUserContacts()
    {
        $user = Auth::user();
        $products = $user->product;
        dd($products);
        foreach ($products as $product) {
            $product->userRequest();
        }
        return response()->json($product, 200);
    }




    public function checkIfRequested($id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        $alreadyRequested = $product->checkIfAlreadySolicited($user);

        if ($alreadyRequested) {
            $requested = true;
        } else {
            $requested = false;
        }
        return response()->json($requested);
    }
    public function myProducts()
    {
        $user = User::find(Auth::id());
        $products = $user->products;
        return response()->json($products, 200);
    }
}

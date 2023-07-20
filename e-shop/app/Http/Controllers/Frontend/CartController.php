<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\ProductImage;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('Frontend.cart.index',compact('carts','total','subtotal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {   
        if($request->ajax()){
            $response['cart'] = Cart::remove($request->rowId);
            $response['count']=Cart::count();
            $response['total']=Cart::total();
            $response['subtotal']=Cart::subtotal();
            return $response;
        }
        // dd(Cart::content());
        return back();
    }
    public function add(Request $request){
        if($request->ajax()){
            $product = Product::find($request->productId);
            $response['cart'] = Cart::add(
                [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->discount ?? $product->price,
                    'qty' => 1,
                    'options' => [
                        'images' => $product->productImages
                    ],
                ]
            );
            $response['count']=Cart::count();
            $response['total']=Cart::total();
            return $response;
        }
        // dd(Cart::content());
        return back();
    }
    public function destroy(){
        Cart::destroy();
        return back();
    }
}

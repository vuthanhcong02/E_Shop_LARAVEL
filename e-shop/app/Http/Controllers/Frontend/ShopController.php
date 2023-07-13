<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id,$limit=4)
    {
        //
        $product = Product::findOrFail($id);
        $avgRating = 0;
        $avgRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if($countRating!=0){
            $avgRating = $avgRating/$countRating;
        }
        $product->avgRating = $avgRating;
        // $relativeProducts = Product::where('tag', $product->tag)
        //                     ->where('id', '!=', $product->id)->get();
        $relatedProducts = Product::where(function ($query) use ($product) {
            $query->where('product_category_id', $product->product_category_id)
                  ->orWhere('tag', $product->tag);
        })
        ->where('id', '!=', $product->id)
        ->limit($limit)
        ->get();
    
        // echo $relativeProducts;
        return view('Frontend.shop.show', compact('product','relatedProducts'));
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
    public function destroy(string $id)
    {
        //
    }
    public function postComment(Request $request, string $id){
        //
        $name = $request->name;
        $email = $request->email;
        $messages = $request->messages;
        $product_id = $request->product_id;
        $user_id = $request->user_id;
        $rating = $request->rating;
        $product = Product::findOrFail($id);
        $comment = new \App\Models\ProductComment();
        $comment->name = $name;
        $comment->email = $email;
        $comment->messages = $messages;
        $comment->product_id = $product_id;
        $comment->user_id = $user_id;
        $comment->rating = $rating;
        $comment->save();
        return redirect()->back();
    }
}

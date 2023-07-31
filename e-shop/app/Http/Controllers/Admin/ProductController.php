<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        if($search){
            $products = Product::where(function ($query) use ($search) {
                $query->where('products.name', 'like', '%'.$search.'%')
                      ->orWhereHas('productTag', function ($query) use ($search) {
                          $query->where('name', 'like', '%'.$search.'%');
                      })
                      ->orWhereHas('productCategory', function ($query) use ($search) {
                          $query->where('name', 'like', '%'.$search.'%');
                      })
                      ->orWhereHas('brand', function ($query) use ($search) {
                          $query->where('name', 'like', '%'.$search.'%');
                      });
            })->paginate(5);
        }else{
             $products = Product::orderBy('id','desc')->paginate(5); 
            
        }
        // $products = Product::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('Dashboard.product.index',compact('products'));
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
        $product = Product::find($id);
        return view('Dashboard.product.show',compact('product'));
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
}

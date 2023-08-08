<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Tag;
use App\Http\Requests\Admin\ProductRequest;
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
        $brands = Brand::all();
        $categories = ProductCategory::all();
        $tags = Tag::all();
        return view('Dashboard.product.create',compact('brands','categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
        $data = $request->all();
        // $data = $request->sku ?? '';
        $data['qty'] = 0;
        $data['featured'] = $request->featured ?? 0;
        $product = Product::create($data);
        return redirect('/admin/product/'.$product->id)->with('notice-success','Product created successfully');
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
        $product = Product::find($id);
        $tags = Tag::all();
        $brands = Brand::all();
        $categories = ProductCategory::all();
        return view('Dashboard.product.edit',compact('tags','brands','categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        //
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        return redirect('/admin/product/'.$product->id)->with('notice-success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/product')->with('notice-success','Product deleted successfully');
    }
}

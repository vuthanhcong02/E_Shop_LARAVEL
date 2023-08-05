<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Http\Requests\Admin\ProductDetailsRequest;
class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
        $product = Product::findorFail($id);
        $productDetails = $product->productDetails()->paginate(5);
        // $productDetails = ProductDetail::orderBy('id','desc')->paginate(7);
        return view('Dashboard.product.detail.index',compact('product','productDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $product = Product::find($id);
        return view('Dashboard.product.detail.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductDetailsRequest $request, string $id)
    {
        //
        $data = $request->all();
        $product = Product::find($id);
        $product->productDetails()->create($data);
        $this->updateQty($id);
        return redirect('/admin/product/'.$id.'/detail')->with('notice-success','Product Detail Added');
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
    public function edit(string $product_id,string $productDetail_id)
    {
        //
        $product = Product::find($product_id);
        $productDetail = ProductDetail::find($productDetail_id);
        return view('Dashboard.product.detail.edit',compact('productDetail','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductDetailsRequest $request, string $product_id, string $productDetail_id)
    {
        //
        $data = $request->all();
        $productDetail = ProductDetail::find($productDetail_id);
        $productDetail->update($data);
        $this->updateQty($product_id);
        return redirect('/admin/product/'.$product_id.'/detail')->with('notice-success','Product Detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product_id, string $productDetail_id)
    {
        //
        $product = ProductDetail::find($productDetail_id);
        $product->delete();
        return redirect('/admin/product/'.$product_id.'/detail')->with('notice-success','Product Detail Deleted');
    }
    public function updateQty(string $product_id){
        $product = Product::find($product_id);
        $productDetails = $product->productDetails;
        $quanty = array_sum(array_column($productDetails->toArray(),'qty'));
        $product->update(['qty' => $quanty]);
    }
}

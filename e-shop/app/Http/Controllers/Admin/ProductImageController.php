<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Utilities\Common;
use App\Models\ProductImage;
use App\Http\Requests\Admin\ProductImageRequest;
class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $product_id)
    {
        //
        $product = Product::find($product_id);
        $productImages = $product->productImages;
        return view('Dashboard.product.image.index',compact('product','productImages'));
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
    public function store(ProductImageRequest $request,string $product_id)
    {
        //
        $data = $request->all();
        // Xử lí hình ảnh
        if($request->hasFile('image')){
            $data['path'] = Common::uploadFile($request->file('image'),'Frontend/img/products');
            unset($data['image']);
            ProductImage::create($data);
        }
        return redirect('/admin/product/'.$product_id.'/image');
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
    public function destroy(string $product_id,string $image_id)
    {
        //
        //Xóa file
        $image_name = ProductImage::find($image_id)->path;
        if($image_name !=''){
            unlink('Frontend/img/products/' . $image_name);
        }
        ProductImage::find($image_id)->delete();
        return redirect('/admin/product/'.$product_id.'/image');
    }
}
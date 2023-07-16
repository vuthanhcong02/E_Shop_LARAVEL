<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
class ShopController extends Controller
{
    public function index(Request $request)
{
    $listProducts = $this->getSortedAndPaginatedProducts($request);
    $categories_name  = ProductCategory::all();
    return view('Frontend.shop.index', compact('listProducts','categories_name'));
}

public function getProductByCategory(string $categoryName, Request $request)
{
    $listProducts = $this->getSortedAndPaginatedProducts($request, $categoryName);
    $categories_name  = ProductCategory::all();
    return view('Frontend.shop.index', compact('listProducts','categories_name'));
}

private function getSortedAndPaginatedProducts(Request $request, $categoryName = null)
{
    $perPage = $request->show ?? 3; 
    $sortBy = $request->sort_by ?? 'lasted';
    $search = $request->search ?? '';

    $products = Product::query();
    
    if ($categoryName) {
        $products->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
            ->select('products.*', 'product_categories.name as categoryName')
            ->where('product_categories.name', $categoryName);
    }

    $products->where(function ($query) use ($search) {
        $query->where('products.name', 'like', '%'.$search.'%')
            ->orWhere('products.tag', 'like', '%'.$search.'%');
    });

    switch ($sortBy) {
        case 'lasted':
            $products->orderBy('id', 'DESC');
            break;
        case 'oldest':
            $products->orderBy('id', 'ASC');
            break;
        case 'name':
            $products->orderBy('name', 'ASC');
            break;
        case 'name-desc':
            $products->orderBy('name', 'DESC');
            break;
        case 'price':
            $products->orderBy('price', 'ASC');
            break;
        case 'price-desc':
            $products->orderBy('price', 'DESC');
            break;
        default:
            $products->orderBy('id', 'DESC');
            break;
    }

    return $products->paginate($perPage)->appends(['sort_by' => $sortBy, 'search' => $search, 'show' => $perPage]);
}

    public function show(string $id, $limit = 4)
    {
        //
        $product = Product::findOrFail($id);
        $avgRating = 0;
        $avgRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0) {
            $avgRating = $avgRating / $countRating;
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
        return view('Frontend.shop.show', compact('product', 'relatedProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function postComment(Request $request, string $id)
    {
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

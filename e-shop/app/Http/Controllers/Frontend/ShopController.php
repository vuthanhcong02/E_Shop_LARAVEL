<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Tag;
class ShopController extends Controller
{
    public function index(Request $request)
    {
        
        $listProducts = $this->getSortedAndPaginatedProducts($request);
        $categories_name  = ProductCategory::all();
        $tags = Tag::all();
        $brands = Brand::all();
        return view('Frontend.shop.index', compact('listProducts','categories_name','brands','tags'));
    }

    public function getProductByCategory(string $categoryName, Request $request)
    {
        $listProducts = $this->getSortedAndPaginatedProducts($request, $categoryName, null);
        $categories_name  = ProductCategory::all();
        $tags = Tag::all();
        $brands = Brand::all();
        return view('Frontend.shop.index', compact('listProducts','categories_name','brands','tags'));
    }
    public function getProductByTag(string $tagName, Request $request){
        // $listProducts = Product::join('tags', 'tags.id', '=', 'products.tag_id')
        //     ->select('products.*', 'tags.name as tagName')
        //     ->where('tags.name', $tagName)
        //     ->paginate(10);
        $listProducts = $this->getSortedAndPaginatedProducts($request, null, $tagName);
        $categories_name  = ProductCategory::all();
        $tags = Tag::all();
        $brands = Brand::all();
        return view('Frontend.shop.index', compact('listProducts','categories_name','brands','tags'));
    }
    private function getSortedAndPaginatedProducts(Request $request, $categoryName = null, $tagName = null)
    {
        $perPage = $request->show ?? 3; 
        $sortBy = $request->sort_by ?? 'lasted';
        $search = $request->search ?? '';
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $pMax = $request->p_max;
        $pMin = $request->p_min;
        $pMax = str_replace('$','', $pMax);
        $pMin = str_replace('$','', $pMin);
        $products = Product::query();    
          
        if ($categoryName) {
            $products->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
                ->select('products.*', 'product_categories.name as categoryName')
                ->where('product_categories.name', $categoryName);
        }
        
        // $products->where(function ($query) use ($search) {
        //     $query->where('products.name', 'like', '%'.$search.'%')
        //         ->orWhere('products.tag', 'like', '%'.$search.'%');
        // });
        if($tagName){
            $products->join('tags', 'tags.id', '=', 'products.tag_id')
            ->select('products.*', 'tags.name as tagName')
            ->where('tags.name', $tagName);
        } 
        $products->where(function ($query) use ($search) {
            $query->where('products.name', 'like', '%'.$search.'%')
                  ->orWhereHas('productTag', function ($query) use ($search) {
                      $query->where('name', 'like', '%'.$search.'%');
                  });
        });
        
        #brands
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids):$products;
        #price
        $products = ($pMax != null && $pMin != null) ? $products->whereBetween('price', [$pMin, $pMax]):$products;

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

        return $products->paginate($perPage)->appends(['sort_by' => $sortBy,'brand' => $brands,'search' => $search, 'show' => $perPage, 'p_max' => $pMax, 'p_min' => $pMin]);
    }
    public function filterBrand(Request $request,$products)
    {
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);

        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids):$products;
        return $products;

    }
    public function show(string $id, $limit = 4)
    {
        //
        $product = Product::findOrFail($id);
        $tags = Tag::all();
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
        //        ->orWhere('tag', $product->tag)
                   ->orWhere('tag_id', $product->tag_id);

        })
        // $relatedProducts = Product::where('product_category_id', $product->product_category_id)
                        ->where('id', '!=', $product->id)
                        ->limit($limit)
                        ->get();
        $categories_name = ProductCategory::all();
        $brands = Brand::all();
        // echo $relativeProducts;
        return view('Frontend.shop.show', compact('product', 'relatedProducts','categories_name','brands','tags'));
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

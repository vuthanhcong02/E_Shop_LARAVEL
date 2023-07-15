<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
       
        $search = $request->search ?? '';
        $search_ListProducts =  Product::where(function ($query) use ($search) {
            $query->where('products.name', 'like', '%'.$search.'%')
                ->orWhere('products.tag', 'like', '%'.$search.'%');
        });
        $listProducts = $this->sortByandShow($request, $search_ListProducts);
        // $listProducts = Product::orderBy('id', 'DESC')->paginate(6);
        $categories_name  = ProductCategory::all();
        return view('Frontend.shop.index', compact('listProducts','categories_name'));
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
    public function sortByandShow(Request $request){
        $perPage = $request->show ?? 3; 
        $sortBy = $request->sort_by ?? 'lasted';
        $search = $request->search ?? '';
        $search_ListProducts =  Product::where(function ($query) use ($search) {
            $query->where('products.name', 'like', '%'.$search.'%')
                ->orWhere('products.tag', 'like', '%'.$search.'%');
        });
        switch ($sortBy) {
            case 'lasted':
                $listProducts = $search_ListProducts
                ->orderBy('id', 'DESC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'lasted', 'search' => $search, 'show' => $perPage]);
                break;
            case 'oldest':
                $listProducts = $search_ListProducts
                ->orderBy('id', 'ASC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'oldest', 'search' => $search, 'show' => $perPage]);
                break;
            case 'name':
                $listProducts = $search_ListProducts
                ->orderBy('name', 'ASC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'name', 'search' => $search, 'show' => $perPage]);
                break;
            case 'name-desc':
                $listProducts = $search_ListProducts
                ->orderBy('name', 'DESC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'name-desc', 'search' => $search, 'show' => $perPage]);
                break;
            case 'price':
                $listProducts = $search_ListProducts
                ->orderBy('price', 'ASC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'price', 'search' => $search, 'show' => $perPage]);
                break;
            case 'price-desc':
                $listProducts = $search_ListProducts
                ->orderBy('price', 'DESC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'price-desc', 'search' => $search, 'show' => $perPage]);
                break;
                default:
                    $listProducts = $search_ListProducts
                    ->orderBy('id', 'DESC')
                    ->paginate($perPage)
                    ->appends(['sort_by' => 'lasted', 'search' => $search, 'show' => $perPage]);
        }
        return $listProducts;
    }
    public function getProductByCategory(string $categoryName, Request $request){
        //
        $perPage = $request->show ?? 3; 
        $sortBy = $request->sort_by ?? 'lasted';
        $search = $request->search ?? '';
        $products = Product::join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
        ->select('products.*', 'product_categories.name as categoryName')
        ->where('product_categories.name', $categoryName);
        switch ($sortBy) {
            case 'lasted':
                $listProducts = $products
                ->orderBy('id', 'DESC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'lasted', 'search' => $search, 'show' => $perPage]);
                break;
            case 'oldest':
                $listProducts = $products
                ->orderBy('id', 'ASC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'oldest', 'search' => $search, 'show' => $perPage]);
                break;
            case 'name':
                $listProducts = $products
                ->orderBy('name', 'ASC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'name', 'search' => $search, 'show' => $perPage]);
                break;
            case 'name-desc':
                $listProducts = $products
                ->orderBy('name', 'DESC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'name-desc', 'search' => $search, 'show' => $perPage]);
                break;
            case 'price':
                $listProducts = $products
                ->orderBy('price', 'ASC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'price', 'search' => $search, 'show' => $perPage]);
                break;
            case 'price-desc':
                $listProducts = $products
                ->orderBy('price', 'DESC')
                ->paginate($perPage)
                ->appends(['sort_by' => 'price-desc', 'search' => $search, 'show' => $perPage]);
                break;
                default:
                    $listProducts = $products
                    ->orderBy('id', 'DESC')
                    ->paginate($perPage)
                    ->appends(['sort_by' => 'lasted', 'search' => $search, 'show' => $perPage]);
        }
        $categories_name  = ProductCategory::all();
       

        return view('Frontend.shop.index', compact('categories_name','listProducts'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\ProductCategory;
use App\Models\Tag;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($limitBlog = 3)
    {
        //
        $featured_Products_Women = Product::where('featured', true)
                                    ->where('product_category_id', 2)
                                    ->get();
        $featured_Products_Man = Product::where('featured', true)
                                    ->where('product_category_id', 1)
                                    ->get();
        $newBlogs = Blog::orderBy('created_at', 'desc')->limit($limitBlog)->get();
        // echo $newBlogs;
        // echo $featured_Products_Women;
        return view('Frontend.index',compact('featured_Products_Women','featured_Products_Man','newBlogs'));
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
    public function destroy(string $id)
    {
        //
    }
}

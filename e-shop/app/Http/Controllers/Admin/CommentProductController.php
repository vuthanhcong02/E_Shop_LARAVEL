<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductComment;
use Illuminate\Http\Request;
use App\Models\Product;
class CommentProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        if(!empty($search)){
            $comments = ProductComment::where('messages','LIKE','%'.$search.'%')
                                        ->orWhere('name','LIKE','%'.$search.'%')
                                        ->orWhereHas('product',function($query) use($search){
                                            $query->where('name','LIKE','%'.$search.'%');
                                        })
                                        ->orderBy('id', 'desc')->paginate(5);
        }else{
            $comments = ProductComment::orderBy('id', 'desc')->paginate(5);
        }
        return view('Dashboard.comment.product.index',compact('comments'));
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
        $comment = ProductComment::find($id);
        return view('Dashboard.comment.product.show',compact('comment'));
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
        $comment = ProductComment::find($id);
        $comment->delete();
        return redirect('admin/comment/product')->with('notice-success','Delete Comment Success');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComment;
class CommentBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        if(!empty($search)){
            $comments = BlogComment::where('messages','LIKE','%'.$search.'%')
                                        ->orWhere('name','LIKE','%'.$search.'%')
                                        ->orWhereHas('blog',function($query) use($search){
                                            $query->where('title','LIKE','%'.$search.'%');
                                        })
                                        ->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $comments = BlogComment::orderBy('id', 'desc')->paginate(5);
        }
        return view('Dashboard.comment.blog.index',compact('comments'));
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
        $comment = BlogComment::find($id);
        return view('Dashboard.comment.blog.show',compact('comment'));
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
        $comment = BlogComment::find($id);
        $comment->delete();
        return redirect('admin/comment/blog-comment')->with('notice-success','Delete Comment Success');
    }
}

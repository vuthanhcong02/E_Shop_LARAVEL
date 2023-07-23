<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\ProductCategory;
use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::all();
        $categories_name = ProductCategory::all();
        $listBlogs = Blog::paginate(4);
        $listBlogRecents = Blog::latest()->take(4)->get();
        return view('Frontend.blog.index', compact('tags', 'categories_name', 'listBlogs', 'listBlogRecents'));
    }
    public function show(string $id)
    {
        $tags = Tag::all();
        $categories_name = ProductCategory::all();
        $blog = Blog::findOrFail($id);
        // Lấy blog trước
        // Lấy blog trước
        $previousBlog = Blog::where('created_at', '<', $blog->created_at)
            ->orderBy('created_at', 'desc')
            ->first();

        // Nếu không có blog trước, xử lý tùy ý
        if ($previousBlog === null) {
            // Ví dụ, lấy blog mới nhất
            $previousBlog = Blog::latest()->first();
        }

        // Lấy blog sau
        $nextBlog = Blog::where('created_at', '>', $blog->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        // Nếu không có blog sau, xử lý tùy ý
        if ($nextBlog === null) {
            // Ví dụ, lấy blog đầu tiên
            $nextBlog = Blog::oldest()->first();
        }

        $listComments = BlogComment::where('blog_id', $id)->get();

        $listBlog = Blog::where('id', '!=', '$id')->paginate(3);
        return view('Frontend.blog.show', compact('blog', 'listBlog', 'tags', 'categories_name', 'previousBlog', 'nextBlog','listComments'));
    }
    public function postComment(Request $request){
        $name = $request->name;
        $email = $request->email;
        $messages = $request->messages;
        $blog_id = $request->segment(3);
        $user_id = $request->user_id;
        // $blog = Blog::findOrFail($id);
        $comment = new BlogComment();
        $comment->name = $name;
        $comment->email = $email;
        $comment->messages = $messages;
        $comment->blog_id = $blog_id;
        $comment->user_id = $user_id;
        $comment->save();
        return redirect()->back();
        // dd($blog_id);
    }
}

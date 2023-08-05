<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Utilities\Common;
use App\Http\Requests\Admin\BlogRequest;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        if(!$search){
            $blogs = Blog::orderBy('id','desc')->paginate(5);
        }
        else{
            $blogs = Blog::where('title','like','%'.$search.'%')
                        ->orWhere('subtitle','like','%'.$search.'%')
                        ->orWhere('category','like','%'.$search.'%')
                        ->orWhere('content','like','%'.$search.'%')
                        ->orWhereHas('user',function($q) use ($search) {
                            $q->where('name','like','%'.$search.'%');
                        })
            ->orderBy('id','desc')->paginate(5);
        }
        // $blogs = Blog::orderBy('id','desc')->paginate(5);
        return view('Dashboard.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $authors = User::where('level',0)
                        ->orWhere('level',1)
                        ->get();
        return view('Dashboard.blog.create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        //
        $data['title'] = $request->title ?? '';
        $data['subtitle'] = $request->subtitle ?? '';
        $data['content'] = $request->content ?? '';
        $data['category'] = $request->category ?? '';
        $data['user_id'] = $request->author ?? '';
        if($request->hasFile('image')){
            $data['image'] = Common::uploadFile($request->file('image'), 'Frontend/img/blog');
        }
        Blog::create($data);
        return redirect('/admin/blog')->with('notice-success', 'Create blog successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('Dashboard.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blog = Blog::findOrFail($id);
        $authors = User::where('level',0)->orWhere('level',1)->get();
        return view('Dashboard.blog.edit',compact('blog','authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        //
        $data['title'] = $request->title ?? '';
        $data['subtitle'] = $request->subtitle ?? '';
        $data['content'] = $request->content ?? '';
        $data['category'] = $request->category ?? '';
        $data['user_id'] = $request->author ?? '';
        $blog = Blog::findOrFail($id);
        if($request->hasFile('image')){
            // Thêm file mới
            $data['image'] = Common::uploadFile($request->file('image'), 'Frontend/img/blog');
            // xoa file cu
            $file_avatar_old = $request->image_old;
            if($file_avatar_old !=''){
                unlink('Frontend/img/blog/'.$file_avatar_old);
            }
        }
        $blog->update($data);
        return redirect('/admin/blog/'.$id)->with('notice-success', 'Update blog successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::findOrFail($id);
        $file_avatar_old = $blog->image;
        if($file_avatar_old !=''){
            unlink('Frontend/img/blog/'.$file_avatar_old);
        }
        $blog->delete();
        return redirect('/admin/blog')->with('notice-success', 'Delete blog successfully');
    }
}

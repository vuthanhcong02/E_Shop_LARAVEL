<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\Admin\CategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search =  $request->search ?? '';
        if(!$search){
            $categories = ProductCategory::orderBy('id','desc')->paginate(5);
        }
        else{
            $categories = ProductCategory::where('name', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')->paginate(5);
        }
        // $categories = ProductCategory::orderBy('id','desc')->paginate(5);
        return view('Dashboard.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        $data = $request->all();
        if(is_numeric($data['name'])){
            return redirect()->back()->with('notice-error','Tên danh mục không được chứa số');
        }
        ProductCategory::create($data);
        return redirect('/admin/category')->with('notice-success','Category created successfully');
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
        $category = ProductCategory::find($id);
        return view('Dashboard.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        //
        $data = $request->all();
        $category = ProductCategory::find($id);
        if(is_numeric($data['name'])){
            return redirect()->back()->with('notice-error','Tên danh muc không được chứa số');
        }
        $category->update($data);
        return redirect('/admin/category')->with('notice-success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = ProductCategory::find($id);
        $category->delete();
        return redirect('/admin/category')->with('notice-success','Category deleted successfully');
    }
}

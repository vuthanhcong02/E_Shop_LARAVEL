<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\Admin\BrandRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        if (!$search) {
            $brands = Brand::orderBy('id','desc')->paginate(5);
        }
        else{
            $brands = Brand::where('name', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')->paginate(5);
        }
        // $brands = Brand::orderBy('id','desc')->paginate(5);
        return view('Dashboard.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Dashboard.brand.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        //
        $data = $request->all();
        if (is_numeric($data['name'])) {
            return redirect()->back()->with('notice-error', 'Trường name không được chứa số.');
        }
        Brand::create($data);
        return redirect('/admin/brand')->with('notice-success','Brand created successfully');
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
        $brand = Brand::find($id);
        return view('Dashboard.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, string $id)
    {
        //
        $data = $request->all();
        $brand = Brand::find($id);
        if(is_numeric($data['name'])){
            return redirect()->back()->with('notice-error', 'Tên brand không được chứa số.');
        }
        $brand->update($data);
        return redirect('/admin/brand')->with('notice-success','Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/admin/brand')->with('notice-success','Brand deleted successfully');
    }
}

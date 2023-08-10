<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryAccesssoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AccessoriesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessoriesCategories=Category::where('parent_id',2)->get();
        return view('admin.pages.categories.accessories.index', ['accessoriesCategories' =>$accessoriesCategories ]);
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
    public function store(categoryAccesssoryRequest $request)
    {
        $request->createAccessoryCategory();
        return redirect()->back()->with('success', 'Category Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.pages.categories.accessories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(categoryAccesssoryRequest $request)
    {
        $validatedData= $request->validated();
        $updateCategory =Category::find($request->cId)->update($validatedData);

        if($updateCategory)
        {
            return redirect()->route('admin.showAccessoryCategories')->with('success', 'Category Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->delete())
        {
            return redirect()->back()->with('success','Category deleted successfully!');
        }
    }
}

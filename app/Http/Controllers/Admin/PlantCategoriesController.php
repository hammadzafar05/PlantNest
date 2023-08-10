<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class PlantCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.categories.plant.index', ['categories' => Category::get()]);
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
    public function store(categoryRequest $request)
    {
        $category = Category::create($request->validated());
        if ($category) {
            return redirect()->back()->with('success', 'Category Added Successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.pages.categories.plant.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(categoryRequest $request)
    {
        $validatedData= $request->validated();
        $updateCategory =Category::find($request->cId)->update($validatedData);

        if($updateCategory)
        {
            return redirect()->route('admin.showCategories')->with('success', 'Category Updated Successfully!');
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

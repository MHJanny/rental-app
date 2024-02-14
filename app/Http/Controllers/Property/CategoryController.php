<?php

namespace App\Http\Controllers\Property;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Hamcrest\Core\IsNot;

class CategoryController extends Controller
{
    public function create()
    {
        $this->authorize('view', Category::class);
        $categories = Category::whereNull('deleted_at')->get();
        return view('backend.category.rent-category',['categories' => $categories]);
    }
    public function store(CategoryRequest $request)
    {
        $this->authorize('create', Category::class);
        Category::create($request->validated());
        return redirect()->back()->with('category-added', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $this->authorize('update', Category::class);
        $category = Category::findOrFail($id);
        return view('backend.category.edit-category',['category' => $category]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $this->authorize('update', Category::class);
        $data = $request->validated();
        $category->update($data);
        return redirect()->back()->with('category-updated', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $this->authorize('delete', $category);
        $category->delete();
        return redirect()->back()->with('category-deleted', 'Category Deleted Successfully');
    }
    
}

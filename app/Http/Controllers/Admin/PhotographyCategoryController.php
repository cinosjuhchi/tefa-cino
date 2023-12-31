<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Admin\PhotographyCategory;
use App\Services\CategoryService;

class PhotographyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PhotographyCategory::all();

        return view('admin.photography.categories', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotographyCategory $photographyCategory)
    {
        return view('admin.photography.categories-edit', compact('photographyCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, PhotographyCategory $photographyCategory, CategoryService $categoryService)
    {
        $data = $request->validated();

        if ($request->has('image')) {
            $image = $categoryService->updateCategoryImage($photographyCategory, $request->file('image'), 'photography');
        }

        $data['image'] = $image ?? $photographyCategory->image;
        $photographyCategory->update($data);

        return to_route('photography-category.index')->with('success', "You're successfully updated the data");
    }
}

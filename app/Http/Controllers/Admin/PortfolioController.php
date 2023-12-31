<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $portfolios = Portfolio::when($request->has('category') && in_array($request->category, ['design', 'photography', 'videography', 'printing']), function ($query) use ($request) {
            return $query->where('category', $request->category);
        })->get();

        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Portfolio::getSortedCategories();

        return view('admin.portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store("portfolios/$request->category", ['disk' => 'public-dir']);

        $datas = [
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image ?? null,
        ];

        Portfolio::create($datas);

        return to_route('portfolio.index')->with('success', 'Data have been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = Portfolio::getSortedCategories();

        return view('admin.portfolio.edit', compact('categories', 'portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        if ($request->has('image')) {
            File::delete(public_path("assets/img/$portfolio->image"));

            $image = $request->file('image')->store("portfolios/$request->category", ['disk' => 'public-dir']);
        }

        $datas = [
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image ?? $portfolio->image,
        ];

        $portfolio->update($datas);

        return to_route('portfolio.index')->with('success', 'Changes have been saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            File::delete(public_path("assets/img/$portfolio->image"));
        }

        $portfolio->delete();

        return to_route('portfolio.index')->with('success', 'Data have been deleted');
    }
}

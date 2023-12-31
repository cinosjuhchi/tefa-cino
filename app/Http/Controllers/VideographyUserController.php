<?php

namespace App\Http\Controllers;

use App\Models\Admin\VideographyCategory;

class VideographyUserController extends Controller
{
    public function index()
    {
        $categories = VideographyCategory::all();
        $routeNames = [
            'Video Syuting' => route('user.videography.vid-syuting', '#pricing'),
            'Video Dokumentasi' => route('user.videography.vid-dokumentasi', '#pricing'),
        ];

        return view('videography.index', compact('categories', 'routeNames'));
    }

    public function syuting()
    {
        $category = VideographyCategory::where('title', 'Video Syuting')->with('plans.features')->first();

        return view('videography.vid-syuting', compact('category'));
    }

    public function dokumentasi()
    {
        $category = VideographyCategory::where('title', 'Video Dokumentasi')->with('plans.features')->first();

        return view('videography.vid-dokumentasi', compact('category'));
    }
}

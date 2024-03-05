<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;

class FrontPageController extends Controller
{
    public function index()
    {
        $latesProperties = Property::with('media')
            ->take(10)
            ->where('is_featured', 0)
            ->latest()->get();

        $featuredProperties = Property::with('media')
            ->take(30)
            ->where('is_featured', 1)
            ->get();

        return view('frontend.index', [
            'latesProperties' => $latesProperties,
            'featuredProperties' => $featuredProperties,
        ]);
    }
}

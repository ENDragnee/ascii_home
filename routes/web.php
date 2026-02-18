<?php

use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    $featured_portfolios = Portfolio::with('media')
        ->latest()
        ->take(3)
        ->get();

    return view('index', compact('featured_portfolios'));
});
Route::get('/projects', function () {
    $portfolios = Portfolio::with(['media' => function ($query) {
        $query->orderByDesc('is_thumbnail');
    }])->latest()->get();

    return view('projects', compact('portfolios'));
});

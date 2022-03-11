<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::getAll();
        return view('pages.categories.index', compact('data'));
    }

    public function show(string $slug)
    {
        $data = Product::getBySlug($slug);
        return view('pages.categories.show', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug = "")
    {
        if ($slug) {
            $title = str_replace("-", " ", $slug);
            return view('pages.detail', compact('title'));
        }
        return view('pages.news.news');
    }
}

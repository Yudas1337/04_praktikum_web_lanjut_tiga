<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug = "")
    {
        if ($slug) {
            $title = str_replace("-", " ", $slug);
            return view('pages.news.', compact('title'));
        }
        return view('pages.news.index');
    }
}

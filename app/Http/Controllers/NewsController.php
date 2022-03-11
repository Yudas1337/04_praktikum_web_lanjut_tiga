<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $data = News::getAll();
        return view('pages.news.index', compact('data'));
    }

    public function show(string $slug = "")
    {
        if ($slug) {
            $data = News::getBySlug($slug);
            return view('pages.news.show', compact('data'));
        }
        return $this->index();
    }
}

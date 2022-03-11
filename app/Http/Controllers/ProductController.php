<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.categories.index');
    }

    public function eduGames()
    {
        return view('pages.categories.eduGames');
    }

    public function kidsGames()
    {
        return view('pages.categories.kidsGames');
    }

    public function storyBooks()
    {
        return view('pages.categories.storyBooks');
    }

    public function kidsSongs()
    {
        return view('pages.categories.kidsSongs');
    }
}

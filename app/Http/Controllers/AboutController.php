<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function about()
    {
        $data = About::firstOrFail();
        return view('pages.about', compact('data'));
    }
}

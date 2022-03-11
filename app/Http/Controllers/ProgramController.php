<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $data = Program::getAll();
        return view('pages.programs.index', compact('data'));
    }

    public function show(string $slug)
    {
        $data = Program::getBySlug($slug);
        return view('pages.programs.show', compact('data'));
    }
}

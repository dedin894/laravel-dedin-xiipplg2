<?php

namespace App\Http\Controllers;

use App\Models\artikel;

class homecontroller extends Controller
{
    public function index()
    {
        $artikel = artikel::all();
        return view('index', compact('artikel'));
    }
}   
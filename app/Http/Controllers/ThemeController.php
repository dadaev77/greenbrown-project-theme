<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $theme = session('theme', 'classic');
        return view('themes.' . $theme . '.home', compact('theme'));
    }
}

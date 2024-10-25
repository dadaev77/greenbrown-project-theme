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


    public function setTheme(Request $request)
    {
        $request->validate([
            'theme' => 'required|string|in:classic,cuba',
        ]);
        session(['theme' => $request->input('theme')]);
        return redirect()->route('home');
    }
}

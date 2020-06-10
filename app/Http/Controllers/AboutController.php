<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // show about index
    public function index()
    {
        $links = [
            'Company',
            'Mission',
            'Press'
        ];

        return view('about', compact('links'));
    }
}

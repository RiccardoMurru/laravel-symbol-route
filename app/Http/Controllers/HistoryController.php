<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    // show history index
    public function index()
    {
        $links = [
            'History',
            'Archive',
            'News'
        ];

        return view('history', compact('links'));
    }
}

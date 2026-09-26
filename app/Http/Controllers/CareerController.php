<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::where('is_active', true)
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('pages.careers.index', compact('careers'));
    }

    public function show($slug)
    {
        $career = Career::where('slug', $slug)
                        ->where('is_active', true)
                        ->firstOrFail();

        return view('pages.careers.show', compact('career'));
    }
}

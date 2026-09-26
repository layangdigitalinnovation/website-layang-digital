<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerApplicationController extends Controller
{
    public function store(Request $request, $slug)
    {
        $career = Career::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'resume' => 'required|file|mimes:pdf|max:5120', // Max 5MB PDF
            'cover_letter' => 'nullable|string',
            'portfolio_url' => 'nullable|url|max:255',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        CareerApplication::create([
            'career_id' => $career->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'resume_path' => $resumePath,
            'cover_letter' => $validated['cover_letter'],
            'portfolio_url' => $validated['portfolio_url'],
            'status' => 'pending',
        ]);

        return back()->with('success', 'Lamaran Anda berhasil dikirim! Tim kami akan segera meninjau aplikasi Anda.');
    }
}

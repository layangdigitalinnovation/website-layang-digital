<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCareerController extends Controller
{
    public function index()
    {
        $careers = Career::withCount('applications')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();
        $validated['is_active'] = $request->has('is_active');

        Career::create($validated);

        return redirect()->route('admin.careers.index')->with('success', 'Lowongan pekerjaan berhasil ditambahkan.');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $career->update($validated);

        return redirect()->route('admin.careers.index')->with('success', 'Lowongan pekerjaan berhasil diupdate.');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('success', 'Lowongan pekerjaan berhasil dihapus.');
    }

    public function applications(Career $career)
    {
        $applications = $career->applications()->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.careers.applications', compact('career', 'applications'));
    }

    public function updateApplicationStatus(Request $request, CareerApplication $application)
    {
        $request->validate(['status' => 'required|in:pending,reviewed,accepted,rejected']);
        $application->update(['status' => $request->status]);
        return back()->with('success', 'Status lamaran berhasil diupdate.');
    }
}

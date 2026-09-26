<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdPixel;

class AdPixelController extends Controller
{
    public function index()
    {
        $pixels = AdPixel::latest()->get();
        return view('admin.pixels.index', compact('pixels'));
    }

    public function create()
    {
        return view('admin.pixels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'script_head' => 'nullable|string',
            'script_body' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        AdPixel::create([
            'name' => $request->name,
            'script_head' => $request->script_head,
            'script_body' => $request->script_body,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.pixels.index')->with('success', 'Pixel berhasil ditambahkan.');
    }

    public function edit(AdPixel $pixel)
    {
        return view('admin.pixels.edit', compact('pixel'));
    }

    public function update(Request $request, AdPixel $pixel)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'script_head' => 'nullable|string',
            'script_body' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $pixel->update([
            'name' => $request->name,
            'script_head' => $request->script_head,
            'script_body' => $request->script_body,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.pixels.index')->with('success', 'Pixel berhasil diperbarui.');
    }

    public function destroy(AdPixel $pixel)
    {
        $pixel->delete();
        return redirect()->route('admin.pixels.index')->with('success', 'Pixel berhasil dihapus.');
    }
}

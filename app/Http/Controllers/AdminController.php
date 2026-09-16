<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectInquiry;
use App\Models\BlogPost;

class AdminController extends Controller
{
    public function index()
    {
        $inquiriesCount = ProjectInquiry::count();
        $blogsCount = BlogPost::count();
        $recentInquiries = ProjectInquiry::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('inquiriesCount', 'blogsCount', 'recentInquiries'));
    }

    public function inquiries()
    {
        $inquiries = ProjectInquiry::latest()->paginate(15);
        return view('admin.inquiries', compact('inquiries'));
    }

    public function blogs()
    {
        $blogs = BlogPost::latest()->paginate(15);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function createBlog()
    {
        return view('admin.blogs.create');
    }

    public function storeBlog(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']) . '-' . time();
        $validated['is_published'] = $request->has('is_published');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('blog', 'public');
        }

        BlogPost::create($validated);

        return redirect()->route('admin.blogs')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function editBlog($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = BlogPost::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($blog->title !== $validated['title']) {
            $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']) . '-' . time();
        }

        $validated['is_published'] = $request->has('is_published');

        if ($request->hasFile('image')) {
            if ($blog->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($blog->image);
            }
            $validated['image'] = $request->file('image')->store('blog', 'public');
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function deleteBlog($id)
    {
        $blog = BlogPost::findOrFail($id);
        if ($blog->image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Artikel berhasil dihapus.');
    }
}

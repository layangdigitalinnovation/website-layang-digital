@extends('layouts.admin')

@section('title', 'Edit Artikel')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-bold text-slate-800 font-outfit">Edit Artikel</h2>
        <p class="text-slate-500">Perbarui konten atau ubah status publikasi.</p>
    </div>
    <a href="{{ route('admin.blogs') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 font-medium">
        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Kembali
    </a>
</div>

<form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    @csrf
    @method('PUT')
    <div class="p-8">
        
        @if ($errors->any())
            <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200 text-red-800">
                <ul class="list-disc pl-5 space-y-1 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left col: Main content -->
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <label for="title" class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-lg font-medium" required>
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-bold text-slate-700 mb-2">Konten Artikel <span class="text-red-500">*</span></label>
                    <textarea id="content" name="content" rows="15" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow font-mono text-sm leading-relaxed" required>{{ old('content', $blog->content) }}</textarea>
                </div>
            </div>
            
            <!-- Right col: Sidebar settings -->
            <div class="space-y-6">
                <div class="bg-slate-50 p-6 rounded-xl border border-slate-200">
                    <h3 class="font-bold text-slate-800 mb-4">Pengaturan Publikasi</h3>
                    
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }} class="w-5 h-5 rounded border-slate-300 text-primary-600 focus:ring-primary-500">
                            <span class="ml-3 text-sm font-medium text-slate-700">Terbitkan Artikel Ini</span>
                        </label>
                    </div>
                    
                    <div class="pt-4 border-t border-slate-200 mt-4">
                        <p class="text-sm text-slate-500 mb-1">Dibuat pada:</p>
                        <p class="font-medium text-slate-800">{{ $blog->created_at->format('d M Y, H:i') }}</p>
                    </div>
                </div>
                
                <div class="bg-slate-50 p-6 rounded-xl border border-slate-200">
                    <h3 class="font-bold text-slate-800 mb-4">SEO & Gambar</h3>
                    
                    @if($blog->image)
                    <div class="mb-4">
                        <p class="text-sm text-slate-500 mb-2">Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Thumbnail" class="w-full h-auto rounded-lg border border-slate-200">
                    </div>
                    @endif
                    
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-slate-700 mb-2">{{ $blog->image ? 'Ganti Gambar Utama' : 'Unggah Gambar Utama' }}</label>
                        <input type="file" id="image" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    </div>
                    
                    <div class="mb-4">
                        <label for="meta_title" class="block text-sm font-medium text-slate-700 mb-2">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Opsional (Maks. 60 karakter)">
                    </div>

                    <div class="mb-4">
                        <label for="meta_description" class="block text-sm font-medium text-slate-700 mb-2">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" rows="3" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="meta_keywords" class="block text-sm font-medium text-slate-700 mb-2">Meta Keywords</label>
                        <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Pisahkan dengan koma (Contoh: tips, bisnis, digital)">
                    </div>

                    <div>
                        <label for="canonical_url" class="block text-sm font-medium text-slate-700 mb-2">Canonical URL</label>
                        <input type="url" id="canonical_url" name="canonical_url" value="{{ old('canonical_url', $blog->canonical_url) }}" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Opsional (URL Asli jika duplikat)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-50 p-6 border-t border-slate-200 flex justify-end">
        <button type="submit" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-bold rounded-xl hover:bg-primary-700 transition-colors shadow-md hover:shadow-lg hover:-translate-y-0.5">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
            Perbarui Artikel
        </button>
    </div>
</form>
@endsection

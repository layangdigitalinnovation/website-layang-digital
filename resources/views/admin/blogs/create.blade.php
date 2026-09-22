@extends('layouts.admin')

@section('title', 'Tulis Artikel')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-bold text-slate-800 font-outfit">Tulis Artikel Baru</h2>
        <p class="text-slate-500">Buat konten menarik untuk audiens Anda.</p>
    </div>
    <a href="{{ route('admin.blogs') }}" class="inline-flex items-center text-slate-500 hover:text-slate-700 font-medium">
        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Kembali
    </a>
</div>

<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    @csrf
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
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-lg font-medium" required placeholder="Contoh: 5 Tips Digitalisasi Bisnis">
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-bold text-slate-700 mb-2">Konten Artikel <span class="text-red-500">*</span></label>
                    <textarea id="content" name="content" rows="15" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow font-mono text-sm leading-relaxed" required placeholder="Tulis konten artikel Anda di sini... (Mendukung HTML dasar)">{{ old('content') }}</textarea>
                    <p class="text-xs text-slate-500 mt-2">Gunakan tag HTML untuk memformat teks (misalnya &lt;h2&gt;, &lt;p&gt;, &lt;strong&gt;, dll).</p>
                </div>
            </div>
            
            <!-- Right col: Sidebar settings -->
            <div class="space-y-6">
                <div class="bg-slate-50 p-6 rounded-xl border border-slate-200">
                    <h3 class="font-bold text-slate-800 mb-4">Pengaturan Publikasi</h3>
                    
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }} class="w-5 h-5 rounded border-slate-300 text-primary-600 focus:ring-primary-500">
                            <span class="ml-3 text-sm font-medium text-slate-700">Terbitkan Artikel Ini</span>
                        </label>
                        <p class="text-xs text-slate-500 mt-1 ml-8">Jika tidak dicentang, artikel akan disimpan sebagai Draft.</p>
                    </div>
                </div>
                
                <div class="bg-slate-50 p-6 rounded-xl border border-slate-200">
                    <h3 class="font-bold text-slate-800 mb-4">SEO & Gambar</h3>
                    
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-slate-700 mb-2">Gambar Utama (Thumbnail)</label>
                        <input type="file" id="image" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    </div>
                    
                    <div class="mb-4">
                        <label for="meta_title" class="block text-sm font-medium text-slate-700 mb-2">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Opsional (Maks. 60 karakter)">
                    </div>

                    <div class="mb-4">
                        <label for="meta_description" class="block text-sm font-medium text-slate-700 mb-2">Meta Description (Untuk Google)</label>
                        <textarea id="meta_description" name="meta_description" rows="3" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Singkat, padat, dan menarik (Maks. 160 karakter)">{{ old('meta_description') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="meta_keywords" class="block text-sm font-medium text-slate-700 mb-2">Meta Keywords</label>
                        <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Pisahkan dengan koma (Contoh: tips, bisnis, digital)">
                    </div>

                    <div>
                        <label for="canonical_url" class="block text-sm font-medium text-slate-700 mb-2">Canonical URL</label>
                        <input type="url" id="canonical_url" name="canonical_url" value="{{ old('canonical_url') }}" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow text-sm" placeholder="Opsional (URL Asli jika duplikat)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-50 p-6 border-t border-slate-200 flex justify-end">
        <button type="submit" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-bold rounded-xl hover:bg-primary-700 transition-colors shadow-md hover:shadow-lg hover:-translate-y-0.5">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
            Simpan Artikel
        </button>
    </div>
</form>
@endsection

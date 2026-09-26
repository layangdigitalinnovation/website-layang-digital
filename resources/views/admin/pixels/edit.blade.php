@extends('layouts.admin')

@section('title', 'Edit Pixel Iklan')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.pixels.index') }}" class="text-slate-500 hover:text-primary-600 flex items-center text-sm font-medium transition-colors">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Kembali ke Daftar Pixel
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="p-6 md:p-8 border-b border-slate-100 bg-slate-50/50">
        <h2 class="text-xl font-bold text-slate-800">Edit Pixel: {{ $pixel->name }}</h2>
    </div>

    <div class="p-6 md:p-8">
        <form action="{{ route('admin.pixels.update', $pixel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Pixel / Tag *</label>
                <input type="text" name="name" value="{{ old('name', $pixel->name) }}" required class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Script untuk bagian &lt;head&gt;</label>
                <textarea name="script_head" rows="6" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 font-mono text-sm transition-colors">{{ old('script_head', $pixel->script_head) }}</textarea>
                @error('script_head') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-8">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Script untuk bagian &lt;body&gt;</label>
                <textarea name="script_body" rows="4" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 font-mono text-sm transition-colors">{{ old('script_body', $pixel->script_body) }}</textarea>
                @error('script_body') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-8 flex items-center">
                <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $pixel->is_active) ? 'checked' : '' }} class="w-4 h-4 text-primary-600 bg-slate-100 border-slate-300 rounded focus:ring-primary-500 focus:ring-2">
                <label for="is_active" class="ml-2 text-sm font-medium text-slate-700">Aktifkan Pixel Ini Segera</label>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-primary-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-primary-700 transition-colors">
                    Simpan Perubahan
                </button>
            </div>
            
        </form>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('title', 'Tambah Lowongan Karir')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.careers.index') }}" class="text-slate-500 hover:text-primary-600 font-medium inline-flex items-center transition-colors">
        &larr; Kembali ke Daftar
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden max-w-4xl">
    <div class="p-6 border-b border-slate-200">
        <h3 class="font-bold text-slate-800 font-outfit text-lg">Tambah Lowongan Pekerjaan Baru</h3>
    </div>
    
    <div class="p-6 md:p-8">
        <form action="{{ route('admin.careers.store') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Posisi / Judul Pekerjaan *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    @error('title') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Departemen</label>
                    <input type="text" name="department" value="{{ old('department') }}" placeholder="Contoh: Engineering, Marketing" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Lokasi</label>
                    <input type="text" name="location" value="{{ old('location') }}" placeholder="Contoh: Remote, Jakarta" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tipe Pekerjaan</label>
                    <select name="type" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        <option value="Full-time" {{ old('type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                        <option value="Part-time" {{ old('type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                        <option value="Contract" {{ old('type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                        <option value="Internship" {{ old('type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                    </select>
                </div>
                
                <div class="flex items-end pb-2">
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }} class="w-5 h-5 text-primary-600 rounded border-slate-300 focus:ring-primary-500">
                        <span class="text-sm font-semibold text-slate-700">Status Aktif (Ditampilkan)</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Pekerjaan *</label>
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description" class="trix-content bg-white rounded-lg border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 min-h-[200px]"></trix-editor>
                @error('description') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-8">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Persyaratan / Kualifikasi</label>
                <input id="requirements" type="hidden" name="requirements" value="{{ old('requirements') }}">
                <trix-editor input="requirements" class="trix-content bg-white rounded-lg border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 min-h-[200px]"></trix-editor>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-primary-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-primary-700 transition-colors">
                    Simpan Lowongan
                </button>
            </div>
            
        </form>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<style>
    .trix-button-group--file-tools { display: none !important; }
    trix-editor { padding: 1rem; }
    trix-editor ul { list-style-type: disc; padding-left: 1.5rem; }
    trix-editor ol { list-style-type: decimal; padding-left: 1.5rem; }
</style>
@endsection

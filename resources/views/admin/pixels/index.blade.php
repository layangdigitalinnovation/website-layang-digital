@extends('layouts.admin')

@section('title', 'Manajemen Pixel Iklan')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Manajemen Pixel Iklan</h1>
    <a href="{{ route('admin.pixels.create') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Tambah Pixel
    </a>
</div>

@if(session('success'))
<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-sm">
    <p>{{ session('success') }}</p>
</div>
@endif

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200">
                    <th class="p-4 font-semibold text-slate-600 text-sm">Nama Pixel</th>
                    <th class="p-4 font-semibold text-slate-600 text-sm">Status</th>
                    <th class="p-4 font-semibold text-slate-600 text-sm text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($pixels as $pixel)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="p-4 font-medium text-slate-800">
                        {{ $pixel->name }}
                        <div class="text-xs text-slate-500 mt-1">
                            @if($pixel->script_head) <span class="bg-slate-100 px-2 py-0.5 rounded text-slate-600 mr-1">Head</span> @endif
                            @if($pixel->script_body) <span class="bg-slate-100 px-2 py-0.5 rounded text-slate-600">Body</span> @endif
                        </div>
                    </td>
                    <td class="p-4">
                        @if($pixel->is_active)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Aktif</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">Nonaktif</span>
                        @endif
                    </td>
                    <td class="p-4 text-right space-x-2">
                        <a href="{{ route('admin.pixels.edit', $pixel->id) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-100 transition-colors" title="Edit">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </a>
                        <form action="{{ route('admin.pixels.destroy', $pixel->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus pixel ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 transition-colors" title="Hapus">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="p-8 text-center text-slate-500">
                        Belum ada pixel iklan. Klik "Tambah Pixel" untuk mulai melacak aktivitas pengunjung.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

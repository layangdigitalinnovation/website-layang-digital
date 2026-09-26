@extends('layouts.admin')

@section('title', 'Manajemen Karir')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-slate-800 font-outfit">Lowongan Pekerjaan</h2>
    <a href="{{ route('admin.careers.create') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
        + Tambah Lowongan
    </a>
</div>

@if(session('success'))
<div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
    {{ session('success') }}
</div>
@endif

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                    <th class="p-4 font-medium">Posisi</th>
                    <th class="p-4 font-medium">Departemen</th>
                    <th class="p-4 font-medium text-center">Status</th>
                    <th class="p-4 font-medium text-center">Pelamar</th>
                    <th class="p-4 font-medium">Tanggal Dibuat</th>
                    <th class="p-4 font-medium text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse($careers as $career)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="p-4">
                        <div class="font-bold text-slate-800">{{ $career->title }}</div>
                        <div class="text-slate-500 text-xs mt-1">{{ $career->type }} &bull; {{ $career->location }}</div>
                    </td>
                    <td class="p-4 text-slate-600">{{ $career->department ?? '-' }}</td>
                    <td class="p-4 text-center">
                        @if($career->is_active)
                        <span class="inline-block px-2 py-1 bg-green-100 text-green-700 rounded-md text-xs font-semibold">Aktif</span>
                        @else
                        <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded-md text-xs font-semibold">Tutup</span>
                        @endif
                    </td>
                    <td class="p-4 text-center">
                        <a href="{{ route('admin.careers.applications', $career->id) }}" class="inline-block px-3 py-1 bg-blue-50 text-blue-600 hover:bg-blue-100 rounded-lg font-semibold transition-colors">
                            {{ $career->applications_count }} Pelamar
                        </a>
                    </td>
                    <td class="p-4 text-slate-500">{{ $career->created_at->format('d M Y') }}</td>
                    <td class="p-4 text-center">
                        <div class="flex items-center justify-center space-x-2">
                            <a href="{{ route('admin.careers.edit', $career->id) }}" class="text-amber-500 hover:text-amber-600 font-medium">Edit</a>
                            <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus lowongan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600 font-medium">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-8 text-center text-slate-500">
                        Belum ada lowongan pekerjaan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($careers->hasPages())
    <div class="p-4 border-t border-slate-200">
        {{ $careers->links() }}
    </div>
    @endif
</div>
@endsection

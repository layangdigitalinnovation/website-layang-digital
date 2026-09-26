@extends('layouts.admin')

@section('title', 'Pelamar: ' . $career->title)

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.careers.index') }}" class="text-slate-500 hover:text-primary-600 font-medium inline-flex items-center transition-colors">
        &larr; Kembali ke Daftar Lowongan
    </a>
</div>

<div class="flex justify-between items-end mb-6">
    <div>
        <h2 class="text-2xl font-bold text-slate-800 font-outfit mb-1">Daftar Pelamar</h2>
        <p class="text-slate-500">{{ $career->title }} &bull; {{ $career->applications->count() }} Pelamar Total</p>
    </div>
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
                    <th class="p-4 font-medium">Nama / Email</th>
                    <th class="p-4 font-medium">Kontak</th>
                    <th class="p-4 font-medium">Dokumen</th>
                    <th class="p-4 font-medium">Tanggal Apply</th>
                    <th class="p-4 font-medium text-center">Status</th>
                    <th class="p-4 font-medium text-center">Ubah Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse($applications as $app)
                <tr class="hover:bg-slate-50 transition-colors align-top">
                    <td class="p-4">
                        <div class="font-bold text-slate-800">{{ $app->name }}</div>
                        <div class="text-slate-500 text-xs mt-1">{{ $app->email }}</div>
                    </td>
                    <td class="p-4 text-slate-600">
                        {{ $app->phone ?? '-' }}
                    </td>
                    <td class="p-4">
                        <div class="flex flex-col space-y-2">
                            <a href="{{ Storage::url($app->resume_path) }}" target="_blank" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium text-xs">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Lihat CV
                            </a>
                            @if($app->portfolio_url)
                            <a href="{{ $app->portfolio_url }}" target="_blank" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-xs">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg> Portfolio
                            </a>
                            @endif
                        </div>
                    </td>
                    <td class="p-4 text-slate-500">{{ $app->created_at->format('d M Y, H:i') }}</td>
                    <td class="p-4 text-center">
                        @if($app->status == 'pending')
                            <span class="inline-block px-2 py-1 bg-amber-100 text-amber-700 rounded-md text-xs font-semibold">Pending</span>
                        @elseif($app->status == 'reviewed')
                            <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 rounded-md text-xs font-semibold">Direview</span>
                        @elseif($app->status == 'accepted')
                            <span class="inline-block px-2 py-1 bg-green-100 text-green-700 rounded-md text-xs font-semibold">Diterima</span>
                        @elseif($app->status == 'rejected')
                            <span class="inline-block px-2 py-1 bg-red-100 text-red-700 rounded-md text-xs font-semibold">Ditolak</span>
                        @endif
                    </td>
                    <td class="p-4 text-center">
                        <form action="{{ route('admin.applications.status', $app->id) }}" method="POST" class="flex flex-col items-center gap-2">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="text-xs border-slate-300 rounded-lg py-1 px-2 pr-6 focus:ring-primary-500 focus:border-primary-500" onchange="this.form.submit()">
                                <option value="pending" {{ $app->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="reviewed" {{ $app->status == 'reviewed' ? 'selected' : '' }}>Review</option>
                                <option value="accepted" {{ $app->status == 'accepted' ? 'selected' : '' }}>Terima</option>
                                <option value="rejected" {{ $app->status == 'rejected' ? 'selected' : '' }}>Tolak</option>
                            </select>
                        </form>
                    </td>
                </tr>
                @if($app->cover_letter)
                <tr class="bg-slate-50/50">
                    <td colspan="6" class="p-4 pt-0">
                        <div class="bg-white p-3 rounded-lg border border-slate-200 text-xs text-slate-600 mt-2">
                            <span class="font-semibold block mb-1">Pesan / Pengantar:</span>
                            {{ $app->cover_letter }}
                        </div>
                    </td>
                </tr>
                @endif
                @empty
                <tr>
                    <td colspan="6" class="p-8 text-center text-slate-500">
                        Belum ada pelamar untuk lowongan ini.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($applications->hasPages())
    <div class="p-4 border-t border-slate-200">
        {{ $applications->links() }}
    </div>
    @endif
</div>
@endsection

@extends('layouts.admin')

@section('title', 'Blog Posts')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-bold text-slate-800 font-outfit">Kelola Artikel</h2>
        <p class="text-slate-500">Tulis dan terbitkan artikel untuk keperluan konten dan SEO.</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white font-medium rounded-lg hover:bg-primary-700 transition-colors">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Tulis Artikel Baru
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                    <th class="p-4 font-medium w-16">No</th>
                    <th class="p-4 font-medium">Judul Artikel</th>
                    <th class="p-4 font-medium">Status</th>
                    <th class="p-4 font-medium">Tanggal</th>
                    <th class="p-4 font-medium text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse($blogs as $index => $blog)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="p-4 text-slate-500">{{ $index + $blogs->firstItem() }}</td>
                    <td class="p-4">
                        <div class="font-bold text-slate-800 mb-1">{{ $blog->title }}</div>
                        <div class="text-slate-400 text-xs truncate max-w-xs">{{ $blog->slug }}</div>
                    </td>
                    <td class="p-4">
                        @if($blog->is_published)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">Published</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">Draft</span>
                        @endif
                    </td>
                    <td class="p-4 text-slate-500 whitespace-nowrap">
                        {{ $blog->created_at->format('d M Y') }}
                    </td>
                    <td class="p-4 text-right whitespace-nowrap">
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="inline-flex items-center p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <form action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-8 text-center text-slate-500">
                        Belum ada artikel. Mulai menulis artikel pertama Anda!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($blogs->hasPages())
    <div class="p-4 border-t border-slate-200">
        {{ $blogs->links() }}
    </div>
    @endif
</div>
@endsection

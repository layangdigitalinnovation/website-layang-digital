@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-slate-900 border-b border-slate-800">
    <div class="absolute inset-0 z-0 pointer-events-none flex justify-center items-center">
        <div class="absolute w-[800px] h-[500px] bg-gradient-to-tr from-primary-900/40 to-blue-900/40 rounded-full blur-[100px] opacity-60"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-block py-1.5 px-4 rounded-full bg-slate-800 text-primary-400 text-[11px] font-bold tracking-[0.2em] uppercase border border-slate-700 mb-6 shadow-sm shadow-slate-900/50">
            Bergabung Bersama Kami
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-[4rem] font-extrabold text-white mb-6 tracking-tight font-outfit leading-tight">
            Bangun Masa Depan <br class="hidden sm:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-blue-400">Digital Bersama Layang</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
            Kami mencari talenta terbaik untuk menciptakan inovasi teknologi yang berdampak luas bagi banyak bisnis.
        </p>
    </div>
</div>

<!-- Jobs List Section -->
<div class="py-20 md:py-32 bg-slate-50 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-10 text-center">
            <h2 class="text-3xl font-bold text-slate-800 font-outfit">Posisi Terbuka</h2>
        </div>

        @if($careers->count() > 0)
            <div class="space-y-4">
                @foreach($careers as $job)
                <a href="{{ route('careers.show', $job->slug) }}" class="block bg-white p-6 md:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:border-primary-200 transition-all group">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-primary-600 transition-colors mb-2">{{ $job->title }}</h3>
                            <div class="flex flex-wrap items-center gap-3 text-sm text-slate-500">
                                @if($job->department)
                                <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> {{ $job->department }}</span>
                                @endif
                                
                                @if($job->location)
                                <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> {{ $job->location }}</span>
                                @endif
                                
                                @if($job->type)
                                <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $job->type }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center text-primary-600 font-semibold group-hover:translate-x-1 transition-transform">
                            Lihat Detail <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        @else
            <div class="bg-white p-12 rounded-2xl border border-slate-200 text-center">
                <svg class="w-16 h-16 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <h3 class="text-xl font-bold text-slate-700 mb-2 font-outfit">Belum Ada Posisi Terbuka</h3>
                <p class="text-slate-500">Saat ini kami belum membuka lowongan baru. Silakan pantau terus halaman ini.</p>
            </div>
        @endif
        
    </div>
</div>
@endsection

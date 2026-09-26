@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-slate-900 border-b border-slate-800">
    <!-- Background Decor -->
    <div class="absolute inset-0 z-0 pointer-events-none flex justify-center items-center">
        <div class="absolute w-[800px] h-[500px] bg-gradient-to-tr from-primary-900/40 to-blue-900/40 rounded-full blur-[100px] opacity-60"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-block py-1.5 px-4 rounded-full bg-slate-800 text-primary-400 text-[11px] font-bold tracking-[0.2em] uppercase border border-slate-700 mb-6 shadow-sm shadow-slate-900/50">
            Layanan Kami
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight font-outfit leading-tight">
            {{ $service['title'] }}
        </h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
            {{ $service['subtitle'] }}
        </p>
    </div>
</div>

<!-- Main Content -->
<div class="py-24 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Sidebar: Layanan Lainnya -->
            <div class="lg:col-span-4 order-2 lg:order-1">
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm sticky top-24">
                    <h3 class="text-xl font-bold text-slate-900 font-outfit mb-6">Layanan Lainnya</h3>
                    <div class="space-y-3">
                        @foreach($allServices as $key => $s)
                        <a href="{{ route('services.show', $key) }}" class="flex items-center p-3 rounded-xl transition-all {{ $key == $slug ? 'bg-primary-50 text-primary-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-600' }}">
                            <div class="mr-3 text-current opacity-70 [&>svg]:w-6 [&>svg]:h-6">
                                {!! $s['icon'] !!}
                            </div>
                            <span class="text-[15px]">{{ $s['title'] }}</span>
                            @if($key == $slug)
                            <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            @endif
                        </a>
                        @endforeach
                    </div>

                    <div class="mt-8 pt-8 border-t border-slate-100">
                        <h4 class="font-bold text-slate-800 mb-2">Butuh Konsultasi?</h4>
                        <p class="text-sm text-slate-500 mb-4">Mari diskusikan kebutuhan spesifik bisnis Anda bersama tim kami.</p>
                        <a href="{{ url('/#contact') }}" class="block text-center bg-slate-900 text-white py-3 px-4 rounded-xl font-semibold hover:bg-slate-800 transition-colors text-sm">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-8 order-1 lg:order-2">
                
                <div class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-sm mb-8">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl flex items-center justify-center mb-8">
                        {!! $service['icon'] !!}
                    </div>
                    
                    <h2 class="text-3xl font-bold text-slate-900 font-outfit mb-6">Tentang Layanan</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-10">
                        {{ $service['description'] }}
                    </p>

                    <h3 class="text-2xl font-bold text-slate-900 font-outfit mb-6">Apa yang Anda Dapatkan?</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-12">
                        @foreach($service['features'] as $feature)
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mt-0.5 mr-3">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-slate-700">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 font-outfit mb-6">Teknologi yang Kami Gunakan</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach($service['technologies'] as $tech)
                        <span class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg font-medium text-sm border border-slate-200">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <!-- CTA Banner inside content -->
                <div class="bg-gradient-to-br from-primary-600 to-blue-700 rounded-3xl p-8 md:p-10 text-white relative overflow-hidden shadow-lg shadow-primary-600/20">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold font-outfit mb-3">Siap Memulai Project Anda?</h3>
                        <p class="text-primary-100 mb-8 max-w-lg">
                            Wujudkan ide Anda menjadi sistem digital yang handal bersama Layang Digital Innovation.
                        </p>
                        <a href="{{ url('/#contact') }}" class="inline-flex items-center px-6 py-3 bg-white text-primary-700 font-bold rounded-xl hover:bg-slate-50 transition-colors">
                            Mulai Konsultasi Gratis
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>
@endsection

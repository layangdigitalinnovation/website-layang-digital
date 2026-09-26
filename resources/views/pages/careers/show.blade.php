@extends('layouts.app')

@section('content')
<div class="py-24 bg-slate-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <a href="{{ route('careers.index') }}" class="inline-flex items-center text-slate-500 hover:text-primary-600 font-semibold mb-8 transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Daftar Karir
        </a>

        @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-8 flex items-center">
            <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden mb-12">
            <div class="p-8 md:p-12 border-b border-slate-100 bg-slate-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary-500/20 rounded-full blur-3xl -mr-20 -mt-20 pointer-events-none"></div>
                <h1 class="text-3xl md:text-4xl font-bold font-outfit mb-4 relative z-10">{{ $career->title }}</h1>
                <div class="flex flex-wrap items-center gap-4 text-sm text-slate-300 relative z-10">
                    @if($career->department)
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> {{ $career->department }}</span>
                    @endif
                    @if($career->location)
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> {{ $career->location }}</span>
                    @endif
                    @if($career->type)
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $career->type }}</span>
                    @endif
                </div>
            </div>
            
            <div class="p-8 md:p-12 prose prose-slate max-w-none">
                <style>
                    .rich-text-content ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1rem; }
                    .rich-text-content ol { list-style-type: decimal; padding-left: 1.5rem; margin-bottom: 1rem; }
                    .rich-text-content li { margin-bottom: 0.25rem; }
                    .rich-text-content strong { font-weight: bold; color: #1e293b; }
                    .rich-text-content p { margin-bottom: 0.75rem; }
                </style>
                <h3 class="text-xl font-bold text-slate-800 font-outfit mb-4">Deskripsi Pekerjaan</h3>
                <div class="mb-8 text-slate-600 leading-relaxed rich-text-content">
                    {!! $career->description !!}
                </div>

                @if($career->requirements)
                <h3 class="text-xl font-bold text-slate-800 font-outfit mb-4 mt-8">Persyaratan</h3>
                <div class="mb-8 text-slate-600 leading-relaxed rich-text-content">
                    {!! $career->requirements !!}
                </div>
                @endif

                <!-- Share Section -->
                <div class="mt-12 pt-8 border-t border-slate-100">
                    <h4 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4">Bagikan Lowongan Ini:</h4>
                    
                    <div class="flex flex-wrap items-center gap-3">
                        <!-- Native Mobile Share (muncul jika didukung browser) -->
                        <button onclick="if(navigator.share) { navigator.share({title: '{{ $career->title }}', text: 'Ada lowongan menarik di Layang Digital: {{ $career->title }}', url: window.location.href}); } else { alert('Maaf, browser Anda tidak mendukung fitur ini.'); }" class="md:hidden inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-slate-900 text-white hover:bg-slate-800 transition-colors font-semibold text-sm w-full mb-2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                            Bagikan (Semua Aplikasi)
                        </button>

                        <!-- WhatsApp -->
                        <a href="https://api.whatsapp.com/send?text={{ urlencode('Ada lowongan menarik di Layang Digital: ' . $career->title . ' ' . url()->current()) }}" target="_blank" class="flex-1 md:flex-none inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-[#25D366] text-white hover:bg-[#20bd5a] transition-colors font-semibold text-sm">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WhatsApp
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="flex-1 md:flex-none inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-[#1877F2] text-white hover:bg-[#166fe5] transition-colors font-semibold text-sm">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            Facebook
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/" target="_blank" onclick="navigator.clipboard.writeText(window.location.href); alert('Link dicopy! Silakan paste di Story atau DM Instagram Anda.');" class="flex-1 md:flex-none inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-gradient-to-tr from-[#f09433] via-[#e6683c] to-[#bc1888] text-white hover:opacity-90 transition-opacity font-semibold text-sm">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            Instagram
                        </a>

                        <!-- Copy Link -->
                        <button onclick="navigator.clipboard.writeText(window.location.href); alert('Link berhasil disalin!');" class="flex-1 md:flex-none inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors font-semibold text-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            Copy Link
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden" id="apply">
            <div class="p-8 md:p-10">
                <h3 class="text-2xl font-bold text-slate-900 font-outfit mb-6">Kirim Lamaran</h3>
                
                @if($errors->any())
                <div class="bg-red-50 text-red-700 p-4 rounded-xl mb-6 text-sm">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('careers.apply', $career->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap *</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor HP / WhatsApp</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Link Portfolio (Opsional)</label>
                            <input type="url" name="portfolio_url" value="{{ old('portfolio_url') }}" placeholder="https://" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Upload CV / Resume (PDF) *</label>
                        <input type="file" name="resume" accept=".pdf" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 cursor-pointer">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Surat Lamaran / Pengantar (Opsional)</label>
                        <textarea name="cover_letter" rows="5" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">{{ old('cover_letter') }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary-600 text-white font-bold py-4 px-6 rounded-xl hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 transition-all text-lg">
                        Kirim Lamaran Sekarang
                    </button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection

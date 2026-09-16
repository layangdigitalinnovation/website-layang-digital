@extends('layouts.app')

@section('title', 'Tentang Kami - Layang Digital Innovation')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 md:pt-40 md:pb-28 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-primary-100/40 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[30rem] h-[30rem] bg-indigo-100/40 rounded-full blur-3xl translate-y-1/3 -translate-x-1/4"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200/60 mb-6">
                <span class="w-2 h-2 rounded-full bg-primary-500 mr-2 animate-pulse"></span>
                <span class="text-xs font-bold text-slate-600 tracking-wider uppercase">Tentang Layang Digital</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 font-outfit leading-tight mb-6">
                Membangun Ekosistem Digital <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-indigo-600">Masa Depan</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-600 leading-relaxed mb-8">
                Kami adalah mitra teknologi terpercaya yang berdedikasi untuk membantu bisnis dari berbagai skala bertransformasi, berinovasi, dan berkembang di era digital melalui solusi perangkat lunak yang cerdas dan tepat guna.
            </p>
        </div>
    </div>
</section>

<!-- Story & Vision Section -->
<section class="py-20 md:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Image / Graphic -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-primary-100 to-indigo-50 rounded-3xl transform rotate-3 scale-105 z-0"></div>
                <div class="bg-slate-900 rounded-3xl p-8 relative z-10 shadow-xl border border-slate-800 overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary-500/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                    
                    <h3 class="text-2xl font-bold text-white mb-6 font-outfit">Visi & Misi</h3>
                    
                    <div class="space-y-8 relative z-10">
                        <div class="bg-slate-800/50 p-6 rounded-2xl border border-slate-700/50 backdrop-blur-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-primary-500/20 flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                </div>
                                <h4 class="text-xl font-bold text-white font-outfit">Visi Kami</h4>
                            </div>
                            <p class="text-slate-300 leading-relaxed text-sm">
                                Menjadi katalisator transformasi digital terkemuka yang memberdayakan bisnis lokal dan global untuk mencapai potensi maksimal mereka melalui teknologi inovatif.
                            </p>
                        </div>
                        
                        <div class="bg-slate-800/50 p-6 rounded-2xl border border-slate-700/50 backdrop-blur-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                </div>
                                <h4 class="text-xl font-bold text-white font-outfit">Misi Kami</h4>
                            </div>
                            <ul class="text-slate-300 text-sm space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-emerald-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    <span>Menghasilkan perangkat lunak berkualitas tinggi yang solutif dan scalable.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-emerald-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    <span>Mendampingi klien di setiap tahap digitalisasi bisnis.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-emerald-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    <span>Terus berinovasi dengan teknologi terbaru untuk memberikan <strong>competitive advantage</strong>.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Content -->
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-outfit mb-6">Siapa Kami?</h2>
                <div class="prose prose-slate prose-lg text-slate-600">
                    <p>
                        <strong>Layang Digital Innovation</strong> lahir dari sebuah gagasan sederhana: teknologi seharusnya mempermudah, bukan mempersulit. Di tengah pesatnya perkembangan dunia digital, banyak perusahaan yang kesulitan menemukan pijakan yang tepat untuk bertransformasi.
                    </p>
                    <p>
                        Kami hadir sebagai jembatan penghubung antara masalah kompleks yang dihadapi bisnis Anda dengan solusi digital yang elegan, efisien, dan mudah digunakan. Tim kami terdiri dari <strong>developer</strong>, <strong>designer</strong>, dan <strong>product strategist</strong> yang penuh semangat dan berpengalaman.
                    </p>
                    <p>
                        Pendekatan kami selalu berpusat pada pengguna (<strong>user-centric</strong>). Kami tidak sekadar menulis kode; kami mendengarkan, menganalisis, dan merancang sistem yang benar-benar menjawab tantangan unik di industri Anda, baik itu berupa <strong>web app</strong>, aplikasi <strong>mobile</strong>, ataupun sistem otomasi bisnis (ERP/SaaS).
                    </p>
                </div>
                
                <div class="mt-10 grid grid-cols-2 gap-6 pt-10 border-t border-slate-100">
                    <div>
                        <div class="text-4xl font-extrabold text-primary-600 font-outfit mb-1">50+</div>
                        <div class="text-sm font-medium text-slate-500 uppercase tracking-wide">Proyek Selesai</div>
                    </div>
                    <div>
                        <div class="text-4xl font-extrabold text-primary-600 font-outfit mb-1">99%</div>
                        <div class="text-sm font-medium text-slate-500 uppercase tracking-wide">Klien Puas</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="pt-24 pb-24 md:pt-32 md:pb-32 bg-slate-50 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 pt-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-outfit mb-6">Nilai Inti Kami</h2>
            <p class="text-lg text-slate-600">Fondasi dari setiap baris kode yang kami tulis dan setiap keputusan yang kami ambil.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pb-12">
            <!-- Value 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 font-outfit mb-3">Integritas & Kepercayaan</h3>
                <p class="text-slate-600 leading-relaxed">
                    Kami menjunjung tinggi transparansi dalam setiap pengerjaan proyek. Apa yang kami janjikan adalah apa yang akan Anda dapatkan.
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 rounded-xl bg-purple-50 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 font-outfit mb-3">Inovasi Tanpa Henti</h3>
                <p class="text-slate-600 leading-relaxed">
                    Dunia teknologi bergerak cepat. Kami selalu beradaptasi dengan stack teknologi modern untuk memberikan solusi terbaik dan paling relevan.
                </p>
            </div>
            
            <!-- Value 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 font-outfit mb-3">Kualitas Premium</h3>
                <p class="text-slate-600 leading-relaxed">
                    Kami tidak berkompromi soal kualitas. Dari arsitektur database, clean code, hingga UI/UX design, semua dikerjakan dengan standar tinggi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-primary-900 z-0"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 z-0"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white font-outfit mb-6">
            Siap Bertransformasi Bersama Kami?
        </h2>
        <p class="text-xl text-primary-100 mb-10 max-w-2xl mx-auto">
            Mari diskusikan ide dan tantangan bisnis Anda. Kami siap merancang solusi digital yang spesifik untuk Anda.
        </p>
        <a href="/#contact" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-lg text-primary-900 bg-white hover:bg-primary-50 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
            Mulai Konsultasi Gratis
            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
        </a>
    </div>
</section>
@endsection

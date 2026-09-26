@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-slate-900 border-b border-slate-800">
    <!-- Background Decor -->
    <div class="absolute inset-0 z-0 pointer-events-none flex justify-center items-center">
        <div class="absolute w-[800px] h-[500px] bg-gradient-to-tr from-primary-900/40 to-blue-900/40 rounded-full blur-[100px] opacity-60"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-[4rem] font-extrabold text-white mb-6 tracking-tight font-outfit leading-tight">
            Karya Terbaik <br class="hidden sm:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-blue-400">Layang Digital</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
            Jelajahi bagaimana kami membantu bisnis dan institusi memecahkan masalah kompleks melalui inovasi sistem dan perangkat lunak.
        </p>
    </div>
</div>

<!-- Portfolio Grid Section -->
<div class="py-20 md:py-32 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 gap-y-12">
            
            <!-- Case Study 1 -->
            <x-case-study-card 
                client="4DX PLN UID Jawa Barat"
                badge="Enterprise - Business Operations"
                title="Digital Performance Management System"
                description="Sistem digital untuk membantu pengelolaan, monitoring, dan pelaporan kinerja operasional di lingkungan PLN UID Jawa Barat."
                :highlights="['Enterprise System', 'Operational Dashboard', 'Performance Monitoring', 'Reporting']"
                ctaText="Lihat Case Study"
                href="#portfolio-1"
                image="images/portfolio/4DX-PLN-UID-Jawa-Barat.png"
            />

            <!-- Case Study 2 -->
            <x-case-study-card 
                client="Mahirku"
                badge="SaaS - Talent Assessment"
                title="AI-Powered Talent Assessment Platform"
                description="Platform assessment digital yang membantu individu dan organisasi melakukan assessment, menghasilkan laporan otomatis, dan mengelola proses assessment secara terstruktur."
                :highlights="['DISC Assessment', 'Automated Reports', 'Token System', 'Organization Management']"
                ctaText="Lihat Product"
                href="#portfolio-2"
                image="images/portfolio/Mahirku.png"
            />

            <!-- Case Study 3 -->
            <x-case-study-card 
                client="Kasbos"
                badge="SaaS - Financial Management"
                title="Multi-Business Financial Management"
                description="Aplikasi keuangan yang dirancang untuk membantu pemilik usaha mengelola keuangan dari beberapa bisnis dalam satu platform."
                :highlights="['Multi-Business', 'Financial Management', 'Reporting', 'Dashboard']"
                ctaText="Lihat Product"
                href="#portfolio-3"
                image="images/portfolio/Kasbos.png"
            />

            <!-- Case Study 4 -->
            <x-case-study-card 
                client="Halo Optom Healthcare"
                badge="Healthcare - Custom System"
                title="Digital Healthcare Management System"
                description="Sistem digital untuk mendukung proses operasional dan pengelolaan data pada bisnis layanan kesehatan dan optometri."
                :highlights="['Healthcare', 'Patient Management', 'Operational System', 'Digital Records']"
                ctaText="Lihat Case Study"
                href="#portfolio-4"
                image="images/portfolio/Halo-Optom-Healthcare.png"
            />

            <!-- Case Study 5 -->
            <x-case-study-card 
                client="Universitas BTH"
                badge="Education - Web Application"
                title="Learning Management System"
                description="Platform pembelajaran digital untuk mendukung proses pendidikan, pengelolaan pengguna, materi, aktivitas pembelajaran, dan administrasi."
                :highlights="['LMS', 'User Management', 'Learning Content', 'Dashboard']"
                ctaText="Lihat Case Study"
                href="#portfolio-5"
                image="images/portfolio/LMS-Universitas-BTH.png"
            />

        </div>
        
    </div>
</div>

<!-- CTA Section -->
<section class="py-24 bg-white relative overflow-hidden border-t border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-50/50 to-white pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-6 font-outfit">Punya Visi untuk Transformasi Digital Bisnis Anda?</h2>
        <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-2xl mx-auto">
            Mari diskusikan masalah teknis dan kebutuhan digitalisasi bisnis Anda bersama tim ahli kami. Kami siap mewujudkannya.
        </p>
        <a href="{{ url('/#contact') }}" class="inline-flex justify-center items-center rounded-xl px-8 py-4 font-bold bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-600/30 transition-all hover:-translate-y-1 text-lg">
            Mulai Konsultasi Gratis Sekarang
        </a>
    </div>
</section>
@endsection

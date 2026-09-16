<section id="portfolio" class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 font-outfit">
                Software yang Telah Kami Bangun
            </h2>
            <p class="text-lg text-slate-600 leading-relaxed">
                Dari enterprise system hingga SaaS product, kami membangun solusi digital untuk berbagai kebutuhan bisnis.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            
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
            
            <!-- See More Card -->
            <div class="group bg-primary-600 rounded-2xl overflow-hidden border border-primary-500 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col items-center justify-center text-center p-8 min-h-[400px]">
                <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3 font-outfit">Lihat Semua Portfolio</h3>
                <p class="text-primary-100 mb-8">
                    Temukan lebih banyak project dan studi kasus yang telah kami kerjakan.
                </p>
                <x-button href="#portfolio-all" variant="secondary" class="bg-white text-primary-700 hover:bg-slate-50 w-full sm:w-auto px-8">
                    Jelajahi Portfolio
                </x-button>
            </div>

        </div>
        
    </div>
</section>

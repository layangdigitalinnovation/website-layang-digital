<section id="pricing" class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 font-outfit">
                Pilih Solusi Sesuai Kebutuhan Bisnis
            </h2>
            <div class="h-1.5 w-20 bg-primary-500 mx-auto rounded-full mb-6"></div>
            <p class="text-lg text-slate-600">
                Kami menawarkan paket yang jelas untuk memastikan investasi digital Anda terukur dan berdampak nyata.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start max-w-6xl mx-auto">
            
            <!-- Plan 1 -->
            <x-pricing-card 
                title="DIGITAL STARTER"
                price="Rp3,5 Juta"
                description="Untuk bisnis yang membutuhkan digital presence profesional."
                :features="['Company profile', 'Landing page', 'Product/service catalog', 'WhatsApp integration', 'Google Maps', 'Contact form', 'Basic SEO', 'Responsive design', 'Deployment']"
                ctaText="Konsultasikan Kebutuhan"
                href="#contact"
            />

            <!-- Plan 2 -->
            <x-pricing-card 
                title="BUSINESS SYSTEM"
                price="Rp9,5 Juta"
                description="Untuk bisnis yang ingin mengubah proses manual menjadi sistem digital."
                :features="['Customer management', 'Sales', 'Inventory', 'Purchasing', 'Finance', 'Approval', 'Dashboard', 'Reporting', 'User management', 'Export data']"
                ctaText="Diskusikan Sistem Bisnis"
                href="#contact"
                :popular="true"
            />

            <!-- Plan 3 -->
            <x-pricing-card 
                title="CUSTOM DIGITAL PLATFORM"
                price="Rp25 Juta"
                description="Untuk perusahaan yang membutuhkan sistem custom, SaaS atau enterprise application."
                :features="['Custom workflow', 'Multi-role', 'SaaS', 'Mobile application', 'API integration', 'Payment gateway', 'Advanced dashboard', 'Cloud infrastructure', 'Third-party integration']"
                ctaText="Konsultasi Project"
                href="#contact"
            />
            
        </div>
        
        <div class="mt-12 text-center text-sm text-slate-500">
            <p>* Harga akhir disesuaikan dengan kompleksitas fitur, jumlah pengguna, integrasi dan kebutuhan bisnis.</p>
        </div>
        
    </div>
</section>

@extends('layouts.app')

@section('title', 'Terms of Service - Layang Digital')

@section('content')
<div class="pt-32 pb-24 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/3">
        <div class="w-96 h-96 bg-primary-100/40 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 font-outfit mb-4">Syarat & Ketentuan Layanan</h1>
            <p class="text-slate-500">Terakhir diperbarui: {{ date('d M Y') }}</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12 mb-20 md:mb-24 prose prose-slate max-w-none">
            <p class="text-lg text-slate-600 mb-8">
                Dengan mengakses atau menggunakan layanan dari Layang Digital Innovation, Anda setuju untuk terikat oleh Syarat dan Ketentuan berikut. Jika Anda tidak setuju dengan ketentuan ini, mohon untuk tidak menggunakan layanan kami.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">1. Layanan Kami</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Layang Digital menyediakan layanan pengembangan perangkat lunak (software development), sistem bisnis, pembuatan aplikasi web dan mobile, serta integrasi API. Rincian dan ruang lingkup spesifik dari setiap proyek akan disepakati dalam kontrak terpisah atau Statement of Work (SOW) antara Layang Digital dan klien.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">2. Hak Kekayaan Intelektual</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Kecuali disepakati sebaliknya secara tertulis:
            </p>
            <ul class="list-disc pl-5 text-slate-600 space-y-2 mb-6">
                <li>Kode sumber (source code) khusus yang dikembangkan untuk proyek klien akan menjadi hak milik klien setelah seluruh pembayaran diselesaikan.</li>
                <li>Layang Digital berhak mempertahankan lisensi atas komponen internal atau library pihak ketiga yang bersifat open-source atau proprietary milik Layang Digital yang digunakan sebagai fondasi proyek.</li>
            </ul>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">3. Pembayaran dan Termin</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Syarat pembayaran, termasuk uang muka (Down Payment) dan milestone pembayaran, akan diuraikan secara detail dalam penawaran (quotation) atau kontrak proyek. Keterlambatan pembayaran dapat mengakibatkan penundaan pengerjaan atau penangguhan layanan hingga pembayaran diselesaikan.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">4. Kewajiban Klien</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Klien setuju untuk memberikan informasi, materi, atau akses yang wajar dan diperlukan agar kami dapat menyelesaikan layanan tepat waktu. Layang Digital tidak bertanggung jawab atas keterlambatan penyelesaian proyek yang diakibatkan oleh kurangnya respons atau aset dari pihak klien.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">5. Batasan Tanggung Jawab</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Layang Digital berusaha semaksimal mungkin untuk memberikan software yang bebas dari bug (error) kritis saat serah terima. Namun, kami tidak menjamin bahwa perangkat lunak akan 100% bebas dari cacat. Garansi perbaikan (maintenance/support) berlaku sesuai jangka waktu yang disepakati dalam kontrak awal.
            </p>

            <div class="mt-12 p-6 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="text-lg font-bold text-slate-900 mb-2">Konsultasi Hukum & Pertanyaan</h4>
                <p class="text-slate-600">
                    Syarat dan Ketentuan ini tunduk pada hukum yang berlaku di Republik Indonesia. Untuk pertanyaan lebih lanjut, silakan hubungi tim dukungan kami melalui:<br>
                    <strong>Email:</strong> cs@layangdigital.com
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

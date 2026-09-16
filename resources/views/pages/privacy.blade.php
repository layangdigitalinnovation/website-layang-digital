@extends('layouts.app')

@section('title', 'Privacy Policy - Layang Digital')

@section('content')
<div class="pt-32 pb-24 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/3">
        <div class="w-96 h-96 bg-primary-100/40 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 font-outfit mb-4">Kebijakan Privasi</h1>
            <p class="text-slate-500">Terakhir diperbarui: {{ date('d M Y') }}</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12 mb-20 md:mb-24 prose prose-slate max-w-none">
            <p class="text-lg text-slate-600 mb-8">
                Selamat datang di Kebijakan Privasi Layang Digital Innovation. Kepercayaan Anda sangat penting bagi kami. Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda saat menggunakan layanan kami.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">1. Informasi yang Kami Kumpulkan</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Kami dapat mengumpulkan informasi pribadi yang Anda berikan secara langsung kepada kami saat mengisi formulir kontak, berlangganan newsletter, atau meminta layanan. Informasi ini mencakup, namun tidak terbatas pada:
            </p>
            <ul class="list-disc pl-5 text-slate-600 space-y-2 mb-6">
                <li>Nama lengkap</li>
                <li>Alamat email</li>
                <li>Nomor telepon / WhatsApp</li>
                <li>Nama perusahaan</li>
                <li>Informasi proyek atau detail kebutuhan bisnis Anda</li>
            </ul>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">2. Bagaimana Kami Menggunakan Informasi Anda</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Informasi yang kami kumpulkan digunakan untuk tujuan berikut:
            </p>
            <ul class="list-disc pl-5 text-slate-600 space-y-2 mb-6">
                <li>Membalas pertanyaan dan memberikan konsultasi awal mengenai proyek Anda.</li>
                <li>Meningkatkan kualitas layanan dan memahami kebutuhan klien kami dengan lebih baik.</li>
                <li>Mengirimkan informasi pembaruan layanan atau penawaran jika Anda telah berlangganan (Anda dapat memilih untuk berhenti kapan saja).</li>
            </ul>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">3. Perlindungan Data</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Kami menerapkan standar keamanan industri yang wajar untuk melindungi data pribadi Anda dari akses, pengungkapan, pengubahan, atau perusakan yang tidak sah. Namun, perlu diketahui bahwa tidak ada metode transmisi data melalui internet yang 100% aman.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">4. Pembagian Informasi</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Layang Digital tidak pernah menjual, menyewakan, atau memperdagangkan informasi pribadi Anda kepada pihak ketiga. Kami hanya dapat membagikan informasi Anda jika diwajibkan oleh hukum atau untuk melindungi hak-hak perusahaan.
            </p>

            <h3 class="text-xl font-bold text-slate-900 mt-8 mb-4">5. Perubahan pada Kebijakan Privasi</h3>
            <p class="text-slate-600 mb-6 leading-relaxed">
                Kami berhak untuk memperbarui Kebijakan Privasi ini kapan saja. Setiap perubahan akan diunggah pada halaman ini dengan tanggal "Terakhir diperbarui" yang direvisi. Kami menyarankan Anda untuk meninjau halaman ini secara berkala.
            </p>

            <div class="mt-12 p-6 bg-slate-50 rounded-xl border border-slate-100">
                <h4 class="text-lg font-bold text-slate-900 mb-2">Hubungi Kami</h4>
                <p class="text-slate-600">
                    Jika Anda memiliki pertanyaan mengenai Kebijakan Privasi ini, silakan hubungi kami melalui:<br>
                    <strong>Email:</strong> cs@layangdigital.com<br>
                    <strong>WhatsApp:</strong> 0821-1692-5851
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

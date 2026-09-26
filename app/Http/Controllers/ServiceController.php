<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $services = [
        'pengembangan-web' => [
            'title' => 'Pengembangan Web',
            'subtitle' => 'Website Modern, Cepat, dan Berdampak',
            'description' => 'Kami membangun website berkinerja tinggi yang dirancang khusus untuk meningkatkan konversi dan merepresentasikan identitas brand Anda di dunia digital. Mulai dari Company Profile, Landing Page, hingga Portal Web yang kompleks.',
            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>',
            'features' => [
                'Desain Responsif & Mobile-Friendly',
                'Optimasi Kecepatan Loading (Performance)',
                'SEO Friendly (Optimasi Mesin Pencari)',
                'Sistem Manajemen Konten (CMS) yang Mudah Digunakan',
                'Keamanan Tingkat Lanjut'
            ],
            'technologies' => ['Laravel', 'React', 'Vue', 'Next.js', 'Tailwind CSS', 'CI/CD']
        ],
        'sistem-bisnis' => [
            'title' => 'Sistem Bisnis',
            'subtitle' => 'Digitalisasi dan Otomatisasi Operasional Anda',
            'description' => 'Tingkatkan efisiensi perusahaan Anda dengan sistem operasional khusus seperti ERP, CRM, HRIS, hingga POS. Kami merancang sistem bisnis yang sepenuhnya disesuaikan dengan alur kerja (workflow) spesifik perusahaan Anda.',
            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>',
            'features' => [
                'Automatisasi Proses Manual & Pengurangan Human-Error',
                'Laporan & Dashboard Real-Time',
                'Manajemen Akses Multi-Role',
                'Custom Workflow sesuai SOP Perusahaan',
                'Skalabilitas Tinggi untuk Pertumbuhan Bisnis'
            ],
            'technologies' => ['Golang', 'Node.js', 'NestJS', 'Laravel', 'PostgreSQL', 'Docker', 'CI/CD']
        ],
        'pengembangan-saas' => [
            'title' => 'Pengembangan SaaS',
            'subtitle' => 'Bangun Aplikasi Berbasis Langganan Skala Global',
            'description' => 'Dari ide hingga produk MVP yang siap diluncurkan. Kami memiliki spesialisasi dalam membangun arsitektur platform SaaS (Software as a Service) multi-tenant yang scalable, aman, dan dirancang untuk ribuan pengguna aktif.',
            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
            'features' => [
                'Arsitektur Multi-Tenant',
                'Sistem Billing & Subscription Tiering',
                'Isolasi Data antar Klien untuk Keamanan Maksimal',
                'Dashboard Analytics Ekstensif',
                'Infrastruktur Cloud yang Tangguh'
            ],
            'technologies' => ['Golang', 'Node.js', 'Laravel', 'React/Vue', 'AWS/GCP', 'Kubernetes', 'Redis', 'CI/CD']
        ],
        'pengembangan-mobile' => [
            'title' => 'Pengembangan Mobile',
            'subtitle' => 'Aplikasi iOS & Android dalam Genggaman',
            'description' => 'Hadirkan bisnis Anda langsung di smartphone pelanggan. Kami mengembangkan aplikasi mobile native dan cross-platform dengan antarmuka yang mulus, stabil, dan memberikan pengalaman pengguna (User Experience) terbaik.',
            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>',
            'features' => [
                'Aplikasi Cross-Platform (iOS & Android)',
                'UI/UX Design yang Intuitif',
                'Integrasi Push Notification',
                'Dukungan Mode Offline',
                'Bantuan Publikasi ke App Store & Play Store'
            ],
            'technologies' => ['Flutter', 'React Native', 'Kotlin', 'Swift', 'Firebase', 'Fastlane (CI/CD)']
        ],
        'software-kustom' => [
            'title' => 'Software Kustom',
            'subtitle' => 'Solusi Spesifik untuk Kebutuhan Unik',
            'description' => 'Tidak semua masalah dapat diselesaikan dengan software jadi. Kami membuat custom software yang dirakit khusus untuk memecahkan masalah unik yang tidak bisa diatasi oleh software pasaran, 100% mengikuti visi Anda.',
            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>',
            'features' => [
                'Konsultasi Sistem dan Arsitektur Mendalam',
                'Pengembangan Modul Bertahap (Agile)',
                'Sepenuhnya Custom sesuai Visi',
                'Codebase Berkualitas Tinggi dan Maintainable',
                'Garansi Dukungan Pasca Rilis'
            ],
            'technologies' => ['Golang', 'Node.js', 'NestJS', 'Python', 'Microservices', 'Docker & Kubernetes', 'CI/CD']
        ],
        'integrasi-api' => [
            'title' => 'Integrasi API',
            'subtitle' => 'Hubungkan Seluruh Ekosistem Digital Anda',
            'description' => 'Hubungkan aplikasi Anda dengan berbagai layanan pihak ketiga (Payment Gateway, WhatsApp API, ERP, Maps) atau bangun ekosistem internal yang mulus. Kami memastikan data mengalir secara real-time dan aman.',
            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>',
            'features' => [
                'Pembuatan RESTful API Berkinerja Tinggi',
                'Integrasi Third-Party API (Midtrans, AWS, Twilio, dll)',
                'Dokumentasi API yang Lengkap',
                'Sistem Webhook Real-time',
                'Manajemen Token & Autentikasi (OAuth)'
            ],
            'technologies' => ['Golang', 'Node.js', 'NestJS', 'REST API', 'GraphQL', 'gRPC', 'RabbitMQ', 'Redis']
        ]
    ];

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }

        $service = $this->services[$slug];
        $allServices = $this->services; // To show other services in sidebar/bottom

        return view('pages.services.show', compact('service', 'slug', 'allServices'));
    }
}

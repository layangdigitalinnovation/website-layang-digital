<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Layang Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('images/Logo-icon-layang-digital80x80.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-jakarta bg-white min-h-screen flex selection:bg-primary-500 selection:text-white">
    
    <!-- Left Side: Branding / Visuals -->
    <div class="hidden lg:flex lg:w-1/2 bg-slate-900 relative overflow-hidden flex-col justify-between p-12">
        <!-- Abstract Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-primary-600 rounded-full blur-[120px] opacity-40"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[60%] h-[60%] bg-blue-600 rounded-full blur-[100px] opacity-30"></div>
            
            <!-- Grid pattern -->
            <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>

        <!-- Header -->
        <div class="relative z-10 flex items-center">
            <a href="/" class="flex items-center group">
                <span class="text-3xl font-extrabold font-outfit tracking-tight text-white transition-colors">
                    Layang<span class="text-primary-400">Digital</span>
                </span>
            </a>
        </div>

        <!-- Center Message -->
        <div class="relative z-10 my-auto">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-500/10 text-primary-300 font-semibold text-sm mb-6 border border-primary-500/20 backdrop-blur-sm">
                <span class="flex w-2 h-2 rounded-full bg-primary-400 mr-2"></span>
                Secure System
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white font-outfit mb-6 leading-tight">
                Kelola Ekosistem Digital Anda <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-blue-400">Dengan Mudah.</span>
            </h1>
            <p class="text-slate-300 text-lg max-w-md leading-relaxed">
                Akses dashboard super admin untuk memonitor prospek terbaru, menerbitkan konten blog, dan menganalisis performa bisnis Anda.
            </p>
        </div>

        <!-- Footer / Credits -->
        <div class="relative z-10 flex items-center text-slate-400 text-sm">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            Sistem dienkripsi dengan standar keamanan tinggi.
        </div>
    </div>

    <!-- Right Side: Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 relative">
        <!-- Mobile Logo (Shows only on small screens) -->
        <div class="absolute top-8 left-8 lg:hidden">
            <a href="/" class="flex items-center">
                <span class="text-2xl font-extrabold font-outfit tracking-tight text-slate-900">
                    Layang<span class="text-primary-600">Digital</span>
                </span>
            </a>
        </div>

        <div class="w-full max-w-md">
            <div class="mb-10 text-center lg:text-left">
                <h2 class="text-3xl font-extrabold font-outfit text-slate-900 mb-3">Selamat Datang 👋</h2>
                <p class="text-slate-500">Silakan masuk menggunakan kredensial admin Anda untuk melanjutkan ke Dashboard.</p>
            </div>

            <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                @csrf
                
                @if ($errors->any())
                    <div class="p-4 rounded-xl bg-red-50 border border-red-100 text-red-600 flex items-start animate-fade-in-up">
                        <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                        <div class="text-sm font-medium">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    </div>
                @endif

                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Alamat Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500 transition-all font-medium" 
                            placeholder="admin@layangdigital.com" required autofocus>
                    </div>
                </div>
                
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-semibold text-slate-700">Kata Sandi</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" 
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500 transition-all font-medium" 
                            placeholder="••••••••" required>
                    </div>
                </div>
                
                <div class="pt-2">
                    <button type="submit" class="w-full flex justify-center items-center py-4 px-4 border border-transparent rounded-xl shadow-lg shadow-primary-500/30 text-sm font-bold text-white bg-primary-600 hover:bg-primary-700 hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200">
                        Masuk Dashboard
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>
            </form>
            
            <div class="mt-8 text-center lg:text-left">
                <a href="/" class="text-sm font-semibold text-slate-500 hover:text-primary-600 transition-colors inline-flex items-center">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda Website
                </a>
            </div>
        </div>
    </div>
    
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.4s ease-out forwards;
        }
    </style>
</body>
</html>

<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Layang Digital</title>
    <link rel="icon" type="image/png" href="{{ asset('images/Logo-icon-layang-digital80x80.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body x-data="{ sidebarOpen: false }" class="h-full text-slate-800 font-jakarta antialiased overflow-hidden">
    
    <div class="h-full flex">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas state. -->
        <div x-show="sidebarOpen" class="relative z-50 md:hidden" role="dialog" aria-modal="true" style="display: none;">
            <!-- Background backdrop -->
            <div x-show="sidebarOpen" 
                 x-transition:enter="transition-opacity ease-linear duration-300" 
                 x-transition:enter-start="opacity-0" 
                 x-transition:enter-end="opacity-100" 
                 x-transition:leave="transition-opacity ease-linear duration-300" 
                 x-transition:leave-start="opacity-100" 
                 x-transition:leave-end="opacity-0" 
                 class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm" @click="sidebarOpen = false"></div>

            <div class="fixed inset-0 flex">
                <div x-show="sidebarOpen" 
                     x-transition:enter="transition ease-in-out duration-300 transform" 
                     x-transition:enter-start="-translate-x-full" 
                     x-transition:enter-end="translate-x-0" 
                     x-transition:leave="transition ease-in-out duration-300 transform" 
                     x-transition:leave-start="translate-x-0" 
                     x-transition:leave-end="-translate-x-full" 
                     class="relative mr-16 flex w-full max-w-xs flex-1 flex-col bg-slate-900 text-white">
                     
                    <!-- Close button -->
                    <div class="absolute top-0 right-0 -mr-12 pt-4">
                        <button type="button" @click="sidebarOpen = false" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="h-16 flex items-center px-6 font-outfit font-bold text-xl border-b border-slate-800 flex-shrink-0">
                        Layang<span class="text-primary-500">Admin</span>
                    </div>
                    
                    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                            Dashboard
                        </a>
                        
                        <div class="pt-4 pb-2">
                            <p class="px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">CMS & Leads</p>
                        </div>
                        
                        <a href="{{ route('admin.inquiries') }}" class="{{ request()->routeIs('admin.inquiries') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            Project Inquiries
                        </a>
                        
                        <a href="{{ route('admin.careers.index') }}" class="{{ request()->routeIs('admin.careers.*') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            Manajemen Karir
                        </a>
                        
                        <a href="{{ route('admin.pixels.index') }}" class="{{ request()->routeIs('admin.pixels.*') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                            Pixel &amp; Iklan
                        </a>
                        
                        <a href="{{ route('admin.blogs') }}" class="{{ request()->routeIs('admin.blogs*') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                            Blog Posts
                        </a>
                    </nav>
                    
                    <div class="p-4 border-t border-slate-800">
                        <a href="/" target="_blank" class="flex items-center text-sm text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            Lihat Website
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <aside class="w-64 bg-slate-900 text-white flex-shrink-0 hidden md:flex flex-col">
            <div class="h-16 flex items-center px-6 font-outfit font-bold text-xl border-b border-slate-800 flex-shrink-0">
                Layang<span class="text-primary-500">Admin</span>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                    Dashboard
                </a>
                
                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">CMS & Leads</p>
                </div>
                
                <a href="{{ route('admin.inquiries') }}" class="{{ request()->routeIs('admin.inquiries') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    Project Inquiries
                </a>
                
                <a href="{{ route('admin.careers.index') }}" class="{{ request()->routeIs('admin.careers.*') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    Manajemen Karir
                </a>
                
                <a href="{{ route('admin.pixels.index') }}" class="{{ request()->routeIs('admin.pixels.*') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                    Pixel &amp; Iklan
                </a>
                
                <a href="{{ route('admin.blogs') }}" class="{{ request()->routeIs('admin.blogs*') ? 'bg-primary-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                    Blog Posts
                </a>
            </nav>
            
            <div class="p-4 border-t border-slate-800">
                <a href="/" target="_blank" class="flex items-center text-sm text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                    Lihat Website
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-w-0 overflow-hidden bg-slate-50">
            <!-- Top header -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 flex-shrink-0 z-10 shadow-sm relative">
                
                <div class="flex items-center">
                    <!-- Mobile menu button -->
                    <button type="button" @click="sidebarOpen = true" class="md:hidden mr-4 p-2 rounded-md text-slate-400 hover:text-primary-600 hover:bg-slate-100 focus:outline-none transition-colors">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <h1 class="text-lg sm:text-xl font-bold font-outfit text-slate-900 truncate">@yield('title')</h1>
                </div>
                
                <div class="flex items-center space-x-3 sm:space-x-4 ml-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-xs sm:text-sm font-semibold text-slate-500 hover:text-red-600 transition-colors">
                            Logout
                        </button>
                    </form>
                    <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-primary-500 to-blue-500 flex items-center justify-center text-white font-bold shadow-sm flex-shrink-0 text-sm">
                        SA
                    </div>
                </div>
            </header>
            
            <!-- Content Area -->
            <div class="flex-1 overflow-y-auto p-4 sm:p-6 md:p-8 relative">
                
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-center shadow-sm">
                        <svg class="w-5 h-5 mr-3 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="text-sm font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                @yield('content')
                
            </div>
        </main>
    </div>

</body>
</html>

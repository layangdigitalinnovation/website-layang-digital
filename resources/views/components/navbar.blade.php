<nav x-data="{ open: false }" class="sticky top-0 z-50 w-full backdrop-blur-lg bg-white/80 border-b border-slate-200 shadow-sm transition-all duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('images/logo-layang1.png') }}" alt="Layang Digital" class="h-10 w-auto group-hover:opacity-90 transition-opacity">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="/" class="text-slate-600 hover:text-primary-600 font-semibold transition-colors duration-200 text-[15px]">Beranda</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-primary-600' : 'text-slate-600' }} hover:text-primary-600 font-semibold transition-colors duration-200 text-[15px]">Tentang Kami</a>
                <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'text-primary-600' : 'text-slate-600' }} hover:text-primary-600 font-semibold transition-colors duration-200 text-[15px]">Blog</a>
                <a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}" class="text-slate-600 hover:text-primary-600 font-semibold transition-colors duration-200 text-[15px]">Kontak</a>
            </div>

            <!-- CTA Button (Desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}" class="inline-flex items-center justify-center rounded-lg px-6 py-2.5 font-semibold bg-slate-900 text-white hover:bg-primary-600 hover:-translate-y-0.5 shadow-md hover:shadow-lg transition-all duration-200 text-[15px]">
                    Konsultasi Gratis
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-4">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-600 hover:text-primary-600 hover:bg-slate-100 focus:outline-none transition-colors" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <template x-teleport="body">
        <div x-show="open" class="md:hidden relative z-[100]" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" style="display: none;">
            <!-- Background backdrop -->
            <div x-show="open" 
                 x-transition:enter="ease-in-out duration-300" 
                 x-transition:enter-start="opacity-0" 
                 x-transition:enter-end="opacity-100" 
                 x-transition:leave="ease-in-out duration-300" 
                 x-transition:leave-start="opacity-100" 
                 x-transition:leave-end="opacity-0" 
                 class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity" 
                 @click="open = false"></div>

            <div class="fixed inset-0 overflow-hidden pointer-events-none">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <!-- Slide-over panel -->
                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transform transition ease-in-out duration-300 sm:duration-500" 
                             x-transition:enter-start="translate-x-full" 
                             x-transition:enter-end="translate-x-0" 
                             x-transition:leave="transform transition ease-in-out duration-300 sm:duration-500" 
                             x-transition:leave-start="translate-x-0" 
                             x-transition:leave-end="translate-x-full" 
                             class="pointer-events-auto relative w-screen max-w-xs">
                            
                            <div class="flex h-full flex-col bg-white shadow-2xl">
                                <div class="px-6 py-6 flex items-center justify-between border-b border-slate-100">
                                    <a href="/" class="flex items-center">
                                        <img src="{{ asset('images/logo-layang1.png') }}" alt="Layang Digital" class="h-8 w-auto">
                                    </a>
                                    <button type="button" class="relative rounded-md text-slate-400 hover:text-primary-600 focus:outline-none transition-colors" @click="open = false">
                                        <span class="absolute -inset-2.5"></span>
                                        <span class="sr-only">Close panel</span>
                                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                
                                <!-- Scrollable body -->
                                <div class="flex-1 overflow-y-auto px-6 py-8 flex flex-col">
                                    <!-- Menu Links -->
                                    <div class="flex flex-col space-y-2">
                                        <a href="/" class="block px-3 py-3 rounded-xl text-lg font-bold text-slate-900 hover:bg-slate-50 hover:text-primary-600 transition-colors" @click="open = false">Beranda</a>
                                        <a href="{{ route('about') }}" class="block px-3 py-3 rounded-xl text-lg font-bold text-slate-900 hover:bg-slate-50 hover:text-primary-600 transition-colors" @click="open = false">Tentang Kami</a>
                                        <a href="{{ route('blog.index') }}" class="block px-3 py-3 rounded-xl text-lg font-bold text-slate-900 hover:bg-slate-50 hover:text-primary-600 transition-colors" @click="open = false">Blog</a>
                                    </div>
                                    
                                    <!-- Bottom Section pushed down -->
                                    <div class="mt-auto pt-10">
                                        <!-- Contact Info -->
                                        <div class="mb-8 space-y-4 px-3 bg-slate-50 rounded-2xl p-5 border border-slate-100">
                                            <h4 class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Info Kontak</h4>
                                            <a href="mailto:cs@layangdigital.com" class="flex items-center gap-3 text-sm font-semibold text-slate-700 hover:text-primary-600 transition-colors">
                                                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-primary-600">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                </div>
                                                cs@layangdigital.com
                                            </a>
                                            <a href="https://wa.me/6282116925851" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-sm font-semibold text-slate-700 hover:text-primary-600 transition-colors">
                                                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-primary-600">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                                </div>
                                                0821-1692-5851
                                            </a>
                                        </div>
                                        
                                        <a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}" class="w-full inline-flex justify-center items-center rounded-xl px-6 py-4 font-bold bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-600/30 transition-all" @click="open = false">
                                            Konsultasi Gratis
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</nav>

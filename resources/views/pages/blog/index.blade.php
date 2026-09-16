<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & Wawasan Digital - Layang Digital</title>
    <meta name="description" content="Kumpulan artikel, tips, dan wawasan terbaru seputar transformasi digital, pengembangan website, dan teknologi untuk memajukan bisnis Anda.">
    <link rel="icon" type="image/png" href="{{ asset('images/Logo-icon-layang-digital80x80.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-jakarta text-slate-800 antialiased selection:bg-primary-500 selection:text-white bg-slate-50">

    <x-navbar />

    <!-- Hero Section -->
    <section class="py-16 md:py-24 relative overflow-hidden bg-white border-b border-slate-200">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute -top-[20%] -right-[10%] w-[50%] h-[50%] bg-primary-100 rounded-full blur-3xl opacity-50"></div>
            <div class="absolute -bottom-[20%] -left-[10%] w-[50%] h-[50%] bg-blue-100 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-600 font-semibold text-sm mb-6 border border-primary-100">
                <span class="flex w-2 h-2 rounded-full bg-primary-600 mr-2"></span>
                Wawasan Digital
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight font-outfit mb-6">
                Blog <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-blue-600">Layang Digital</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Temukan berbagai artikel, tips, dan tren terbaru seputar teknologi dan strategi digitalisasi untuk mengakselerasi pertumbuhan bisnis Anda.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @forelse($posts as $post)
                <article class="bg-white rounded-3xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 group hover:-translate-y-2 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-300 flex flex-col">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block relative aspect-[16/10] overflow-hidden bg-slate-100">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-300">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/90 backdrop-blur-sm text-primary-700 text-xs font-bold shadow-sm">
                                {{ $post->created_at->format('d M Y') }}
                            </span>
                        </div>
                    </a>
                    
                    <div class="p-8 flex flex-col flex-1">
                        <h2 class="text-xl font-bold text-slate-900 font-outfit mb-3 group-hover:text-primary-600 transition-colors leading-snug">
                            <a href="{{ route('blog.show', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                        </h2>
                        
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
                            {{ $post->meta_description ?? Str::limit(strip_tags($post->content), 120) }}
                        </p>
                        
                        <div class="mt-auto flex items-center justify-between border-t border-slate-100 pt-6">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 font-bold text-xs mr-3">
                                    LD
                                </div>
                                <span class="text-sm font-medium text-slate-700">Tim Layang</span>
                            </div>
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-bold text-primary-600 hover:text-primary-700 flex items-center group/btn">
                                Baca 
                                <svg class="w-4 h-4 ml-1 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </article>
                @empty
                <div class="col-span-full text-center py-20">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-100 text-slate-400 mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 font-outfit mb-2">Belum ada artikel</h3>
                    <p class="text-slate-500">Artikel sedang dalam tahap penulisan dan akan segera hadir.</p>
                </div>
                @endforelse

            </div>

            @if($posts->hasPages())
            <div class="mt-16 flex justify-center">
                {{ $posts->links() }}
            </div>
            @endif
        </div>
    </section>

    <x-footer />
</body>
</html>

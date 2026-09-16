<section id="blog-preview" class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-blue-50 rounded-full blur-3xl opacity-60 translate-x-1/3 -translate-y-1/3"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary-600 font-semibold text-sm mb-4 border border-primary-100">
                <span class="flex w-2 h-2 rounded-full bg-primary-600 mr-2"></span>
                Wawasan Digital
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-outfit mb-4">
                Artikel & Berita Terbaru
            </h2>
            <p class="text-lg text-slate-600">
                Temukan tips, strategi, dan wawasan seputar transformasi digital untuk pertumbuhan bisnis Anda.
            </p>
        </div>

        @php
            $latestBlogs = \App\Models\BlogPost::where('is_published', true)->latest()->take(3)->get();
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($latestBlogs as $post)
            <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 group hover:-translate-y-2 hover:shadow-xl transition-all duration-300 flex flex-col">
                <a href="{{ route('blog.show', $post->slug) }}" class="block relative aspect-[16/10] overflow-hidden bg-slate-100">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-slate-300">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/90 backdrop-blur-sm text-primary-700 text-xs font-bold shadow-sm">
                            {{ $post->created_at->format('d M Y') }}
                        </span>
                    </div>
                </a>
                
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-xl font-bold text-slate-900 font-outfit mb-2 group-hover:text-primary-600 transition-colors leading-snug">
                        <a href="{{ route('blog.show', $post->slug) }}">
                            {{ $post->title }}
                        </a>
                    </h3>
                    
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">
                        {{ $post->meta_description ?? Str::limit(strip_tags($post->content), 100) }}
                    </p>
                    
                    <div class="mt-auto flex items-center justify-between border-t border-slate-100 pt-4">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-bold text-primary-600 hover:text-primary-700 flex items-center group/btn">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-1 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-12 bg-white rounded-3xl border border-slate-200 border-dashed">
                <p class="text-slate-500">Artikel sedang dalam tahap penulisan.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center justify-center rounded-xl px-6 py-3 font-semibold bg-white border-2 border-slate-200 text-slate-700 hover:border-primary-600 hover:text-primary-600 transition-colors duration-200">
                Lihat Semua Artikel
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

    </div>
</section>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Layang Digital</title>
    <meta name="description" content="{{ $post->meta_description ?? Str::limit(strip_tags($post->content), 160) }}">
    <link rel="icon" type="image/png" href="{{ asset('images/Logo-icon-layang-digital80x80.png') }}">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->meta_description ?? Str::limit(strip_tags($post->content), 160) }}">
    @if($post->image)
    <meta property="og:image" content="{{ asset('storage/' . $post->image) }}">
    @endif
    <meta property="og:type" content="article">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-jakarta text-slate-800 antialiased selection:bg-primary-500 selection:text-white bg-slate-50">

    <x-navbar />

    <!-- Article Header -->
    <header class="pt-16 pb-12 bg-white border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center justify-between text-sm">
                <a href="{{ route('blog.index') }}" class="text-primary-600 font-medium hover:text-primary-700 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Blog
                </a>
                <span class="text-slate-500 font-medium">{{ $post->created_at->format('d M Y') }}</span>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 font-outfit leading-tight mb-8">
                {{ $post->title }}
            </h1>
            
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-700 font-bold text-lg mr-4 border-2 border-white shadow-sm">
                    LD
                </div>
                <div>
                    <p class="font-bold text-slate-900">Tim Layang Digital</p>
                    <p class="text-sm text-slate-500">Tech & Business Consultant</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Article Content -->
    <main class="py-12 md:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if($post->image)
            <div class="mb-12 rounded-3xl overflow-hidden shadow-xl border border-slate-100 bg-white">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto max-h-[600px] object-cover">
            </div>
            @endif

            <article class="prose prose-lg prose-slate max-w-none prose-headings:font-outfit prose-headings:font-bold prose-a:text-primary-600 prose-img:rounded-2xl">
                {!! $post->content !!}
            </article>

            <!-- Share Section -->
            <div class="mt-16 pt-8 border-t border-slate-200 flex items-center justify-between" x-data="{
                shareNative() {
                    if (navigator.share) {
                        navigator.share({
                            title: '{{ addslashes($post->title) }}',
                            text: 'Baca artikel ini: {{ addslashes($post->title) }}',
                            url: '{{ url()->current() }}'
                        }).catch((error) => console.log('Error sharing', error));
                    } else {
                        alert('Browser/Perangkat Anda tidak mendukung fitur share langsung. Silakan salin tautan artikel ini secara manual.');
                    }
                }
            }">
                <p class="font-bold text-slate-900">Bagikan artikel ini:</p>
                <div class="flex space-x-4">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-[#1DA1F2] hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.195 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-[#1877F2] hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <button type="button" @click="shareNative()" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-[#25D366] hover:text-white transition-colors tooltip-trigger" title="Share ke WhatsApp / Status WA">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </button>
                    <button type="button" @click="shareNative()" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-gradient-to-tr hover:from-[#f09433] hover:via-[#dc2743] hover:to-[#bc1888] hover:text-white transition-all duration-300 tooltip-trigger" title="Share ke Instagram / IG Story">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </button>
                </div>
            </div>
            
        </div>
    </main>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
    <section class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 font-outfit mb-10 text-center">Artikel Terkait</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedPosts as $related)
                <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 group hover:-translate-y-2 hover:shadow-xl transition-all duration-300 flex flex-col">
                    <a href="{{ route('blog.show', $related->slug) }}" class="block relative aspect-[16/10] overflow-hidden bg-slate-100">
                        @if($related->image)
                            <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-300">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                    </a>
                    
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-slate-900 font-outfit mb-2 group-hover:text-primary-600 transition-colors leading-snug">
                            <a href="{{ route('blog.show', $related->slug) }}">{{ $related->title }}</a>
                        </h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            {{ $related->meta_description ?? Str::limit(strip_tags($related->content), 100) }}
                        </p>
                        <a href="{{ route('blog.show', $related->slug) }}" class="mt-auto text-sm font-bold text-primary-600">Baca selengkapnya &rarr;</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="py-16 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[40rem] h-[40rem] bg-primary-600 rounded-full blur-3xl opacity-20"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold font-outfit mb-6">Siap Mengakselerasi Bisnis Anda?</h2>
            <p class="text-slate-300 text-lg mb-8 max-w-2xl mx-auto">Terapkan solusi teknologi yang tepat sasaran bersama Layang Digital.</p>
            <a href="/#contact" class="inline-flex items-center justify-center rounded-lg px-8 py-3.5 font-semibold bg-primary-500 text-white hover:bg-primary-600 hover:-translate-y-0.5 shadow-lg transition-all duration-200">
                Konsultasi Gratis Sekarang
            </a>
        </div>
    </section>

    <x-footer />
</body>
</html>

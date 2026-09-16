@props([
    'client',
    'badge',
    'title',
    'description',
    'highlights' => [],
    'ctaText' => 'Lihat Case Study',
    'href' => '#',
    'image' => null,
])

<div class="group bg-white rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl hover:shadow-primary-900/5 hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
    <!-- Image / Header -->
    <div class="h-48 bg-slate-100 flex items-center justify-center border-b border-slate-100 relative overflow-hidden">
        @if($image)
            <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        @else
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-200 to-slate-50 opacity-50 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative z-10 w-4/5 h-4/5 bg-white/50 backdrop-blur-sm rounded-lg border border-slate-200 flex flex-col items-center justify-center shadow-sm">
                <span class="text-slate-400 font-bold text-lg font-outfit">{{ $client }}</span>
                <span class="text-slate-400 text-xs mt-2">Mockup / Screenshot Area</span>
            </div>
        @endif
    </div>
    
    <!-- Content -->
    <div class="p-6 flex flex-col flex-grow">
        <div class="mb-4">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-primary-50 text-primary-700">
                {{ $badge }}
            </span>
        </div>
        
        <h3 class="text-xl font-bold text-slate-900 mb-3 font-outfit">{{ $title }}</h3>
        
        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
            {{ $description }}
        </p>
        
        <div class="space-y-2 mb-6">
            @foreach($highlights as $highlight)
                <div class="flex items-center text-sm text-slate-600">
                    <svg class="w-4 h-4 mr-2 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    {{ $highlight }}
                </div>
            @endforeach
        </div>
        
        <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="{{ $href }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors group-hover:underline">
                {{ $ctaText }}
                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
        </div>
    </div>
</div>

@props([
    'title',
    'price',
    'description',
    'features' => [],
    'ctaText',
    'href' => '#',
    'popular' => false,
])

<div class="relative bg-white rounded-2xl flex flex-col p-8 {{ $popular ? 'border-2 border-primary-500 shadow-xl shadow-primary-900/10 scale-100 lg:scale-105 z-10' : 'border border-slate-200 shadow-sm' }}">
    
    @if($popular)
        <div class="absolute -top-4 left-1/2 -translate-x-1/2">
            <span class="bg-primary-500 text-white text-xs font-bold uppercase tracking-wider py-1.5 px-3 rounded-full shadow-sm">
                Most Popular
            </span>
        </div>
    @endif

    <div class="mb-6">
        <h3 class="text-xl font-bold text-slate-900 mb-2 font-outfit">{{ $title }}</h3>
        <p class="text-slate-500 text-sm h-10">{{ $description }}</p>
    </div>
    
    <div class="mb-6 pb-6 border-b border-slate-100">
        <span class="text-sm font-medium text-slate-500">Mulai dari</span>
        <div class="flex items-baseline text-slate-900 mt-1">
            <span class="text-3xl font-extrabold tracking-tight font-outfit">{{ $price }}</span>
        </div>
    </div>
    
    <div class="flex-grow mb-8">
        <p class="text-sm font-semibold text-slate-900 mb-4 uppercase tracking-wide">Includes:</p>
        <ul class="space-y-3">
            @foreach($features as $feature)
                <li class="flex text-sm text-slate-600">
                    <svg class="w-5 h-5 text-primary-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    <span>{{ $feature }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    
    <div class="mt-auto">
        <x-button href="{{ $href }}" variant="{{ $popular ? 'primary' : 'outline' }}" class="w-full justify-center">
            {{ $ctaText }}
        </x-button>
    </div>
</div>

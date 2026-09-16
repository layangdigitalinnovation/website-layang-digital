@props([
    'type' => 'button',
    'href' => null,
    'variant' => 'primary', // primary, secondary, outline, ghost
    'class' => '',
])

@php
    $baseClasses = 'inline-flex items-center justify-center rounded-lg px-5 py-3 font-semibold transition-all duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $variants = [
        'primary' => 'bg-primary-600 text-white hover:bg-primary-700 shadow-md hover:shadow-lg hover:-translate-y-0.5 focus:ring-primary-500',
        'secondary' => 'bg-white text-slate-800 hover:bg-slate-50 border border-slate-200 shadow-sm hover:shadow focus:ring-slate-200 hover:-translate-y-0.5',
        'outline' => 'bg-transparent text-primary-600 border border-primary-600 hover:bg-primary-50 focus:ring-primary-500',
        'ghost' => 'bg-transparent text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:ring-slate-200',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . $class;
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif

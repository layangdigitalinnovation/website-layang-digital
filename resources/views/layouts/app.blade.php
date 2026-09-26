@php
    $pixels = \App\Models\AdPixel::where('is_active', true)->get();
@endphp
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Digital Innovation | Software Development & Business Digitalization</title>
    <meta name="description" content="Layang Digital membantu bisnis membangun business system, SaaS, web application, mobile app, dan custom software untuk meningkatkan efisiensi operasional.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/Logo-icon-layang-digital80x80.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Ad Pixels Head -->
    @foreach($pixels as $pixel)
        @if($pixel->script_head)
            {!! $pixel->script_head !!}
        @endif
    @endforeach
</head>
<body class="font-sans text-slate-800 antialiased bg-slate-50 selection:bg-primary-500 selection:text-white flex flex-col min-h-screen">
    
    <!-- Ad Pixels Body -->
    @foreach($pixels as $pixel)
        @if($pixel->script_body)
            {!! $pixel->script_body !!}
        @endif
    @endforeach

    @include('components.navbar')
    
    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>

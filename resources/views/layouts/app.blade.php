<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nexa is a senior service studio for brands ready to move with intention.">
    <title>{{ $title ?? 'Nexa — Move with intention' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a href="{{ route('home') }}" class="brand"><span class="brand-mark">N</span><span>Nexa</span></a>
            <nav class="desktop-nav" aria-label="Main navigation">
                <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">Services</a>
                <a href="{{ route('home') }}#about">About</a>
                <a href="{{ route('home') }}#process">Process</a>
            </nav>
            <a class="button button-dark button-small nav-cta" href="{{ route('services.index') }}">Start a project <span>↗</span></a>
            <button class="menu-toggle" aria-label="Toggle menu">☰</button>
        </div>
    </header>
    <main>@yield('content')</main>
    <footer class="site-footer">
        <div class="container footer-grid">
            <div><a href="{{ route('home') }}" class="brand brand-light"><span class="brand-mark">N</span><span>Nexa</span></a><p class="footer-note">A senior service studio for brands ready to move with intention.</p></div>
            <div><p class="footer-label">Explore</p><a href="{{ route('services.index') }}">Services</a><a href="{{ route('home') }}#about">About us</a><a href="{{ route('home') }}#process">Our process</a></div>
            <div><p class="footer-label">Say hello</p><a href="mailto:hello@nexa.studio">hello@nexa.studio</a><p>New York · London · Remote</p></div>
            <div><p class="footer-label">Follow along</p><a href="#">Instagram ↗</a><a href="#">LinkedIn ↗</a></div>
        </div>
        <div class="container footer-bottom"><span>© {{ date('Y') }} Nexa Studio</span><span>Built for the next good thing.</span></div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

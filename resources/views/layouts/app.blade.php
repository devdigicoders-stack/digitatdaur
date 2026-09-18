<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary SEO Meta Tags -->
    <title>@yield('title', 'Digital Daur | Best Digital Marketing & IT Solutions Company in Lucknow')</title>
    <meta name="description" content="@yield('meta_description', 'Digital Daur is Lucknow\'s premier digital marketing & web development agency. We deliver high-ROI SEO, custom Laravel web development, social media ads, and IT solutions.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Digital Marketing Company in Lucknow, SEO Services Lucknow, Web Development Agency Lucknow, IT Company Lucknow, Digital Daur, Website Development, Social Media Ads, Laravel Development Lucknow')">
    <meta name="author" content="Digital Daur">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta name="theme-color" content="#0F172A">

    <!-- Geo Location Tags for Local SEO in Lucknow -->
    <meta name="geo.region" content="IN-UP">
    <meta name="geo.placename" content="Lucknow">
    <meta name="geo.position" content="26.8467;80.9462">
    <meta name="ICBM" content="26.8467, 80.9462">

    <!-- Favicon Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon.png') }}">

    <!-- Open Graph / WhatsApp / Facebook Link Sharing -->
    <meta property="og:site_name" content="Digital Daur">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Digital Daur | Digital Marketing & IT Solutions Company in Lucknow')">
    <meta property="og:description" content="@yield('og_description', 'Transform your business with Lucknow\'s top digital marketing, SEO, and web development agency. Get a free consultation today!')">
    <meta property="og:image" content="@yield('og_image', url(asset('images/why-choose-us.jpg')))">
    <meta property="og:image:secure_url" content="@yield('og_image', url(asset('images/why-choose-us.jpg')))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Digital Daur - Digital Marketing & IT Solutions Lucknow">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Link Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Digital Daur | Digital Marketing & IT Solutions Company in Lucknow')">
    <meta name="twitter:description" content="@yield('og_description', 'Transform your business with Lucknow\'s top digital marketing, SEO, and web development agency.')">
    <meta name="twitter:image" content="@yield('og_image', url(asset('images/why-choose-us.jpg')))">

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Organization & LocalBusiness JSON-LD Schema for Google Ranking -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "LocalBusiness",
          "@@id": "{{ url('/') }}#organization",
          "name": "Digital Daur",
          "url": "{{ url('/') }}",
          "logo": "{{ url(asset('images/logo.png')) }}",
          "image": "{{ url(asset('images/why-choose-us.jpg')) }}",
          "description": "Lucknow's premier digital marketing & custom web development agency specializing in SEO, Laravel development, app development, and IT solutions.",
          "telephone": "+91 91984 83820",
          "email": "info@digitaldaur.com",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Hazratganj Main Market",
            "addressLocality": "Lucknow",
            "addressRegion": "UP",
            "postalCode": "226001",
            "addressCountry": "IN"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": "26.8467",
            "longitude": "80.9462"
          },
          "sameAs": [
            "https://www.facebook.com/digitaldaur",
            "https://www.instagram.com/digitaldaur",
            "https://www.linkedin.com/company/digitaldaur"
          ]
        },
        {
          "@@type": "WebSite",
          "@@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "Digital Daur",
          "description": "Best Digital Marketing & IT Solutions Company in Lucknow",
          "publisher": {
            "@@id": "{{ url('/') }}#organization"
          }
        }
      ]
    }
    </script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif

    <style>
        @keyframes vibrate {
            0%, 100% { transform: rotate(0deg) scale(1); }
            10% { transform: rotate(-12deg) scale(1.08); }
            20% { transform: rotate(12deg) scale(1.08); }
            30% { transform: rotate(-10deg) scale(1.05); }
            40% { transform: rotate(10deg) scale(1.05); }
            50% { transform: rotate(-4deg) scale(1.02); }
            60% { transform: rotate(0deg) scale(1); }
        }
        .animate-vibrate {
            animation: vibrate 2.5s infinite ease-in-out;
        }
    </style>

    @stack('styles')
</head>
<body class="font-sans antialiased text-slate-800 bg-[#FAF6ED] min-h-screen flex flex-col justify-between selection:bg-[#EC4813] selection:text-white">

    <!-- HEADER PARTIAL -->
    @include('partials.header')

    <!-- MAIN CONTENT BODY -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER PARTIAL -->
    @include('partials.footer')

    <!-- FLOATING WIDGETS & MODALS -->
    @include('partials.floating-widgets')

    @stack('scripts')
</body>
</html>

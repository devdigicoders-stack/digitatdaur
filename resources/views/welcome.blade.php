@extends('layouts.app')

@section('title', 'Digital Daur | Best Digital Marketing Company & Web Development Agency in Lucknow')
@section('meta_description', 'Digital Daur is Lucknow\'s premier digital marketing agency & IT company. We specialize in high-ROI SEO, custom Laravel web development, mobile apps, and targeted social media ads.')
@section('meta_keywords', 'Digital Marketing Company in Lucknow, Best SEO Agency Lucknow, Web Development Company Lucknow, Custom Laravel Development, IT Company Lucknow, Social Media Marketing Lucknow')
@section('og_title', 'Digital Daur | Best Digital Marketing & IT Solutions Company in Lucknow')
@section('og_description', 'Transform your business growth with Lucknow\'s top digital marketing and web development agency. Get a free audit today!')
@section('og_image', url(asset('images/why-choose-us.jpg')))

@section('content')
    <!-- 3. HERO SECTION (100% Vector Art & Layout Match with Reference) -->
    <section class="relative bg-[#0F172A] text-white min-h-[600px] flex items-center overflow-hidden">
        <!-- Background Image with Soft Warm Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero-team.jpg') }}" alt="IT Professionals collaborating"
                class="w-full h-full object-cover object-center filter brightness-[0.70]">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0F172A]/90 via-[#0F172A]/70 to-[#0F172A]/40"></div>
        </div>

        <!-- Left Vector Art Accents (Exact Reference Match - Desktop Only) -->
        <div class="hidden sm:block absolute bottom-0 left-0 pointer-events-none z-10 w-96 h-96">
            <svg class="w-full h-full" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Large Orange Curve -->
                <path d="M-60 360 C-10 210, 100 290, 80 190 C60 100, -20 120, -60 40" stroke="#EC4813" stroke-width="22"
                    stroke-linecap="round" />
                <!-- Solid White Dot on Orange Curve -->
                <circle cx="62" cy="242" r="8" fill="white" />
                <!-- Tilted Square Diamond Outline -->
                <rect x="20" y="190" width="75" height="75" transform="rotate(45 20 190)" stroke="white" stroke-width="1.8"
                    stroke-opacity="0.35" />
                <!-- Concentric Circle Arcs at Bottom Corner -->
                <circle cx="0" cy="300" r="40" stroke="white" stroke-width="1.5" stroke-opacity="0.25" />
                <circle cx="0" cy="300" r="70" stroke="white" stroke-width="1.5" stroke-opacity="0.25" />
                <!-- Plus signs (+) -->
                <text x="25" y="115" fill="white" fill-opacity="0.5" font-size="18" font-family="sans-serif">+</text>
                <text x="150" y="245" fill="white" fill-opacity="0.5" font-size="18" font-family="sans-serif">+</text>
            </svg>
        </div>

        <!-- Right Vector Art Accents (Exact Reference Match - Desktop Only) -->
        <div class="hidden sm:block absolute bottom-0 right-0 pointer-events-none z-10 w-96 h-96">
            <svg class="w-full h-full" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
               
                <!-- Top Right Orange Curved Arc -->
                <path d="M280 40 A 100 100 0 0 1 200 150" stroke="#EC4813" stroke-width="22" stroke-linecap="round"
                    fill="none" />
                <!-- Orange Stadium / Pill Track Vector Shape -->
                <path d="M120 180 L250 180 A 30 30 0 0 1 250 240 L120 240 A 30 30 0 0 1 120 180" stroke="#EC4813"
                    stroke-width="22" fill="none" />
                <circle cx="250" cy="210" r="8" fill="white" />
                <!-- Bottom Right Large Orange Ring Arc -->
                <path d="M140 300 A 110 110 0 0 0 300 130" stroke="#EC4813" stroke-width="22" fill="none" />
                <!-- Plus signs -->
                <text x="100" y="85" fill="white" fill-opacity="0.5" font-size="18" font-family="sans-serif">+</text>
                <text x="280" y="90" fill="white" fill-opacity="0.5" font-size="18" font-family="sans-serif">+</text>
                <text x="235" y="270" fill="white" fill-opacity="0.5" font-size="18" font-family="sans-serif">+</text>
           
            </svg>
        </div>

        <!-- Hero Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-16 sm:py-20 relative z-20 w-full">
            <div class="max-w-2xl space-y-6">
                <!-- Subtitle with Sun/Gear Icon -->
                <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                    <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                        <path stroke-linecap="round" stroke-width="2"
                            d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                    </svg>
                    <span>Powering The Future</span>
                </div>

                <!-- H1 Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-[1.15] text-white tracking-tight">
                    Stay Ahead<br>
                    Cutting-<span class="text-[#EC4813]">Technology</span><br>
                    IT Landscape
                </h1>

                <!-- Paragraph Description -->
                <p class="text-gray-200 text-sm sm:text-base leading-relaxed max-w-lg font-normal">
                    The timeframe for results can vary depending on the specific services required and the complexity of
                    your business. It is best to discuss timelines and expecs.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap items-center gap-6 pt-3">
                    <button onclick="openLeadModal()"
                        class="bg-[#EC4813] hover:bg-[#C9390B] text-white px-7 py-3.5 rounded-lg font-bold text-xs uppercase tracking-wider shadow-xl shadow-orange-500/30 transition transform hover:-translate-y-0.5 flex items-center gap-2 cursor-pointer">
                        <span>START FREE TRIAL</span>
                        <span>→</span>
                    </button>


                </div>
            </div>
        </div>
    </section>

    <!-- 4. FEATURE CARDS GRID (Floating Row below Hero) -->
    <section class="relative z-20 -mt-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Feature Card 1 -->
            <div
                class="bg-white p-6 rounded-xl shadow-xl border border-gray-100 hover:border-[#EC4813]/50 hover:shadow-2xl transition transform hover:-translate-y-1.5 group">
                <div
                    class="w-14 h-14 rounded-xl bg-[#FFECE5] text-[#EC4813] flex items-center justify-center mb-5 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Web & App Development</h3>
                <p class="text-gray-600 text-sm leading-relaxed">High-performance Laravel & React web applications designed
                    for speed and conversions.</p>
            </div>

            <!-- Feature Card 2 -->
            <div
                class="bg-white p-6 rounded-xl shadow-xl border border-gray-100 hover:border-[#EC4813]/50 hover:shadow-2xl transition transform hover:-translate-y-1.5 group">
                <div
                    class="w-14 h-14 rounded-xl bg-[#FFECE5] text-[#EC4813] flex items-center justify-center mb-5 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">SEO & Growth Marketing</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Rank #1 on Google in Lucknow with targeted keywords,
                    technical SEO, and authority building.</p>
            </div>

            <!-- Feature Card 3 -->
            <div
                class="bg-white p-6 rounded-xl shadow-xl border border-gray-100 hover:border-[#EC4813]/50 hover:shadow-2xl transition transform hover:-translate-y-1.5 group">
                <div
                    class="w-14 h-14 rounded-xl bg-[#FFECE5] text-[#EC4813] flex items-center justify-center mb-5 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Enterprise IT & Cloud</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Secure cloud hosting, server management, and 24/7 technical
                    support for business peace of mind.</p>
            </div>

            <!-- Feature Card 4 -->
            <div
                class="bg-white p-6 rounded-xl shadow-xl border border-gray-100 hover:border-[#EC4813]/50 hover:shadow-2xl transition transform hover:-translate-y-1.5 group">
                <div
                    class="w-14 h-14 rounded-xl bg-[#FFECE5] text-[#EC4813] flex items-center justify-center mb-5 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Brand & UI/UX Design</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Creative visual identity, brand strategy, and intuitive
                    UI/UX design that captures customer trust.</p>
            </div>
        </div>
    </section>

    <!-- 5. ABOUT US SECTION -->
    <section id="about" class="py-24 bg-[#FAF6ED] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- About Left Content -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                        <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                            <path stroke-linecap="round" stroke-width="2"
                                d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                        </svg>
                        <span>About Digital Daur</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                        Empower Your Business With <span class="text-[#EC4813]">IT & Digital Solutions</span>
                    </h2>

                    <p class="text-gray-600 text-base leading-relaxed">
                        Headquartered in Hazratganj, Lucknow, Digital Daur is a full-service IT & Digital Marketing
                        consultancy. We specialize in transforming businesses into market leaders through intelligent web
                        development, search engine supremacy, and performance-based marketing.
                    </p>

                    <!-- Checklist -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-[#EC4813] text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-800">10+ Years Industry Excellence</span>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-[#EC4813] text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-800">Dedicated Expert Team in Lucknow</span>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-[#EC4813] text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-800">Data-Driven SEO & High ROAS</span>
                        </div>

                        <div class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-[#EC4813] text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-800">24/7 Dedicated Client Support</span>
                        </div>
                    </div>

                    <!-- Bottom Callout & CTA -->
                    <div class="pt-6 flex flex-wrap items-center gap-6">
                        <button onclick="openLeadModal()"
                            class="bg-[#EC4813] hover:bg-[#C9390B] text-white px-7 py-3.5 rounded-md font-bold text-sm shadow-lg shadow-orange-500/20 transition flex items-center gap-2 cursor-pointer">
                            <span>Discover More</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>

                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-900 text-amber-400 flex items-center justify-center font-bold text-xs">
                                4.9★
                            </div>
                            <div>
                                <h5 class="text-xs font-bold text-slate-900">Rated 4.9/5 by Clients</h5>
                                <p class="text-[11px] text-gray-500">Based on 500+ verified reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Right Media Stacked Photos -->
                <div class="lg:col-span-6 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Top Main Photo -->
                        <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white bg-white">
                            <img src="{{ asset('images/about-typing.jpg') }}"
                                alt="Web Developer Coding at Digital Daur Lucknow" class="w-full h-80 object-cover">
                        </div>

                        <!-- Inset Floating Photo -->
                        <div
                            class="absolute -bottom-10 -left-6 sm:-left-10 w-2/3 rounded-2xl overflow-hidden shadow-2xl border-4 border-white hidden sm:block">
                            <img src="{{ asset('images/about-meeting.jpg') }}"
                                alt="Digital Daur Lucknow Office Team Discussion" class="w-full h-48 object-cover">
                        </div>

                        <!-- Experience Badge Pill -->
                        <div class="absolute top-6 right-6 bg-[#EC4813] text-white p-4 rounded-xl shadow-xl text-center">
                            <span class="block text-3xl font-extrabold">10+</span>
                            <span class="text-[11px] uppercase font-bold tracking-wider">Years Experience</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. SERVICES SECTION ("Simplify Complexity With IT Solutions") -->
    <section id="services" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div class="inline-flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                    <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                        <path stroke-linecap="round" stroke-width="2"
                            d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                    </svg>
                    <span>Our Services</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Simplify Complexity With <span class="text-[#EC4813]">Smart Digital Solutions</span>
                </h2>
                <p class="text-gray-500 text-sm">Comprehensive digital and IT services tailored specifically to power
                    business growth in Lucknow and nationwide.</p>
            </div>

            <!-- Service Cards Row with Big Outlined Index Numbers -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 01 -->
                <div
                    class="bg-white p-8 rounded-2xl border border-gray-200 shadow-lg hover:border-[#EC4813] hover:shadow-2xl transition duration-300 relative group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div
                                class="w-14 h-14 rounded-xl bg-[#FFECE5] text-[#EC4813] flex items-center justify-center group-hover:bg-[#EC4813] group-hover:text-white transition duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <span
                                class="text-5xl font-black text-stroke-outline opacity-40 group-hover:text-[#EC4813]/30 transition duration-300">01</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Search Engine Optimization (SEO)</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Dominate local & national Google search rankings in Lucknow. On-page SEO, technical audits,
                            high-authority backlink building, and keyword growth strategies.
                        </p>
                    </div>
                    <button onclick="openLeadModal()"
                        class="inline-flex items-center gap-2 text-sm font-bold text-[#EC4813] hover:text-[#C9390B] transition cursor-pointer">
                        <span>Explore Service</span>
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>

                <!-- Service Card 02 (Featured Center Card with Light Cream Background) -->
                <div
                    class="bg-[#FAF6ED] p-8 rounded-2xl border-2 border-[#EC4813]/40 shadow-xl hover:shadow-2xl transition duration-300 relative group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div
                                class="w-14 h-14 rounded-xl bg-[#EC4813] text-white flex items-center justify-center shadow-lg shadow-orange-500/30">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <span class="text-5xl font-black text-[#EC4813]/40">02</span>
                        </div>
                        <span
                            class="bg-[#EC4813] text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md mb-2 inline-block">MOST
                            POPULAR</span>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Web & Mobile App Development</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Build scalable, modern web applications and mobile apps using Laravel, React, and Tailwind. Fast
                            load times, responsive UI/UX, and robust API integrations.
                        </p>
                    </div>
                    <button onclick="openLeadModal()"
                        class="inline-flex items-center gap-2 text-sm font-bold text-[#EC4813] hover:text-[#C9390B] transition cursor-pointer">
                        <span>Explore Service</span>
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>

                <!-- Service Card 03 -->
                <div
                    class="bg-white p-8 rounded-2xl border border-gray-200 shadow-lg hover:border-[#EC4813] hover:shadow-2xl transition duration-300 relative group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div
                                class="w-14 h-14 rounded-xl bg-[#FFECE5] text-[#EC4813] flex items-center justify-center group-hover:bg-[#EC4813] group-hover:text-white transition duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                </svg>
                            </div>
                            <span
                                class="text-5xl font-black text-stroke-outline opacity-40 group-hover:text-[#EC4813]/30 transition duration-300">03</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Performance Marketing & Ads</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            High-ROI Meta (Facebook/Instagram) & Google Pay-Per-Click (PPC) ads tailored to drive qualified
                            leads, low cost-per-acquisition, and maximum conversion rates.
                        </p>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-2 text-sm font-bold text-[#EC4813] hover:text-[#C9390B] transition">
                        <span>Explore Service</span>
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FEATURE SHOWCASE ("Enhance Your Performance With Technology") -->
    <section id="why-us" class="py-24 bg-[#FAF6ED] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Left Showcase Info -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                        <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                            <path stroke-linecap="round" stroke-width="2"
                                d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                        </svg>
                        <span>Why Choose Us</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                        Enhance Your <span class="text-[#EC4813]">Performance With Technology</span>
                    </h2>

                    <p class="text-gray-600 text-base leading-relaxed">
                        We combine cutting-edge technology stacks with proven marketing intelligence to help businesses
                        scale seamlessly without technical roadblocks.
                    </p>

                    <!-- Feature List -->
                    <div class="space-y-4 pt-2">
                        <div class="p-4 bg-white rounded-xl shadow-sm border border-gray-200 flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#FFECE5] text-[#EC4813] flex items-center justify-center font-bold">
                                01
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Transparent Analytics & Reporting</h4>
                                <p class="text-gray-500 text-xs">Real-time keyword dashboards & campaign ROAS metrics</p>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-xl shadow-sm border border-gray-200 flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#FFECE5] text-[#EC4813] flex items-center justify-center font-bold">
                                02
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Scalable Enterprise Architecture</h4>
                                <p class="text-gray-500 text-xs">Built for high traffic, cloud security, and zero downtime
                                </p>
                            </div>
                        </div>

                        <div class="p-4 bg-white rounded-xl shadow-sm border border-gray-200 flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#FFECE5] text-[#EC4813] flex items-center justify-center font-bold">
                                03
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Dedicated Account Manager</h4>
                                <p class="text-gray-500 text-xs">Direct communication & strategy calls with our Lucknow team
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Right Showcase Single Image -->
                <div class="lg:col-span-7 relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-[#EC4813]/20 to-orange-400/20 rounded-3xl blur-2xl opacity-60 group-hover:opacity-90 transition duration-500"></div>
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-white">
                        <img src="{{ asset('images/why-choose-us.jpg') }}" 
                            alt="Business Growth Analytics & Technology - Digital Daur Lucknow"
                            class="w-full h-auto object-cover max-h-[500px] transform group-hover:scale-[1.02] transition duration-700 ease-out">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. COUNTER STATS ROW (Eye-Soothing Premium Soft Cards with Scroll Counter) -->
    <section id="counterSection" class="py-16 bg-[#FAF6ED]/60 relative z-20 overflow-hidden border-y border-orange-100/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Stat Pill 1: Happy Clients -->
                <div
                    class="bg-white p-8 rounded-3xl border border-orange-100 shadow-lg shadow-orange-500/5 text-center transform hover:-translate-y-2 hover:border-[#EC4813]/40 hover:shadow-2xl hover:shadow-orange-500/10 transition duration-300 relative group overflow-hidden">
                    <div
                        class="absolute -right-8 -bottom-8 w-24 h-24 bg-[#EC4813]/5 rounded-full blur-xl group-hover:bg-[#EC4813]/10 transition duration-300">
                    </div>
                    <div
                        class="w-14 h-14 rounded-2xl bg-[#FFF1ED] border border-[#EC4813]/15 flex items-center justify-center text-[#EC4813] mx-auto mb-4 group-hover:scale-110 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div
                        class="text-4xl sm:text-5xl font-bold text-slate-900 mb-1 flex items-center justify-center tracking-tight">
                        <span class="counter-number" data-target="500" data-decimals="0">0</span>
                        <span class="text-[#EC4813] ml-0.5">+</span>
                    </div>
                    <span class="text-xs uppercase font-semibold tracking-wider text-slate-500 block">Happy Clients</span>
                </div>

                <!-- Stat Pill 2: Projects Completed -->
                <div
                    class="bg-white p-8 rounded-3xl border border-orange-100 shadow-lg shadow-orange-500/5 text-center transform hover:-translate-y-2 hover:border-[#EC4813]/40 hover:shadow-2xl hover:shadow-orange-500/10 transition duration-300 relative group overflow-hidden">
                    <div
                        class="absolute -right-8 -bottom-8 w-24 h-24 bg-[#EC4813]/5 rounded-full blur-xl group-hover:bg-[#EC4813]/10 transition duration-300">
                    </div>
                    <div
                        class="w-14 h-14 rounded-2xl bg-[#FFF1ED] border border-[#EC4813]/15 flex items-center justify-center text-[#EC4813] mx-auto mb-4 group-hover:scale-110 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div
                        class="text-4xl sm:text-5xl font-bold text-slate-900 mb-1 flex items-center justify-center tracking-tight">
                        <span class="counter-number" data-target="1200" data-decimals="0">0</span>
                        <span class="text-[#EC4813] ml-0.5">+</span>
                    </div>
                    <span class="text-xs uppercase font-semibold tracking-wider text-slate-500 block">Projects
                        Completed</span>
                </div>

                <!-- Stat Pill 3: Satisfaction Rate -->
                <div
                    class="bg-white p-8 rounded-3xl border border-orange-100 shadow-lg shadow-orange-500/5 text-center transform hover:-translate-y-2 hover:border-[#EC4813]/40 hover:shadow-2xl hover:shadow-orange-500/10 transition duration-300 relative group overflow-hidden">
                    <div
                        class="absolute -right-8 -bottom-8 w-24 h-24 bg-[#EC4813]/5 rounded-full blur-xl group-hover:bg-[#EC4813]/10 transition duration-300">
                    </div>
                    <div
                        class="w-14 h-14 rounded-2xl bg-[#FFF1ED] border border-[#EC4813]/15 flex items-center justify-center text-[#EC4813] mx-auto mb-4 group-hover:scale-110 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <div
                        class="text-4xl sm:text-5xl font-bold text-slate-900 mb-1 flex items-center justify-center tracking-tight">
                        <span class="counter-number" data-target="99.8" data-decimals="1">0.0</span>
                        <span class="text-[#EC4813] ml-0.5">%</span>
                    </div>
                    <span class="text-xs uppercase font-semibold tracking-wider text-slate-500 block">Satisfaction
                        Rate</span>
                </div>

                <!-- Stat Pill 4: Industry Awards -->
                <div
                    class="bg-white p-8 rounded-3xl border border-orange-100 shadow-lg shadow-orange-500/5 text-center transform hover:-translate-y-2 hover:border-[#EC4813]/40 hover:shadow-2xl hover:shadow-orange-500/10 transition duration-300 relative group overflow-hidden">
                    <div
                        class="absolute -right-8 -bottom-8 w-24 h-24 bg-[#EC4813]/5 rounded-full blur-xl group-hover:bg-[#EC4813]/10 transition duration-300">
                    </div>
                    <div
                        class="w-14 h-14 rounded-2xl bg-[#FFF1ED] border border-[#EC4813]/15 flex items-center justify-center text-[#EC4813] mx-auto mb-4 group-hover:scale-110 group-hover:bg-[#EC4813] group-hover:text-white transition duration-300 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <div
                        class="text-4xl sm:text-5xl font-bold text-slate-900 mb-1 flex items-center justify-center tracking-tight">
                        <span class="counter-number" data-target="25" data-decimals="0">0</span>
                        <span class="text-[#EC4813] ml-0.5">+</span>
                    </div>
                    <span class="text-xs uppercase font-semibold tracking-wider text-slate-500 block">Industry Awards</span>
                </div>

            </div>
        </div>
    </section>

    <!-- 9. PRICING PLANS SECTION -->
    <section id="pricing" class="py-24 bg-[#FAF6ED] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div class="inline-flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                    <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                        <path stroke-linecap="round" stroke-width="2"
                            d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                    </svg>
                    <span>Pricing Plans</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Transparent Packages For <span class="text-[#EC4813]">Growing Businesses</span>
                </h2>
                <p class="text-gray-500 text-sm">Choose the perfect plan tailored for local Lucknow startups or scaling
                    enterprises.</p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Starter Plan -->
                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-lg hover:shadow-xl transition space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">Starter Business</h3>
                        <p class="text-gray-500 text-xs mt-1">Ideal for local Lucknow businesses</p>
                    </div>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-extrabold text-slate-900">₹9,999</span>
                        <span class="text-gray-500 text-xs font-semibold">/ month</span>
                    </div>
                    <ul class="space-y-3 text-sm text-gray-600 border-t border-b border-gray-100 py-6">
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>5-Page Responsive Website</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Google My Business SEO</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>5 Targeted Keyword Tracking</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Monthly Performance Report</span>
                        </li>
                    </ul>
                    <button onclick="openLeadModal()"
                        class="block w-full text-center bg-gray-100 hover:bg-[#EC4813] hover:text-white text-slate-800 font-bold py-3.5 rounded-lg transition cursor-pointer">Choose
                        Plan</button>
                </div>

                <!-- Growth Plan (Featured Cream Background Card) -->
                <div
                    class="bg-[#FAF6ED] p-8 rounded-2xl border-2 border-[#EC4813] shadow-2xl relative transform lg:-translate-y-2 space-y-6">
                    <span
                        class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-[#EC4813] text-white text-[11px] font-bold uppercase tracking-wider px-4 py-1 rounded-full shadow-md">MOST
                        POPULAR</span>
                    <div>
                        <h3 class="text-2xl font-bold text-slate-900">Growth Scale</h3>
                        <p class="text-gray-500 text-xs mt-1">Best for expanding brands & e-commerce</p>
                    </div>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-extrabold text-[#EC4813]">₹24,999</span>
                        <span class="text-gray-500 text-xs font-semibold">/ month</span>
                    </div>
                    <ul class="space-y-3 text-sm text-gray-700 border-t border-b border-gray-200 py-6">
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold">Custom Laravel / React Web App</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold">Complete Organic SEO Suite</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Meta & Google Ads Campaign Setup</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>20 Keyword Rank Tracking</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Priority 24/7 Account Support</span>
                        </li>
                    </ul>
                    <button onclick="openLeadModal()"
                        class="block w-full text-center bg-[#EC4813] hover:bg-[#C9390B] text-white font-bold py-4 rounded-lg shadow-lg shadow-orange-500/30 transition cursor-pointer">Choose
                        Plan</button>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-lg hover:shadow-xl transition space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">Enterprise Custom</h3>
                        <p class="text-gray-500 text-xs mt-1">Built for large enterprise & corporates</p>
                    </div>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-extrabold text-slate-900">₹49,999</span>
                        <span class="text-gray-500 text-xs font-semibold">/ month</span>
                    </div>
                    <ul class="space-y-3 text-sm text-gray-600 border-t border-b border-gray-100 py-6">
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Custom Full-Stack Mobile & Web Portal</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Omnichannel Performance Marketing</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Unlimited Keyword Optimization</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#EC4813]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Dedicated On-Site/Remote Manager</span>
                        </li>
                    </ul>
                    <a href="#contact"
                        class="block w-full text-center bg-gray-100 hover:bg-[#EC4813] hover:text-white text-slate-800 font-bold py-3.5 rounded-lg transition">Choose
                        Plan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. DARK TECH BANNER ("Stay Ahead With Cutting-Edge Technology" - 100% Reference Design Match) -->
    <section class="py-24 bg-[#080C14] text-white relative overflow-hidden">
        <!-- Wireframe Mesh Circle Background Accent (Far Left) -->
        <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-[450px] h-[450px] opacity-25 pointer-events-none z-0">
            <svg class="w-full h-full text-slate-500" viewBox="0 0 400 400" fill="none">
                <ellipse cx="200" cy="200" rx="180" ry="180" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="150" ry="180" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="110" ry="180" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="70" ry="180" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="30" ry="180" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="180" ry="140" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="180" ry="90" stroke="currentColor" stroke-width="1" />
                <ellipse cx="200" cy="200" rx="180" ry="40" stroke="currentColor" stroke-width="1" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Left Details Content Column -->
                <div class="lg:col-span-6 space-y-6">
                    <!-- Subtitle with Sun/Gear Icon -->
                    <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                        <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                            <path stroke-linecap="round" stroke-width="2"
                                d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                        </svg>
                        <span>Why Choose Us</span>
                    </div>

                    <!-- Main H2 Heading -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight">
                        Stay Ahead With<br>
                        Cutting-Edge <span class="text-[#EC4813]">Technology</span>
                    </h2>

                    <!-- Stacked Feature Cards Container with Connecting Dotted Arc -->
                    <div class="relative space-y-4 pt-2 max-w-lg">

                        <!-- Dotted Arc SVG connecting Card 1 & Card 2 on right edge -->
                        <div
                            class="absolute right-3 top-[22%] bottom-[22%] w-6 pointer-events-none z-20 flex flex-col justify-between items-center">
                            <span class="w-2 h-2 rounded-full bg-[#EC4813]"></span>
                            <div class="h-full w-0.5 border-r-2 border-dotted border-[#EC4813] my-1"></div>
                            <span class="w-2 h-2 rounded-full bg-[#EC4813]"></span>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-[#101726]/90 border border-slate-800 rounded-2xl p-5 shadow-xl relative z-10 flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-lg border border-slate-700 bg-slate-900/80 flex items-center justify-center text-white shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div class="pr-6">
                                <h4 class="font-bold text-white text-base mb-1">CloudConnect IT Services</h4>
                                <p class="text-gray-400 text-xs leading-relaxed">
                                    IT Solution is a broad category that encompass the solutions aimed at solving problems
                                    or improving business efficiency.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="bg-[#101726]/90 border border-slate-800 rounded-2xl p-5 shadow-xl relative z-10 flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-lg border border-slate-700 bg-slate-900/80 flex items-center justify-center text-white shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="pr-6">
                                <h4 class="font-bold text-white text-base mb-1">Network Infrastructure Solutions</h4>
                                <p class="text-gray-400 text-xs leading-relaxed">
                                    IT Solution is a broad category that encompass the solutions aimed at solving problems
                                    or improving infrastructure reliability.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Rounded Pill CTA Button -->
                    <div class="pt-4">
                        <button onclick="openLeadModal()"
                            class="bg-[#EC4813] hover:bg-[#C9390B] text-white px-8 py-3.5 rounded-full font-bold text-xs uppercase tracking-wider shadow-xl shadow-orange-500/30 transition inline-flex items-center gap-2 cursor-pointer">
                            <span>READ MORE</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- Right Side Split Composition (Diagonal Orange Line & Rotated Diamond Photo) -->
                <div class="lg:col-span-6 relative min-h-[420px] flex items-center justify-center">

                    <!-- Background Photo of Developer with Orange Diagonal Separator Line -->
                    <div class="absolute inset-0 rounded-3xl overflow-hidden border border-slate-800">
                        <img src="{{ asset('images/about-typing.jpg') }}" alt="IT Specialist working late on tech solutions"
                            class="w-full h-full object-cover filter brightness-[0.45]">

                        <!-- Orange Diagonal Divider Overlay Stroke -->
                        <div class="absolute inset-0 pointer-events-none">
                            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100">
                                <line x1="0" y1="100" x2="60" y2="0" stroke="#EC4813" stroke-width="4" />
                            </svg>
                        </div>
                    </div>

                    <!-- Center Rotated Diamond Photo Frame -->
                    <div
                        class="relative z-20 w-64 h-64 sm:w-72 sm:h-72 transform rotate-45 rounded-3xl overflow-hidden border-4 border-[#EC4813] shadow-2xl bg-slate-900 group hover:scale-105 transition duration-500">
                        <!-- Counter-rotated Image inside so photo stays upright -->
                        <img src="{{ asset('images/about-meeting.jpg') }}" alt="Lucknow IT Team Strategy Meeting"
                            class="w-[145%] h-[145%] -translate-x-[15%] -translate-y-[15%] transform -rotate-45 object-cover object-center filter brightness-105">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- 11. OUR FEATURED PROJECTS SECTION (Sleek Minimal 6-Card Grid) -->
    <section id="projects" class="py-24 bg-[#FAF6ED] relative overflow-hidden">
        <!-- Subtle Pattern Overlay -->
        <div
            class="absolute inset-0 pointer-events-none opacity-30 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px]">
        </div>

        <!-- Subtle Glow Accents -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#EC4813]/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div
                    class="inline-flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider bg-[#FFECE5] border border-[#EC4813]/20 px-4 py-1.5 rounded-full">
                    <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                        <path stroke-linecap="round" stroke-width="2"
                            d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                    </svg>
                    <span>Our Portfolio</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Featured <span class="text-[#EC4813]">Projects</span>
                </h2>
                <p class="text-gray-500 text-sm">Explore our top client projects delivered with high performance, scaling
                    tech, and sleek user experience.</p>
            </div>

            <!-- 6 Project Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden border border-gray-200/90 shadow-lg hover:shadow-2xl hover:border-[#EC4813]/60 transition duration-500 transform hover:-translate-y-2 group flex flex-col justify-between">
                    <div class="relative overflow-hidden h-60 bg-slate-100">
                        <img src="{{ asset('images/project-1.jpg') }}" alt="UrbanCart Lucknow"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex items-center justify-between gap-4">
                        <div>
                            <span class="text-[#EC4813] text-[11px] font-bold uppercase tracking-wider block mb-1">Web &
                                E-Commerce</span>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#EC4813] transition duration-300">
                                UrbanCart Lucknow
                            </h3>
                        </div>

                        <button onclick="openLeadModal()"
                            class="shrink-0 inline-flex items-center gap-2 bg-[#FFECE5] group-hover:bg-[#EC4813] text-[#EC4813] group-hover:text-white px-7 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider transition duration-300 cursor-pointer shadow-sm">
                            <span>Inquiry</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden border border-gray-200/90 shadow-lg hover:shadow-2xl hover:border-[#EC4813]/60 transition duration-500 transform hover:-translate-y-2 group flex flex-col justify-between">
                    <div class="relative overflow-hidden h-60 bg-slate-100">
                        <img src="{{ asset('images/project-2.jpg') }}" alt="MediConnect Hospital Portal"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex items-center justify-between gap-4">
                        <div>
                            <span
                                class="text-[#EC4813] text-[11px] font-bold uppercase tracking-wider block mb-1">Healthcare
                                & Telemedicine</span>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#EC4813] transition duration-300">
                                MediConnect Hospital Portal
                            </h3>
                        </div>

                        <button onclick="openLeadModal()"
                            class="shrink-0 inline-flex items-center gap-2 bg-[#FFECE5] group-hover:bg-[#EC4813] text-[#EC4813] group-hover:text-white px-7 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider transition duration-300 cursor-pointer shadow-sm">
                            <span>Inquiry</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden border border-gray-200/90 shadow-lg hover:shadow-2xl hover:border-[#EC4813]/60 transition duration-500 transform hover:-translate-y-2 group flex flex-col justify-between">
                    <div class="relative overflow-hidden h-60 bg-slate-100">
                        <img src="{{ asset('images/project-3.jpg') }}" alt="Aurora Prestige Realty"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex items-center justify-between gap-4">
                        <div>
                            <span class="text-[#EC4813] text-[11px] font-bold uppercase tracking-wider block mb-1">Real
                                Estate & VR Portal</span>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#EC4813] transition duration-300">
                                Aurora Prestige Realty
                            </h3>
                        </div>

                        <button onclick="openLeadModal()"
                            class="shrink-0 inline-flex items-center gap-2 bg-[#FFECE5] group-hover:bg-[#EC4813] text-[#EC4813] group-hover:text-white px-7 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider transition duration-300 cursor-pointer shadow-sm">
                            <span>Inquiry</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden border border-gray-200/90 shadow-lg hover:shadow-2xl hover:border-[#EC4813]/60 transition duration-500 transform hover:-translate-y-2 group flex flex-col justify-between">
                    <div class="relative overflow-hidden h-60 bg-slate-100">
                        <img src="{{ asset('images/project-4.jpg') }}" alt="Velox Pay Analytics"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex items-center justify-between gap-4">
                        <div>
                            <span class="text-[#EC4813] text-[11px] font-bold uppercase tracking-wider block mb-1">Fintech &
                                Cloud SaaS</span>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#EC4813] transition duration-300">
                                Velox Pay Analytics
                            </h3>
                        </div>

                        <button onclick="openLeadModal()"
                            class="shrink-0 inline-flex items-center gap-2 bg-[#FFECE5] group-hover:bg-[#EC4813] text-[#EC4813] group-hover:text-white px-7 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider transition duration-300 cursor-pointer shadow-sm">
                            <span>Inquiry</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
          <!-- Card 5 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden border border-gray-200/90 shadow-lg hover:shadow-2xl hover:border-[#EC4813]/60 transition duration-500 transform hover:-translate-y-2 group flex flex-col justify-between">
                    <div class="relative overflow-hidden h-60 bg-slate-100">
                        <img src="{{ asset('images/project-5.jpg') }}" alt="Learnify E-Learning Portal"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex items-center justify-between gap-4">
                        <div>
                            <span class="text-[#EC4813] text-[11px] font-bold uppercase tracking-wider block mb-1">EdTech &
                                LMS System</span>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#EC4813] transition duration-300">
                                Learnify E-Learning Portal
                            </h3>
                        </div>

                        <button onclick="openLeadModal()"
                            class="shrink-0 inline-flex items-center gap-2 bg-[#FFECE5] group-hover:bg-[#EC4813] text-[#EC4813] group-hover:text-white px-7 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider transition duration-300 cursor-pointer shadow-sm">
                            <span>Inquiry</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Card 6 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden border border-gray-200/90 shadow-lg hover:shadow-2xl hover:border-[#EC4813]/60 transition duration-500 transform hover:-translate-y-2 group flex flex-col justify-between">
                    <div class="relative overflow-hidden h-60 bg-slate-100">
                        <img src="{{ asset('images/project-6.jpg') }}" alt="FleetTracker Pro"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 flex items-center justify-between gap-4">
                        <div>
                            <span class="text-[#EC4813] text-[11px] font-bold uppercase tracking-wider block mb-1">Logistics
                                & Enterprise IT</span>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#EC4813] transition duration-300">
                                FleetTracker Pro
                            </h3>
                        </div>

                        <button onclick="openLeadModal()"
                            class="shrink-0 inline-flex items-center gap-2 bg-[#FFECE5] group-hover:bg-[#EC4813] text-[#EC4813] group-hover:text-white px-7 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider transition duration-300 cursor-pointer shadow-sm">
                            <span>Inquiry</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 12. LATEST BLOG & NEWS SECTION -->
    <section id="blogs" class="py-24 bg-[#FAF6ED] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div class="inline-flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                    <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                        <path stroke-linecap="round" stroke-width="2"
                            d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                    </svg>
                    <span>Latest News & Blogs</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Unleash The Power Of <span class="text-[#EC4813]">Digital Insights</span>
                </h2>
                <p class="text-gray-500 text-sm">Stay updated with the latest digital marketing trends, SEO strategies, and
                    web technologies.</p>
            </div>

            <!-- Blog Grid (Dynamic from API - 16:9 Aspect Ratio) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($blogs ?? [] as $blog)
                    <div
                        class="bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-200/80 hover:shadow-2xl transition duration-500 group flex flex-col justify-between">
                        <div>
                            <!-- Image Container (16:9 Aspect Ratio) -->
                            <div class="relative w-full aspect-[16/9] overflow-hidden">
                                <img src="{{ $blog['img'] }}" alt="{{ $blog['img_alt'] ?? $blog['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                               
                                   
                            </div>

                            <!-- Card Body -->
                            <div class="p-6 space-y-3">
                                <div class="flex items-center text-gray-400 text-xs gap-3">
                                    <span><i class="bi bi-calendar3 me-1 text-[#EC4813]"></i>
                                        {{ date('d M, Y', strtotime($blog['date'] ?? 'now')) }}</span>
                                    <span>•</span>
                                    <span><i class="bi bi-person-fill me-1 text-[#EC4813]"></i>
                                        {{ $blog['author_name'] ?? 'Tech Expert' }}</span>
                                </div>

                                <h3
                                    class="font-extrabold text-lg text-slate-900 group-hover:text-[#EC4813] transition line-clamp-2 leading-snug">
                                    <a href="{{ route('blogs.show', $blog['url'] ?? $blog['id']) }}">
                                        {{ $blog['title'] }}
                                    </a>
                                </h3>

                                <p class="text-gray-600 text-xs leading-relaxed line-clamp-3">
                                    {{ $blog['meta_description'] ?? Str::limit(strip_tags($blog['content']), 140) }}
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer Link -->
                        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] text-gray-400 font-medium"><i class="bi bi-eye me-1 text-[#EC4813]"></i>
                                {{ $blog['views_count'] ?? 1 }} Views</span>
                            <a href="{{ route('blogs.show', $blog['url'] ?? $blog['id']) }}"
                                class="inline-flex items-center gap-2 text-xs font-bold text-[#EC4813] group-hover:translate-x-1 transition duration-300">
                                <span>Read Article</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 bg-white rounded-3xl border border-gray-200 shadow-sm space-y-3">
                        <i class="bi bi-newspaper text-4xl text-gray-300"></i>
                        <h4 class="text-xl font-bold text-slate-800">No Articles Available Right Now</h4>
                        <p class="text-gray-500 text-xs">Please check back soon for our latest tech guides.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- 13. QUICK LEAD ENQUIRY BANNER (Replaces Newsletter) -->
    <section class="py-16 bg-white relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-[#111827] text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-2xl bg-circuit-pattern">
                <!-- Diagonal Orange Stripe Accent -->
                <div class="absolute top-0 left-0 w-3 h-full bg-[#EC4813]"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <!-- Left Info -->
                    <div class="lg:col-span-6 space-y-4">
                        <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                            <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                                <path stroke-linecap="round" stroke-width="2"
                                    d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41" />
                            </svg>
                            <span>Free Callback Guarantee</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                            Get Free <span class="text-[#EC4813]">Growth Consultation</span>
                        </h2>
                        <p class="text-gray-300 text-sm max-w-lg leading-relaxed">
                            Fill in your details below and our Lucknow IT & Digital Marketing experts will contact you
                            within 15 minutes for a free strategy roadmap.
                        </p>
                    </div>

                    <!-- Right Lead Form -->
                    <div class="lg:col-span-6 bg-slate-900/90 border border-slate-700/80 p-6 sm:p-8 rounded-2xl shadow-xl">
                        <form id="bannerLeadForm" class="space-y-4" onsubmit="handleBannerLead(event)">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-300 mb-1.5 uppercase tracking-wider">Full
                                        Name *</label>
                                    <input type="text" name="name" required placeholder="Enter Your Name..."
                                        class="w-full bg-white/10 border border-white/20 text-white placeholder-gray-400 px-4 py-3 rounded-xl text-sm focus:outline-none focus:border-[#EC4813]">
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-300 mb-1.5 uppercase tracking-wider">Mobile
                                        Number *</label>
                                    <input type="tel" name="phone" required pattern="[6-9][0-9]{9}" maxlength="10"
                                        placeholder="10-digit Mobile (e.g. 9876543210)"
                                        title="Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"
                                        class="w-full bg-white/10 border border-white/20 text-white placeholder-gray-400 px-4 py-3 rounded-xl text-sm focus:outline-none focus:border-[#EC4813]">
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full bg-[#EC4813] hover:bg-[#C9390B] text-white py-3.5 rounded-xl font-bold text-sm uppercase tracking-wider shadow-lg shadow-orange-500/30 transition flex items-center justify-center gap-2">
                                <span>REQUEST FREE CALLBACK</span>
                                <span>→</span>
                            </button>
                        </form>
                        <div id="bannerSuccessMsg" class="hidden text-center py-4 text-emerald-400 font-bold text-sm">
                            ✓ Thank you! Our team will call you back shortly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
      
        (function initCounters() {
            function startCounting() {
                const counters = document.querySelectorAll('.counter-number');
                if (!counters.length) return;

                function animateCounter(el) {
                    if (el.dataset.animated === 'true') return;
                    el.dataset.animated = 'true';

                    const target = parseFloat(el.getAttribute('data-target')) || 0;
                    const decimals = parseInt(el.getAttribute('data-decimals')) || 0;
                    const duration = 2000;
                    const startTime = performance.now();

                    function update(currentTime) {
                        const elapsedTime = currentTime - startTime;
                        const progress = Math.min(elapsedTime / duration, 1);
                        const easeProgress = 1 - Math.pow(1 - progress, 3);
                        const currentVal = easeProgress * target;

                        el.textContent = currentVal.toFixed(decimals);

                        if (progress < 1) {
                            requestAnimationFrame(update);
                        } else {
                            el.textContent = target.toFixed(decimals);
                        }
                    }

                    requestAnimationFrame(update);
                }

                if ('IntersectionObserver' in window) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                animateCounter(entry.target);
                                observer.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.1 });

                    counters.forEach(counter => observer.observe(counter));
                } else {
                    counters.forEach(counter => animateCounter(counter));
                }
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', startCounting);
            } else {
                startCounting();
            }
        })();

        async function handleBannerLead(e) {
            e.preventDefault();
            const form = e.target;
            const submitBtn = form.querySelector('button[type="submit"]');
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            if (!nameInput || !phoneInput) return;

            const nameVal = nameInput.value.trim();
            const phoneVal = phoneInput.value.trim();
            const regex = /^[6-9]\d{9}$/;

            if (!regex.test(phoneVal)) {
                alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
                return;
            }

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>SUBMITTING...</span> <i class="bi bi-arrow-repeat animate-spin"></i>';
            }

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            try {
                await fetch("{{ route('lead.submit') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken || '',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        name: nameVal,
                        phone: phoneVal,
                        form_type: 'Home Banner Growth Callback Form',
                        page_url: window.location.href
                    })
                });
            } catch (err) {
                console.error(err);
            }

            form.classList.add('hidden');
            const successMsg = document.getElementById('bannerSuccessMsg');
            if (successMsg) {
                successMsg.classList.remove('hidden');
            }
        }
    </script>
@endpush
@extends('layouts.app')

@section('title', 'Privacy Policy | Digital Daur Lucknow')
@section('meta_description', 'Privacy Policy of Digital Daur - Premier IT Development & Digital Marketing Agency in Lucknow. Learn how we collect, protect, and use your data.')

@section('content')

    <!-- HERO BANNER SECTION -->
    <section class="relative bg-[#0F172A] text-white py-16 sm:py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/blog-hero-pattern.jpg') }}" alt="Hero Background Pattern"
                class="w-full h-full object-cover object-center opacity-80 filter brightness-[0.90] contrast-[1.05]">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0F172A]/90 via-[#0F172A]/60 to-transparent"></div>
        </div>

        <!-- Left Vector Art Accents -->
        <div class="absolute bottom-0 left-0 pointer-events-none z-10 w-80 h-80 opacity-60">
            <svg class="w-full h-full" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-60 360 C-10 210, 100 290, 80 190 C60 100, -20 120, -60 40" stroke="#EC4813" stroke-width="20"
                    stroke-linecap="round" />
                <circle cx="62" cy="242" r="8" fill="white" />
                <rect x="20" y="190" width="75" height="75" transform="rotate(45 20 190)" stroke="white" stroke-width="1.5"
                    stroke-opacity="0.3" />
            </svg>
        </div>

        <!-- Right Vector Art Accents -->
        <div class="absolute bottom-0 right-0 pointer-events-none z-10 w-80 h-80 opacity-60">
            <svg class="w-full h-full" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M280 40 A 100 100 0 0 1 200 150" stroke="#EC4813" stroke-width="20" stroke-linecap="round"
                    fill="none" />
                <circle cx="250" cy="210" r="8" fill="white" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center space-y-4">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
                Privacy<span class="text-[#EC4813]"> Policy</span>
            </h1>
            <div class="flex items-center justify-center gap-3 text-xs sm:text-sm font-medium text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-[#EC4813] transition">Home</a>
                <span class="text-[#EC4813]">&gt;</span>
                <span class="text-white font-semibold">Privacy Policy</span>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT SECTION -->
    <section class="py-16 bg-[#FAF6ED] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Sidebar Quick Navigation (4 Cols - Sticky) -->
                <aside class="lg:col-span-4 self-start sticky top-28 z-20"
                    style="position: sticky; top: 100px; align-self: flex-start;">
                    <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-lg border border-gray-200/80 space-y-6">
                        <div class="flex items-center gap-3 border-b border-gray-100 pb-4">
                            <div
                                class="w-10 h-10 rounded-2xl bg-[#EC4813]/10 text-[#EC4813] flex items-center justify-center font-bold text-lg shrink-0">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 text-base">Quick Navigation</h3>
                                <p class="text-xs text-gray-500">Jump to policy section</p>
                            </div>
                        </div>

                        <nav class="space-y-1 text-xs font-medium text-slate-700">
                            <a href="#info-collect"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">01</span>
                                <span>Information We Collect</span>
                            </a>
                            <a href="#info-use"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">02</span>
                                <span>How We Use Information</span>
                            </a>
                            <a href="#lead-confidentiality"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">03</span>
                                <span>Lead Confidentiality</span>
                            </a>
                            <a href="#cookies-analytics"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">04</span>
                                <span>Cookies & Analytics</span>
                            </a>
                            <a href="#data-protection"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">05</span>
                                <span>Data Protection</span>
                            </a>
                            <a href="#office-contact"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">06</span>
                                <span>Office Contact & Rights</span>
                            </a>
                        </nav>

                        <!-- Support Card inside Sidebar -->
                        <div class="bg-[#0F172A] text-white p-6 rounded-2xl space-y-3 relative overflow-hidden shadow-md">
                            <div
                                class="absolute top-0 right-0 w-20 h-20 bg-[#EC4813]/20 rounded-full blur-xl pointer-events-none">
                            </div>
                            <span
                                class="inline-block px-2.5 py-1 bg-[#EC4813] text-white text-[10px] font-semibold uppercase tracking-wider rounded-md">Privacy
                                Help</span>
                            <h4 class="font-bold text-sm text-white">Have Privacy Concerns?</h4>
                            <p class="text-xs text-gray-300 leading-relaxed">Our compliance team at Hazratganj Lucknow is
                                available to assist you with data requests.</p>
                            <a href="mailto:info@digitaldaur.com"
                                class="inline-flex items-center gap-2 text-xs font-semibold text-[#EC4813] hover:text-white transition">
                                <span>info@digitaldaur.com</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Document Content (8 Cols) -->
                <main class="lg:col-span-8 space-y-8">
                    <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-xl border border-gray-200/80 space-y-10">

                        <!-- Header Note -->
                        <div class="bg-[#FAF6ED] p-6 rounded-2xl border border-amber-200/70 flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#EC4813] text-white flex items-center justify-center shrink-0 shadow-md">
                                <i class="bi bi-shield-check text-xl"></i>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-slate-900 text-sm">Commitment to Transparency</h4>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    At <strong class="text-slate-900 font-semibold">Digital Daur</strong>, we respect your
                                    privacy. This document explains how we handle your business and personal details when
                                    using our IT and marketing services. Last updated: <span
                                        class="font-semibold text-slate-900">{{ date('F d, Y') }}</span>.
                                </p>
                            </div>
                        </div>

                        <!-- Section 01 -->
                        <div id="info-collect" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">01</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Information We Collect</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Digital Daur collects essential personal and business details required to deliver customized
                                web applications, mobile apps, SEO strategy, and performance digital marketing solutions:
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                                <div class="bg-[#FAF6ED] p-5 rounded-2xl border border-gray-200/80 space-y-2">
                                    <h4 class="font-semibold text-slate-900 text-sm flex items-center gap-2">
                                        <i class="bi bi-person-badge text-[#EC4813]"></i> Personal Details
                                    </h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Full Name, Business Name, Email
                                        Address, and 10-digit Phone Number submitted through contact & quotation forms.</p>
                                </div>
                                <div class="bg-[#FAF6ED] p-5 rounded-2xl border border-gray-200/80 space-y-2">
                                    <h4 class="font-semibold text-slate-900 text-sm flex items-center gap-2">
                                        <i class="bi bi-laptop text-[#EC4813]"></i> Project Requirements
                                    </h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Technical scope, budget expectations,
                                        website URLs, and specific digital marketing objectives provided during
                                        consultation.</p>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 02 -->
                        <div id="info-use" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">02</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">How We Use Information</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Collected information is strictly used for fulfilling client project deliverables and
                                providing efficient technical support:
                            </p>
                            <ul class="space-y-3 text-xs text-gray-700">
                                <li class="flex items-start gap-3 bg-[#FAF6ED] p-4 rounded-xl border border-gray-200/60">
                                    <i class="bi bi-check-circle-fill text-[#EC4813] text-base shrink-0 mt-0.5"></i>
                                    <span><strong class="text-slate-900 font-semibold">Proposal & Quote Generation:</strong>
                                        Formulate accurate website development cost estimates, custom software milestones,
                                        and SEO audits.</span>
                                </li>
                                <li class="flex items-start gap-3 bg-[#FAF6ED] p-4 rounded-xl border border-gray-200/60">
                                    <i class="bi bi-check-circle-fill text-[#EC4813] text-base shrink-0 mt-0.5"></i>
                                    <span><strong class="text-slate-900 font-semibold">Client Communication:</strong>
                                        Provide milestone updates, schedule strategy calls, and answer technical support
                                        queries promptly.</span>
                                </li>
                                <li class="flex items-start gap-3 bg-[#FAF6ED] p-4 rounded-xl border border-gray-200/60">
                                    <i class="bi bi-check-circle-fill text-[#EC4813] text-base shrink-0 mt-0.5"></i>
                                    <span><strong class="text-slate-900 font-semibold">System Security:</strong> Protect
                                        server endpoints and forms against automated spam submission and security
                                        vulnerabilities.</span>
                                </li>
                            </ul>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 03 -->
                        <div id="lead-confidentiality" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">03</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Lead & Inquiry Confidentiality</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                We maintain a strict zero-spam, non-disclosure standard across all our lead forms and
                                consultation channels:
                            </p>
                            <div
                                class="bg-[#0F172A] text-white p-6 rounded-2xl space-y-2 border-l-4 border-[#EC4813] shadow-md">
                                <p class="text-xs sm:text-sm font-medium text-gray-200 italic leading-relaxed">
                                    "Digital Daur guarantees that your contact details and business inquiry data will never
                                    be sold, rented, or distributed to third-party telemarketers or external ad networks."
                                </p>
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 04 -->
                        <div id="cookies-analytics" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">04</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Cookies & Web Analytics</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Our website uses standard session cookies to improve navigation speed and record anonymized
                                visitor statistics. You can disable cookies in your browser preferences at any time without
                                impacting site usage.
                            </p>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 05 -->
                        <div id="data-protection" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">05</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Data Protection & Security</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                We enforce SSL encryption across all web traffic, maintain secure database authentication
                                protocols, and run periodic server backups to safeguard stored inquiries from unauthorized
                                access.
                            </p>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 06 -->
                        <div id="office-contact" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">06</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Office Contact & Data Rights</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                You have the right to request access to or removal of your personal contact records from our
                                database. Contact our team at our Hazratganj office:
                            </p>
                            <div
                                class="bg-[#0F172A] text-white p-6 sm:p-8 rounded-2xl space-y-4 shadow-xl border border-slate-800">
                                <h4 class="text-base font-bold text-[#EC4813]">Digital Daur IT & Digital Marketing Agency
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-gray-300">
                                    <div class="flex items-start gap-3">
                                        <i class="bi bi-geo-alt-fill text-[#EC4813] text-base shrink-0 mt-0.5"></i>
                                        <span>Hazratganj Main Market, Lucknow, UP 226001, India</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="bi bi-envelope-fill text-[#EC4813] text-base shrink-0"></i>
                                        <a href="mailto:info@digitaldaur.com"
                                            class="hover:text-[#EC4813] transition font-semibold">info@digitaldaur.com</a>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="bi bi-telephone-fill text-[#EC4813] text-base shrink-0"></i>
                                        <div class="flex flex-col">
                                            <a href="tel:+919198483820"
                                                class="hover:text-[#EC4813] transition font-semibold">+91 91984 83820</a>
                                            <a href="tel:+916394296293"
                                                class="hover:text-[#EC4813] transition font-semibold">+91 63942 96293</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>

            </div>
        </div>
    </section>

@endsection
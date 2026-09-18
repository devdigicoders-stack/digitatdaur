@extends('layouts.app')

@section('title', 'Terms of Service | Digital Daur Lucknow')
@section('meta_description', 'Terms of Service & Conditions of Digital Daur - Premier IT Development and Digital Marketing Agency in Lucknow. Review our service agreements.')

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
                Terms of<span class="text-[#EC4813]"> Service</span>
            </h1>
            <div class="flex items-center justify-center gap-3 text-xs sm:text-sm font-medium text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-[#EC4813] transition">Home</a>
                <span class="text-[#EC4813]">&gt;</span>
                <span class="text-white font-semibold">Terms of Service</span>
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
                                <i class="bi bi-file-earmark-text-fill"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 text-base">Quick Navigation</h3>
                                <p class="text-xs text-gray-500">Jump to terms section</p>
                            </div>
                        </div>

                        <nav class="space-y-1 text-xs font-medium text-slate-700">
                            <a href="#acceptance-scope"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">01</span>
                                <span>Acceptance & Scope</span>
                            </a>
                            <a href="#client-responsibilities"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">02</span>
                                <span>Client Responsibilities</span>
                            </a>
                            <a href="#code-ownership"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">03</span>
                                <span>Code & IP Ownership</span>
                            </a>
                            <a href="#timelines-revisions"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">04</span>
                                <span>Timelines & Revisions</span>
                            </a>
                            <a href="#payments-refunds"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">05</span>
                                <span>Payment & Refund Policy</span>
                            </a>
                            <a href="#liability-jurisdiction"
                                class="flex items-center gap-3 p-3 rounded-2xl hover:bg-[#FAF6ED] hover:text-[#EC4813] transition group">
                                <span
                                    class="w-6 h-6 rounded-lg bg-slate-100 group-hover:bg-[#EC4813] group-hover:text-white flex items-center justify-center text-[10px] font-semibold transition">06</span>
                                <span>Liability & Jurisdiction</span>
                            </a>
                        </nav>

                        <!-- Support Card inside Sidebar -->
                        <div class="bg-[#0F172A] text-white p-6 rounded-2xl space-y-3 relative overflow-hidden shadow-md">
                            <div
                                class="absolute top-0 right-0 w-20 h-20 bg-[#EC4813]/20 rounded-full blur-xl pointer-events-none">
                            </div>
                            <span
                                class="inline-block px-2.5 py-1 bg-[#EC4813] text-white text-[10px] font-semibold uppercase tracking-wider rounded-md">Legal
                                Desk</span>
                            <h4 class="font-bold text-sm text-white">Project Agreement Inquiry?</h4>
                            <p class="text-xs text-gray-300 leading-relaxed">Need custom SLA contracts or project scope
                                terms for your enterprise app?</p>
                            <a href="tel:+919198483820"
                                class="inline-flex items-center gap-2 text-xs font-semibold text-[#EC4813] hover:text-white transition">
                                <span>+91 91984 83820</span>
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
                                <i class="bi bi-file-earmark-check text-xl"></i>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-slate-900 text-sm">Service Level & Agreement Standards</h4>
                                <p class="text-xs text-gray-600 leading-relaxed">
                                    By hiring <strong class="text-slate-900 font-semibold">Digital Daur</strong> for custom
                                    web application development, mobile app engineering, SEO campaigns, or IT consulting,
                                    you agree to the terms set below. Effective date: <span
                                        class="font-semibold text-slate-900">{{ date('F d, Y') }}</span>.
                                </p>
                            </div>
                        </div>

                        <!-- Section 01 -->
                        <div id="acceptance-scope" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">01</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Acceptance & Scope of Services</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Digital Daur provides professional IT engineering and digital marketing services across
                                India and internationally. Our scope includes custom Laravel development, web design,
                                Android/iOS app development, search engine optimization (SEO), and social media advertising.
                            </p>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 02 -->
                        <div id="client-responsibilities" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">02</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Client Responsibilities</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                To ensure project completion within designated timeframes, clients agree to:
                            </p>
                            <ul class="space-y-3 text-xs text-gray-700">
                                <li class="flex items-start gap-3 bg-[#FAF6ED] p-4 rounded-xl border border-gray-200/60">
                                    <i class="bi bi-check-circle-fill text-[#EC4813] text-base shrink-0 mt-0.5"></i>
                                    <span><strong class="text-slate-900 font-semibold">Asset Provision:</strong> Supply
                                        required brand assets, high-resolution logos, copy, and credentials promptly upon
                                        project kick-off.</span>
                                </li>
                                <li class="flex items-start gap-3 bg-[#FAF6ED] p-4 rounded-xl border border-gray-200/60">
                                    <i class="bi bi-check-circle-fill text-[#EC4813] text-base shrink-0 mt-0.5"></i>
                                    <span><strong class="text-slate-900 font-semibold">Timely Approvals:</strong> Review
                                        design mockups and code milestone demos within agreed verification windows.</span>
                                </li>
                            </ul>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 03 -->
                        <div id="code-ownership" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">03</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Intellectual Property & Source Code
                                </h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Upon full final settlement of agreed project invoices:
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                                <div class="bg-[#FAF6ED] p-5 rounded-2xl border border-gray-200/80 space-y-2">
                                    <h4 class="font-semibold text-slate-900 text-sm flex items-center gap-2">
                                        <i class="bi bi-code-slash text-[#EC4813]"></i> Code Rights Ownership
                                    </h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">The client holds full ownership rights
                                        to the custom web code and visual designs created specifically for their
                                        application.</p>
                                </div>
                                <div class="bg-[#FAF6ED] p-5 rounded-2xl border border-gray-200/80 space-y-2">
                                    <h4 class="font-semibold text-slate-900 text-sm flex items-center gap-2">
                                        <i class="bi bi-layers text-[#EC4813]"></i> Framework Licenses
                                    </h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Open-source tools (Laravel, Vue,
                                        Tailwind, PHP packages) remain governed by their respective open-source licenses.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 04 -->
                        <div id="timelines-revisions" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">04</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Timelines & Revision Scope</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Project timelines are scheduled based on mutual agreement. Any feature modifications
                                requested outside the signed scope will be documented as change requests and estimated
                                separately.
                            </p>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 05 -->
                        <div id="payments-refunds" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">05</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Payment Terms & Refund Policy</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Invoices are issued based on project milestone completion. Initial deposit payments for
                                initiated UI design or custom backend coding are non-refundable once technical resources are
                                allocated.
                            </p>
                        </div>

                        <hr class="border-gray-100">

                        <!-- Section 06 -->
                        <div id="liability-jurisdiction" class="space-y-4 scroll-mt-28">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-[#EC4813] text-white text-xs font-bold rounded-lg shadow-sm">06</span>
                                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Liability & Jurisdiction</h2>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Digital Daur is not liable for indirect or consequential losses resulting from third-party
                                domain/hosting outages. All legal contracts and agreements are governed by the laws of India
                                under the jurisdiction of courts in <strong class="text-slate-900 font-semibold">Lucknow,
                                    Uttar Pradesh</strong>.
                            </p>
                            <div
                                class="bg-[#0F172A] text-white p-6 sm:p-8 rounded-2xl space-y-4 shadow-xl border border-slate-800">
                                <h4 class="text-base font-bold text-[#EC4813]">Digital Daur Legal & Accounts Office</h4>
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
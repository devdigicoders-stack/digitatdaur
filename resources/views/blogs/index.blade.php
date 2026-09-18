@extends('layouts.app')

@section('title', 'Blogs & Insights | Digital Daur Lucknow')
@section('meta_description', 'Explore the latest IT insights, SEO strategies, web development tutorials, and digital marketing trends from Digital Daur Lucknow.')

@section('content')

    <!-- 3. HERO BANNER SECTION (Hero Pattern Matching) -->
    <section class="relative bg-[#0F172A] text-white py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/blog-hero-pattern.jpg') }}" alt="Blogs Background Pattern"
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
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight">
                Latest<span class="text-[#EC4813]"> Blogs</span>
            </h1>
            <div class="flex items-center justify-center gap-3 text-xs sm:text-sm font-semibold text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-[#EC4813] transition">Home</a>
                <span class="text-[#EC4813]">&gt;</span>
                <span class="text-white font-bold">Latest Blogs</span>
            </div>
        </div>
    </section>

    <!-- 4. BLOG LISTING GRID SECTION -->
    <section class="py-20 bg-[#FAF6ED] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div class="inline-flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                    <i class="bi bi-journal-richtext text-[#EC4813]"></i>
                    <span>Insights & Tech Articles</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Explore Our <span class="text-[#EC4813]">Latest Tech Articles</span>
                </h2>
                <p class="text-gray-500 text-sm">Stay ahead with expert guides on web development, SEO strategies, and
                    mobile applications.</p>
            </div>

            <!-- Blog Grid (3 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($blogs as $blog)
                    <div
                        class="bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-200/80 hover:shadow-2xl transition duration-500 group flex flex-col justify-between">
                        <div>
                            <!-- Image Container (16:9 Aspect Ratio) -->
                            <div class="relative w-full aspect-[16/9] overflow-hidden">
                                <img src="{{ $blog['img'] }}" alt="{{ $blog['img_alt'] ?? $blog['title'] }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <!-- <span
                                    class="absolute top-4 left-4 bg-[#EC4813] text-white text-[10px] font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-md">
                                    {{ explode(',', $blog['keywords'] ?? 'WEB DEV')[0] }}
                                </span> -->
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
                            <span class="text-[11px] text-gray-400 font-medium"><i class="bi bi-eye me-1"></i>
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
                        <h4 class="text-xl font-bold text-slate-800">No Blogs Available At The Moment</h4>
                        <p class="text-gray-500 text-xs">Please check back soon for our latest tech articles and guides.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- 5. QUICK LEAD ENQUIRY BANNER SECTION -->
    <section class="py-12 bg-[#FAF6ED] relative">
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
                                class="w-full bg-[#EC4813] hover:bg-[#C9390B] text-white py-3.5 rounded-xl font-bold text-sm uppercase tracking-wider shadow-lg shadow-orange-500/30 transition flex items-center justify-center gap-2 cursor-pointer">
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
        function handleBannerLead(e) {
            e.preventDefault();
            const form = e.target;
            const phoneInput = form.querySelector('input[name="phone"]');
            if (phoneInput) {
                const phoneVal = phoneInput.value.trim();
                const regex = /^[6-9]\d{9}$/;
                if (!regex.test(phoneVal)) {
                    alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
                    return;
                }
            }
            form.classList.add('hidden');
            const successMsg = form.parentElement.querySelector('#bannerSuccessMsg');
            if (successMsg) {
                successMsg.classList.remove('hidden');
            }
        }
    </script>
@endpush
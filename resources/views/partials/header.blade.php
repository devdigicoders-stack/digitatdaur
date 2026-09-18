<!-- 1. TOP BAR (Clean Dark Ticker Bar with SEO Marquee) -->
<div class="bg-slate-900 text-white border-b border-slate-800 text-xs py-2 px-4 sm:px-12 font-medium relative z-30">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
        <!-- Left Contact Info (Email & Location) -->
        <div class="hidden lg:flex items-center gap-6 shrink-0 text-slate-300">
            <a href="mailto:info@digitaldaur.com" class="flex items-center gap-2 hover:text-[#EC4813] transition">
                <svg class="w-3.5 h-3.5 text-[#EC4813]" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                <span>info@digitaldaur.com</span>
            </a>
            <div class="flex items-center gap-2">
                <svg class="w-3.5 h-3.5 text-[#EC4813]" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                </svg>
                <span>Hazratganj Main Market, Lucknow, 226001</span>
            </div>
        </div>

        <!-- Right SEO Keyword Marquee (Scrolling Right to Left) -->
        <div class="w-full lg:w-auto flex-1 overflow-hidden py-0.5">
            <marquee scrollamount="5" behavior="scroll" direction="left" onmouseover="this.stop();"
                onmouseout="this.start();" class="text-xs font-semibold text-slate-300">
                <span class="text-[#EC4813] font-bold"><i class="bi bi-rocket-takeoff-fill me-1"></i> Top IT Company &
                    Custom Software Development Agency in Lucknow</span> &nbsp; | &nbsp; <i
                    class="bi bi-laptop-fill text-[#EC4813] me-1"></i> Web Development & Laravel Solutions &nbsp; |
                &nbsp; <i class="bi bi-phone-fill text-[#EC4813] me-1"></i> iOS & Android Mobile App Development &nbsp;
                | &nbsp; <i class="bi bi-graph-up-arrow text-[#EC4813] me-1"></i> SEO Supremacy & Performance Digital
                Marketing &nbsp; | &nbsp; <i class="bi bi-telephone-fill text-[#EC4813] me-1"></i> Consultation: +91
                91984 83820 / +91 63942 96293
            </marquee>
        </div>
    </div>
</div>

<!-- 2. MAIN NAVBAR (Aligned perfectly with Top Bar) -->
<header class="bg-[#FAF6ED] border-b border-gray-200/80 sticky top-0 z-50 px-4 sm:px-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
        <!-- Left Logo -->
        <a href="{{ route('home') }}" class="py-3 flex items-center group shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Digital Daur - Ideas Code Growth"
                class="h-12 sm:h-14 w-auto object-contain group-hover:scale-105 transition duration-300">
        </a>

        <!-- Center Navigation Links -->
        <nav class="hidden lg:flex items-center gap-8 font-bold text-[14px] text-[#222222]">
            <a href="{{ route('home') }}"
                class="hover:text-[#EC4813] transition {{ request()->routeIs('home') ? 'text-[#EC4813]' : '' }}">Home</a>
            <a href="{{ route('home') }}#about" class="hover:text-[#EC4813] transition">About Us</a>
            <a href="{{ route('home') }}#services" class="hover:text-[#EC4813] transition">Services</a>
            <a href="{{ route('home') }}#projects" class="hover:text-[#EC4813] transition">Projects</a>
            <a href="{{ route('blogs.index') }}"
                class="hover:text-[#EC4813] transition {{ request()->routeIs('blogs.*') ? 'text-[#EC4813]' : '' }}">Blogs</a>
            <a href="{{ route('home') }}#contact" class="hover:text-[#EC4813] transition">Contact</a>
        </nav>

        <!-- Right Need Help / Phone Call Widget -->
        <div class="hidden sm:flex items-center gap-3 shrink-0">
            <div
                class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-slate-800 bg-white">
                <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
            </div>
            <div>
                <span class="block text-[11px] font-medium text-gray-500 leading-tight">Need help?</span>
                <div class="flex flex-col text-xs font-black text-slate-900 tracking-tight leading-tight">
                    <a href="tel:+919198483820" class="hover:text-[#EC4813] transition">+91 91984 83820</a>
                    <a href="tel:+916394296293" class="hover:text-[#EC4813] transition">+91 63942 96293</a>
                </div>
            </div>
        </div>

        <!-- Mobile Toggle Button -->
        <button type="button" id="mobileMenuBtn" aria-label="Toggle Mobile Menu"
            class="lg:hidden text-slate-900 p-2.5 rounded-xl border border-gray-300 bg-white hover:bg-slate-100 transition focus:outline-none cursor-pointer">
            <svg id="menuOpenIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="menuCloseIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu"
        class="hidden lg:hidden bg-white border-b border-gray-200 px-6 py-6 space-y-3.5 shadow-2xl transition-all duration-300">
        <a href="{{ route('home') }}"
            class="block text-slate-900 font-bold text-base hover:text-[#EC4813] border-b border-gray-100 pb-2">Home</a>
        <a href="{{ route('home') }}#about"
            class="block text-slate-900 font-bold text-base hover:text-[#EC4813] border-b border-gray-100 pb-2">About
            Us</a>
        <a href="{{ route('home') }}#services"
            class="block text-slate-900 font-bold text-base hover:text-[#EC4813] border-b border-gray-100 pb-2">Services</a>
        <a href="{{ route('home') }}#projects"
            class="block text-slate-900 font-bold text-base hover:text-[#EC4813] border-b border-gray-100 pb-2">Projects</a>
        <a href="{{ route('blogs.index') }}"
            class="block text-slate-900 font-bold text-base hover:text-[#EC4813] border-b border-gray-100 pb-2">Blogs</a>
        <a href="{{ route('home') }}#contact"
            class="block text-slate-900 font-bold text-base hover:text-[#EC4813] pb-1">Contact</a>

        <!-- Direct Phone CTA inside Mobile Menu -->
        <div class="pt-3 border-t border-gray-200 space-y-2">
            <a href="tel:+919198483820"
                class="flex items-center justify-center gap-2 w-full bg-[#EC4813] hover:bg-[#C9390B] text-white py-3 rounded-xl font-bold text-sm shadow-md transition">
                <i class="bi bi-telephone-fill"></i>
                <span>Call +91 91984 83820</span>
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');
        const openIcon = document.getElementById('menuOpenIcon');
        const closeIcon = document.getElementById('menuCloseIcon');

        if (btn && menu) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                const isHidden = menu.classList.contains('hidden');
                if (isHidden) {
                    menu.classList.remove('hidden');
                    if (openIcon) openIcon.classList.add('hidden');
                    if (closeIcon) closeIcon.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                    if (openIcon) openIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                }
            });
        }

        const mobileLinks = document.querySelectorAll('#mobileMenu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function () {
                if (menu) {
                    menu.classList.add('hidden');
                    if (openIcon) openIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                }
            });
        });
    });
</script>
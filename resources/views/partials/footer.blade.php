<!-- FOOTER SECTION -->
<footer id="contact" class="bg-[#0D121F] text-gray-300 pt-20 pb-10 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-16 border-b border-gray-800/80">
            
            <!-- Col 1: Brand Info -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="inline-block bg-white px-4 py-2.5 rounded-2xl border border-gray-700 shadow-xl group hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/logo.png') }}" alt="Digital Daur Logo" class="h-10 sm:h-12 w-auto object-contain">
                </a>

                <p class="text-gray-400 text-xs leading-relaxed max-w-sm">
                    Digital Daur is Lucknow's premier IT and digital marketing company. We help brands scale faster through SEO supremacy, custom Laravel development, and targeted performance advertising.
                </p>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider">Quick Links</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('home') }}" class="hover:text-[#EC4813] transition">Home</a></li>
                    <li><a href="{{ route('home') }}#about" class="hover:text-[#EC4813] transition">About Us</a></li>
                    <li><a href="{{ route('home') }}#services" class="hover:text-[#EC4813] transition">Our Services</a></li>
                    <li><a href="{{ route('home') }}#pricing" class="hover:text-[#EC4813] transition">Pricing Packages</a></li>
                    <li><a href="{{ route('blogs.index') }}" class="hover:text-[#EC4813] transition">Blogs & Insights</a></li>
                </ul>
            </div>

            <!-- Col 3: Latest Blogs -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider">Latest Blogs</h4>
                <div class="space-y-3">
                    @forelse($footerBlogs ?? [] as $fBlog)
                        <a href="{{ route('blogs.show', $fBlog['url'] ?? $fBlog['id']) }}" class="flex items-start gap-3 group">
                            @if(!empty($fBlog['img']))
                                <div class="w-14 aspect-[16/9] rounded-lg overflow-hidden shrink-0 border border-gray-800 mt-0.5">
                                    <img src="{{ $fBlog['img'] }}" alt="{{ $fBlog['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                                </div>
                            @endif
                            <div class="space-y-1">
                                <h5 class="text-xs font-bold text-gray-300 group-hover:text-[#EC4813] transition line-clamp-2 leading-snug">
                                    {{ $fBlog['title'] }}
                                </h5>
                                <span class="text-[10px] text-gray-500 block">
                                    <i class="bi bi-calendar3 me-1 text-[#EC4813]"></i>
                                    {{ date('d M, Y', strtotime($fBlog['date'] ?? 'now')) }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <ul class="space-y-2 text-xs text-gray-400">
                            <li><a href="{{ route('blogs.index') }}" class="hover:text-[#EC4813] transition">Web Development Guide</a></li>
                            <li><a href="{{ route('blogs.index') }}" class="hover:text-[#EC4813] transition">SEO Strategies & Insights</a></li>
                        </ul>
                    @endforelse
                </div>
            </div>

            <!-- Col 4: Contact Info -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider">Lucknow Contact</h4>
                <ul class="space-y-3 text-xs">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-[#EC4813] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Hazratganj Main Market, Lucknow, UP 226001, India</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#EC4813] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>info@digitaldaur.com</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-[#EC4813] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <div class="flex flex-col gap-0.5">
                            <a href="tel:+919198483820" class="hover:text-[#EC4813] transition">+91 91984 83820</a>
                            <a href="tel:+916394296293" class="hover:text-[#EC4813] transition">+91 63942 96293</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Copyright Bar -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 gap-4">
            <p>© {{ date('Y') }} <a href="https://digitaldaur.com" class="text-white hover:text-[#EC4813]">Digital Daur</a>. All Rights Reserved.</p>
            <div class="flex items-center gap-6">
                <a href="{{ route('privacy-policy') }}" class="hover:text-gray-300 transition">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="hover:text-gray-300 transition">Terms of Service</a>
                <a href="{{ route('sitemap') }}" target="_blank" class="hover:text-gray-300 transition">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

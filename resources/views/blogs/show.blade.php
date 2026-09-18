@extends('layouts.app')

@section('title', ($blog['meta_title'] ?? $blog['title']) . ' | Digital Daur Lucknow')
@section('meta_description', $blog['meta_description'] ?? Str::limit(strip_tags($blog['content']), 155))
@section('meta_keywords', $blog['keywords'] ?? 'Digital Marketing Company in Lucknow, SEO Services Lucknow, Web Development Agency Lucknow, ' . $blog['title'])
@section('og_type', 'article')
@section('og_title', $blog['title'] . ' | Digital Daur Lucknow')
@section('og_description', $blog['meta_description'] ?? Str::limit(strip_tags($blog['content']), 155))
@section('og_image', !empty($blog['img']) ? (Str::startsWith($blog['img'], 'http') ? $blog['img'] : url($blog['img'])) : url(asset('images/why-choose-us.jpg')))

@push('scripts')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BlogPosting",
      "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ url()->current() }}"
      },
      "headline": "{{ addslashes($blog['title']) }}",
      "image": [
        "{{ !empty($blog['img']) ? (Str::startsWith($blog['img'], 'http') ? $blog['img'] : url($blog['img'])) : url(asset('images/why-choose-us.jpg')) }}"
      ],
      "datePublished": "{{ \Carbon\Carbon::parse($blog['date'] ?? now())->toIso8601String() }}",
      "dateModified": "{{ \Carbon\Carbon::parse($blog['date'] ?? now())->toIso8601String() }}",
      "author": {
        "@@type": "Person",
        "name": "{{ addslashes($blog['author'] ?? 'Digital Daur Team') }}"
      },
      "publisher": {
        "@@type": "Organization",
        "name": "Digital Daur",
        "logo": {
          "@@type": "ImageObject",
          "url": "{{ url(asset('images/logo.png')) }}"
        }
      },
      "description": "{{ addslashes($blog['meta_description'] ?? Str::limit(strip_tags($blog['content']), 150)) }}"
    }
    </script>
@endpush

@push('styles')
    <style>
        /* Rich Blog Content Formatting */
        .blog-content h1 {
            font-size: 1.85rem;
            font-weight: 800;
            color: #0F172A;
            margin-top: 1.75rem;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .blog-content h2 {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0F172A;
            margin-top: 1.5rem;
            margin-bottom: 0.85rem;
            line-height: 1.35;
            border-left: 4px solid #EC4813;
            padding-left: 0.75rem;
        }

        .blog-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0F172A;
            margin-top: 1.35rem;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .blog-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0F172A;
            margin-top: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .blog-content p {
            color: #334155;
            font-size: 0.975rem;
            line-height: 1.8;
            margin-bottom: 1.25rem;
        }

        .blog-content a {
            color: #EC4813;
            font-weight: 600;
            text-decoration: underline;
            transition: all 0.2s;
        }

        .blog-content a:hover {
            color: #C9390B;
            text-decoration: none;
        }

        .blog-content ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.25rem;
            color: #334155;
        }

        .blog-content ol {
            list-style-type: decimal;
            padding-left: 1.5rem;
            margin-bottom: 1.25rem;
            color: #334155;
        }

        .blog-content li {
            margin-bottom: 0.4rem;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .blog-content blockquote {
            background-color: #FFF1ED;
            border-left: 4px solid #EC4813;
            padding: 1.25rem 1.5rem;
            border-radius: 1rem;
            margin: 1.5rem 0;
            color: #1E293B;
            font-style: italic;
            font-weight: 500;
        }

        .blog-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            font-size: 0.9rem;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .blog-content th {
            background-color: #0F172A;
            color: #ffffff;
            padding: 0.85rem 1rem;
            text-align: left;
            font-weight: 700;
            border: 1px solid #1E293B;
        }

        .blog-content td {
            padding: 0.75rem 1rem;
            border: 1px solid #E2E8F0;
            color: #334155;
            background-color: #ffffff;
        }

        .blog-content tr:nth-child(even) td {
            background-color: #F8FAFC;
        }

        .blog-content hr {
            border: 0;
            border-top: 1px solid #E2E8F0;
            margin: 2rem 0;
        }

        /* Hide empty heading elements or elements with only whitespace */
        .blog-content h1:empty,
        .blog-content h2:empty,
        .blog-content h3:empty,
        .blog-content h4:empty,
        .blog-content p:empty {
            display: none !important;
        }

        /* Custom Scrollbar for TOC List */
        .toc-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .toc-scrollbar::-webkit-scrollbar-track {
            background: #F1F5F9;
            border-radius: 4px;
        }
        .toc-scrollbar::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 4px;
        }
        .toc-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #EC4813;
        }
    </style>
@endpush

@section('content')

    <!-- 3. HERO BANNER SECTION (Exact Match with Reference Image Hero Header Pattern) -->
    <section class="relative bg-[#0F172A] text-white py-20 overflow-hidden">
        <!-- Background Overlay Image & Mesh Gradient -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/blog-hero-pattern.jpg') }}" alt="Blog Details Banner Background Pattern"
                class="w-full h-full object-cover object-center opacity-80 filter brightness-[0.90] contrast-[1.05]">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0F172A]/90 via-[#0F172A]/60 to-transparent"></div>
        </div>

        <!-- Left Vector Art Accents (Exact Reference Match) -->
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

        <!-- Hero Content -->
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center space-y-4">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight drop-shadow-xl">
                {{ $blog['title'] }}
            </h1>
            <div class="flex flex-wrap items-center justify-center gap-3 text-xs sm:text-sm font-semibold text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-[#EC4813] transition">Home</a>
                <span class="text-[#EC4813]">&gt;</span>
                <a href="{{ route('blogs.index') }}" class="hover:text-[#EC4813] transition">Blogs</a>
                <span class="text-[#EC4813]">&gt;</span>
                <span class="text-white font-bold line-clamp-1 max-w-xs sm:max-w-md">{{ $blog['title'] }}</span>
            </div>
        </div>
    </section>

    <!-- 4. MAIN BLOG DETAILS CONTENT GRID (2 Columns Layout) -->
    <section class="py-16 bg-[#FAF6ED] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                <!-- Left Main Content Column (8 Cols) -->
                <div class="lg:col-span-8 space-y-8">

                    <!-- Article Container Card -->
                    <div class="bg-white p-6 sm:p-10 rounded-3xl border border-gray-200/80 shadow-xl space-y-6">

                        <!-- Meta Info Bar & Google News Source Badge -->
                        <div
                            class="flex flex-wrap items-center justify-between gap-4 border-b border-gray-100 pb-4 text-xs">
                            <div class="flex flex-wrap items-center gap-4 sm:gap-6 text-gray-500">
                                <div class="flex items-center gap-2 text-slate-800 font-semibold">
                                    <i class="bi bi-person-fill text-[#EC4813] text-sm"></i>
                                    <span>{{ $blog['author_name'] ?? 'Expert Team' }}</span>
                                    @if(!empty($blog['author_designation']))
                                        <span class="text-gray-400">({{ $blog['author_designation'] }})</span>
                                    @endif
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <i class="bi bi-calendar3 text-[#EC4813]"></i>
                                    <span>{{ date('d M, Y', strtotime($blog['date'] ?? 'now')) }}</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <i class="bi bi-eye text-[#EC4813]"></i>
                                    <span>{{ $blog['views_count'] ?? 1 }} Views</span>
                                </div>
                            </div>

                            <!-- Google Source Preference Link -->
                            <a href="https://www.google.com/preferences/source?q=digitaldaur.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 bg-slate-100 hover:bg-[#EC4813] text-slate-700 hover:text-white text-xs font-bold px-3.5 py-1.5 rounded-full border border-gray-200 transition group shadow-sm">
                                <i class="bi bi-google text-red-500 group-hover:text-white transition"></i>
                                <span>Follow on Google</span>
                            </a>
                        </div>

                        <!-- Title -->
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight">
                            {{ $blog['title'] }}
                        </h1>

                        <!-- Short Description Above Main Featured Image -->
                        @if(!empty($blog['meta_description']))
                            <div class="bg-orange-50/70 p-4 sm:p-5 rounded-2xl border-l-4 border-[#EC4813]">
                                <p class="text-slate-700 text-sm font-medium leading-relaxed">
                                    {{ $blog['meta_description'] }}
                                </p>
                            </div>
                        @endif

                        <!-- Main Featured Image (16:9 Aspect Ratio) -->
                        <div class="relative w-full aspect-[16/9] rounded-2xl overflow-hidden border border-gray-100 shadow-xl">
                            <img src="{{ $blog['img'] ?? asset('images/about-meeting.jpg') }}"
                                alt="{{ $blog['img_alt'] ?? $blog['title'] }}" class="w-full h-full object-cover">
                        </div>

                        <!-- Article Content HTML Rendered with Read More / Read Less Collapse -->
                        <div class="relative">
                            <div id="blogContentWrapper" class="blog-content pt-2 relative overflow-hidden transition-all duration-500 max-h-[550px]">
                                {!! $blog['content'] !!}
                                <!-- Gradient Fade Overlay -->
                                <div id="blogContentOverlay" class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-white via-white/90 to-transparent pointer-events-none transition-opacity duration-300"></div>
                            </div>

                            <!-- Read More / Read Less Toggle Button Container -->
                            <div id="toggleArticleContainer" class="text-center pt-4">
                                <button type="button" id="toggleArticleBtn" onclick="toggleArticleContent()"
                                    class="inline-flex items-center gap-2 bg-[#0F172A] hover:bg-[#EC4813] text-white text-xs sm:text-sm font-bold px-6 py-3 rounded-xl shadow-lg shadow-slate-900/10 hover:shadow-orange-500/20 transition-all duration-300 cursor-pointer group">
                                    <span id="toggleArticleBtnText">READ MORE</span>
                                    <i id="toggleArticleBtnIcon" class="bi bi-chevron-down text-[#EC4813] group-hover:text-white transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Social Share Icons & Share Article Button Footer -->
                        <div class="pt-6 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                            <!-- Google Source Link Footer -->
                            <a href="https://www.google.com/preferences/source?q=digitaldaur.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-[#EC4813] transition">
                                <i class="bi bi-google text-red-500"></i>
                                <span>Add Digital Daur on Google News</span>
                            </a>

                            <!-- Share Article Button & Social Icons -->
                            <div class="flex items-center gap-3">
                                <button onclick="shareCurrentArticle()"
                                    class="inline-flex items-center gap-2 bg-[#EC4813] hover:bg-[#C9390B] text-white text-xs font-bold px-4 py-2 rounded-xl shadow-md shadow-orange-500/20 transition cursor-pointer">
                                    <i class="bi bi-share-fill"></i>
                                    <span>Share Article</span>
                                </button>
                                <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
                                    class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#EC4813] text-slate-700 hover:text-white flex items-center justify-center transition text-xs" title="Share on Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog['title']) }}" target="_blank"
                                    class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#EC4813] text-slate-700 hover:text-white flex items-center justify-center transition text-xs" title="Share on Twitter">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($blog['title'] . ' - ' . url()->current()) }}" target="_blank"
                                    class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#25D366] text-slate-700 hover:text-white flex items-center justify-center transition text-xs" title="Share on WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}" target="_blank"
                                    class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#EC4813] text-slate-700 hover:text-white flex items-center justify-center transition text-xs" title="Share on LinkedIn">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- FAQs Accordion Section (If Present) -->
                    @if(!empty($faqs) && count($faqs) > 0)
                        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-200/80 shadow-xl space-y-6">
                            <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                                <i class="bi bi-question-circle-fill"></i>
                                <span>Frequently Asked Questions</span>
                            </div>
                            <h3 class="text-2xl font-extrabold text-slate-900">
                                Got Questions About <span class="text-[#EC4813]">This Article?</span>
                            </h3>
                            <div class="space-y-4">
                                @foreach($faqs as $index => $faq)
                                    <div class="border border-gray-200 rounded-2xl overflow-hidden">
                                        <button onclick="toggleFaq({{ $index }})"
                                            class="w-full text-left p-4 sm:p-5 bg-gray-50/50 hover:bg-gray-100/60 font-bold text-slate-900 text-sm sm:text-base flex items-center justify-between gap-4 transition">
                                            <span>{{ $faq['question']}}</span>
                                            <i id="faqIcon-{{ $index }}"
                                                class="bi bi-chevron-down text-[#EC4813] transition-transform duration-300"></i>
                                        </button>
                                        <div id="faqAnswer-{{ $index }}"
                                            class="hidden p-4 sm:p-5 bg-white text-gray-600 text-sm leading-relaxed border-t border-gray-100">
                                            {{ $faq['answer'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

                <!-- Right Sidebar Column (4 Cols - Sticky on Desktop) -->
                <div class="lg:col-span-4 space-y-8 lg:sticky lg:top-28 self-start">

                    <!-- 1. Table of Contents Widget (Bullet Points & Scrollable) -->
                    <div id="tocWidget" class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-xl space-y-4">
                        <h4
                            class="font-extrabold text-slate-900 text-lg border-b border-gray-100 pb-3 flex items-center justify-between">
                            <span>Table of Contents</span>
                            <i class="bi bi-list-ul text-[#EC4813] text-lg"></i>
                        </h4>
                        <ul id="tocList" class="space-y-3 text-xs text-slate-700 max-h-64 sm:max-h-80 overflow-y-auto pr-1.5 toc-scrollbar">
                        </ul>
                    </div>

                    <!-- 2. Latest Blogs Widget (16:9 Aspect Ratio Thumbnails) -->
                    <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-xl space-y-4">
                        <h4
                            class="font-extrabold text-slate-900 text-lg border-b border-gray-100 pb-3 flex items-center justify-between">
                            <span>Latest Blogs</span>
                            <i class="bi bi-newspaper text-[#EC4813] text-sm"></i>
                        </h4>
                        <div class="space-y-4">
                            @foreach($latestBlogs as $lBlog)
                                <a href="{{ route('blogs.show', $lBlog['url'] ?? $lBlog['id']) }}"
                                    class="flex items-center gap-3.5 group">
                                    <div class="w-24 aspect-[16/9] rounded-xl overflow-hidden shrink-0 border border-gray-100">
                                        <img src="{{ $lBlog['img'] ?? asset('images/about-meeting.jpg') }}"
                                            alt="{{ $lBlog['title'] }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                                    </div>
                                    <div class="space-y-1">
                                        <span class="text-[10px] font-semibold text-[#EC4813] block">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ date('d M, Y', strtotime($lBlog['date'] ?? 'now')) }}
                                        </span>
                                        <h5
                                            class="text-xs font-bold text-slate-900 group-hover:text-[#EC4813] transition line-clamp-2 leading-snug">
                                            {{ $lBlog['title'] }}
                                        </h5>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- 3. Sidebar Quick Enquiry Form & CTA Widget -->
                    <div class="bg-slate-900 text-white p-6 sm:p-7 rounded-3xl border border-slate-800 shadow-2xl space-y-4 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-2 h-full bg-[#EC4813]"></div>
                        <div class="space-y-1 relative z-10">
                            <div class="flex items-center gap-2 text-[#EC4813] font-bold text-[11px] uppercase tracking-wider">
                                <i class="bi bi-headset"></i>
                                <span>Quick Enquiry</span>
                            </div>
                            <h4 class="text-lg font-extrabold text-white">Get Free <span class="text-[#EC4813]">Consultation</span></h4>
                            <p class="text-gray-400 text-xs leading-relaxed">Have questions or need custom IT solutions? Get a callback in 15 mins.</p>
                        </div>

                        <form id="sidebarLeadForm" class="space-y-3 relative z-10" onsubmit="handleSidebarLead(event)">
                            <div>
                                <label class="block text-[11px] font-bold text-gray-300 uppercase mb-1">Your Full Name *</label>
                                <input type="text" name="name" required placeholder="Enter Your Name..."
                                    class="w-full bg-slate-800 border border-slate-700 text-white placeholder-gray-400 px-3.5 py-2.5 rounded-xl text-xs focus:outline-none focus:border-[#EC4813] transition">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-gray-300 uppercase mb-1">Mobile Number *</label>
                                <input type="tel" name="phone" required pattern="[6-9][0-9]{9}" maxlength="10" placeholder="10-digit Mobile..."
                                    class="w-full bg-slate-800 border border-slate-700 text-white placeholder-gray-400 px-3.5 py-2.5 rounded-xl text-xs focus:outline-none focus:border-[#EC4813] transition">
                            </div>
                            <button type="submit"
                                class="w-full bg-[#EC4813] hover:bg-[#C9390B] text-white py-3 rounded-xl font-bold text-xs uppercase tracking-wider shadow-lg shadow-orange-500/30 transition flex items-center justify-center gap-2 cursor-pointer mt-1">
                                <span>REQUEST FREE CALLBACK</span>
                                <span>→</span>
                            </button>
                        </form>

                        <div id="sidebarSuccessMsg" class="hidden text-center py-3 text-emerald-400 font-bold text-xs">
                            ✓ Thank you! We will call you shortly.
                        </div>

                        <!-- Direct Phone Call CTA Button -->
                        <div class="pt-3 border-t border-slate-800 text-center space-y-2 relative z-10">
                            <span class="text-[11px] text-gray-400 font-medium block">Or Call Us Directly For Immediate Support:</span>
                            <a href="tel:+919198483820" class="inline-flex items-center justify-center gap-2.5 w-full bg-slate-800 hover:bg-[#EC4813] text-white py-2.5 rounded-xl font-bold text-xs tracking-wider border border-slate-700 hover:border-[#EC4813] transition group shadow-md cursor-pointer">
                                <i class="bi bi-telephone-fill text-[#EC4813] group-hover:text-white transition"></i>
                                <span>+91 91984 83820</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.querySelector('.blog-content');
            const tocList = document.getElementById('tocList');
            const tocWidget = document.getElementById('tocWidget');

            if (content) {
                const headings = content.querySelectorAll('h1, h2, h3, h4');
                const validHeadings = [];

                headings.forEach((h, i) => {
                    const text = h.textContent.replace(/\u00a0/g, ' ').trim();
                    if (!text) {
                        h.style.display = 'none';
                    } else {
                        const id = 'heading-section-' + i;
                        h.id = id;
                        validHeadings.push(h);
                    }
                });

                if (tocList) {
                    tocList.innerHTML = '';
                    if (validHeadings.length > 0) {
                        validHeadings.forEach(h => {
                            const li = document.createElement('li');
                            li.className = 'flex items-start gap-2.5 group cursor-pointer';
                            li.innerHTML = `
                                <span class="w-2 h-2 rounded-full bg-[#EC4813] mt-1.5 shrink-0 group-hover:scale-125 transition"></span>
                                <a href="#${h.id}" class="text-xs text-slate-700 hover:text-[#EC4813] font-medium leading-relaxed transition line-clamp-2">${h.textContent.trim()}</a>
                            `;
                            tocList.appendChild(li);
                        });
                    } else if (tocWidget) {
                        tocWidget.style.display = 'none';
                    }
                }
            }

            // Check if blog content is short and doesn't need Read More button
            const wrapper = document.getElementById('blogContentWrapper');
            const overlay = document.getElementById('blogContentOverlay');
            const toggleContainer = document.getElementById('toggleArticleContainer');
            if (wrapper) {
                if (wrapper.scrollHeight <= 600) {
                    wrapper.classList.remove('max-h-[550px]');
                    if (overlay) overlay.style.display = 'none';
                    if (toggleContainer) toggleContainer.style.display = 'none';
                }
            }
        });

        function toggleArticleContent() {
            const wrapper = document.getElementById('blogContentWrapper');
            const overlay = document.getElementById('blogContentOverlay');
            const btnText = document.getElementById('toggleArticleBtnText');
            const btnIcon = document.getElementById('toggleArticleBtnIcon');

            if (wrapper.classList.contains('max-h-[550px]')) {
                // Expand article content
                wrapper.classList.remove('max-h-[550px]');
                if (overlay) overlay.classList.add('opacity-0', 'pointer-events-none');
                if (btnText) btnText.textContent = 'SHOW LESS';
                if (btnIcon) btnIcon.className = 'bi bi-chevron-up text-[#EC4813] group-hover:text-white transition-transform duration-300';
            } else {
                // Collapse article content
                wrapper.classList.add('max-h-[550px]');
                if (overlay) overlay.classList.remove('opacity-0');
                if (btnText) btnText.textContent = 'READ MORE';
                if (btnIcon) btnIcon.className = 'bi bi-chevron-down text-[#EC4813] group-hover:text-white transition-transform duration-300';
                wrapper.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }

        function toggleFaq(index) {
            const answer = document.getElementById('faqAnswer-' + index);
            const icon = document.getElementById('faqIcon-' + index);
            if (answer) {
                answer.classList.toggle('hidden');
                if (icon) {
                    icon.classList.toggle('rotate-180');
                }
            }
        }

        async function handleSidebarLead(e) {
            e.preventDefault();
            const form = e.target;
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');
            const submitBtn = form.querySelector('button[type="submit"]');

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
                        form_type: 'Blog Sidebar Quick Enquiry Form ({{ addslashes($blog['title']) }})',
                        page_url: window.location.href
                    })
                });
            } catch (err) {
                console.error(err);
            }

            form.classList.add('hidden');
            const successMsg = form.parentElement.querySelector('#sidebarSuccessMsg');
            if (successMsg) {
                successMsg.classList.remove('hidden');
            }
        }

        function shareCurrentArticle() {
            if (navigator.share) {
                navigator.share({
                    title: "{{ addslashes($blog['title']) }}",
                    url: window.location.href
                }).catch(() => {});
            } else {
                navigator.clipboard.writeText(window.location.href);
                alert('Article link copied to clipboard!');
            }
        }
    </script>
@endpush
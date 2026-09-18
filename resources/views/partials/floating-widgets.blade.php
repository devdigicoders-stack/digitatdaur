<!-- LEAD CONSULTATION MODAL POPUP -->
<div id="leadModal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/80 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 px-4">
    <div class="bg-[#0D121F] border border-slate-700/80 rounded-3xl p-8 sm:p-10 max-w-lg w-full relative shadow-2xl text-white transform scale-95 transition-all duration-300" id="modalContainer">
        
        <!-- Close Button -->
        <button id="closeModalBtn" onclick="closeLeadModal()" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-white/10 hover:bg-[#EC4813] text-gray-300 hover:text-white flex items-center justify-center transition cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

        <!-- Header -->
        <div class="space-y-3 mb-6">
            <div class="flex items-center gap-2 text-[#EC4813] font-bold text-xs uppercase tracking-wider">
                <svg class="w-4 h-4 text-[#EC4813] animate-spin-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path stroke-linecap="round" stroke-width="2" d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41"/>
                </svg>
                <span>Instant Consultation</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-black text-white">Book Free <span class="text-[#EC4813]">Strategy Call</span></h3>
            <p class="text-gray-300 text-xs sm:text-sm leading-relaxed">
                Connect directly with Lucknow's top digital growth experts. Enter your phone number below:
            </p>
        </div>

        <!-- Modal Form -->
        <form id="leadModalForm" class="space-y-4">
            <div>
                <label class="block text-xs font-bold text-gray-300 mb-1.5 uppercase tracking-wider">Full Name *</label>
                <div class="relative">
                    <input type="text" id="modalName" required placeholder="Enter Your Full Name..." class="w-full bg-white/10 border border-white/20 text-white placeholder-gray-400 px-4 py-3.5 pl-11 rounded-xl text-sm focus:outline-none focus:border-[#EC4813]">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3.5 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-300 mb-1.5 uppercase tracking-wider">Mobile Number *</label>
                <div class="relative">
                    <input type="tel" id="modalPhone" required pattern="[6-9][0-9]{9}" maxlength="10" placeholder="10-digit Mobile (e.g. 9876543210)" title="Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9" class="w-full bg-white/10 border border-white/20 text-white placeholder-gray-400 px-4 py-3.5 pl-11 rounded-xl text-sm focus:outline-none focus:border-[#EC4813]">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3.5 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
            </div>

            <button type="submit" class="w-full bg-[#EC4813] hover:bg-[#C9390B] text-white py-4 rounded-xl font-bold text-sm uppercase tracking-wider shadow-lg shadow-orange-500/30 transition flex items-center justify-center gap-2 mt-2 cursor-pointer">
                <span>SUBMIT REQUEST</span>
                <span>→</span>
            </button>
        </form>

        <div id="modalSuccess" class="hidden text-center py-6 space-y-3">
            <div class="w-16 h-16 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center mx-auto text-2xl font-bold">✓</div>
            <h4 class="text-xl font-bold text-white">Thank You!</h4>
            <p class="text-gray-300 text-xs">Our Lucknow expert team will call you back within 15 minutes.</p>
        </div>
    </div>
</div>

<!-- FLOATING ACTION BUTTONS (Locked to Bottom Right Corner) -->
<!-- 1. Back To Top Button -->
<button id="backToTopBtn" onclick="scrollToTop()" style="position: fixed; bottom: 92px; right: 28px; z-index: 99999; display: none;" class="w-12 h-12 rounded-full bg-slate-900 border border-slate-700 text-white hover:bg-[#EC4813] hover:border-[#EC4813] flex items-center justify-center shadow-2xl backdrop-blur-md transition-all duration-300 transform hover:scale-110 cursor-pointer" title="Back to top">
    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
</button>

<!-- 2. Vibrating WhatsApp Floating Button -->
<a href="https://wa.me/919198483820?text=Hello%20Digital%20Daur,%20I%20am%20interested%20in%20your%20IT%20%26%20Software%20development%20services." target="_blank" rel="noopener noreferrer" style="position: fixed; bottom: 24px; right: 24px; z-index: 99999;" class="w-14 h-14 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-2xl shadow-green-500/50 hover:bg-[#20ba57] transition duration-300 transform hover:scale-110 animate-vibrate cursor-pointer" title="Chat on WhatsApp (+91 91984 83820)">
    <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full border-2 border-white animate-ping"></span>
    <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full border-2 border-white"></span>
    <i class="bi bi-whatsapp text-3xl text-white"></i>
</a>

<!-- JavaScript Handlers -->
<script>
    function openLeadModal() {
        const modal = document.getElementById('leadModal');
        const container = document.getElementById('modalContainer');
        if (modal && container) {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            container.classList.remove('scale-95');
            container.classList.add('scale-100');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeLeadModal() {
        const modal = document.getElementById('leadModal');
        const container = document.getElementById('modalContainer');
        if (modal && container) {
            modal.classList.add('opacity-0', 'pointer-events-none');
            container.classList.remove('scale-100');
            container.classList.add('scale-95');
            document.body.style.overflow = 'auto';
        }
    }

    document.getElementById('leadModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeLeadModal();
        }
    });

    document.getElementById('leadModalForm')?.addEventListener('submit', async function(e) {
        e.preventDefault();
        const form = e.target;
        const nameInput = document.getElementById('modalName');
        const phoneInput = document.getElementById('modalPhone');
        const submitBtn = form.querySelector('button[type="submit"]');

        const nameVal = nameInput ? nameInput.value.trim() : '';
        const phoneVal = phoneInput ? phoneInput.value.trim() : '';
        const regex = /^[6-9]\d{9}$/;

        if (!regex.test(phoneVal)) {
            alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
            return;
        }

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>SUBMITTING...</span>';
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        try {
            await fetch("/submit-lead", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken || '',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: nameVal,
                    phone: phoneVal,
                    form_type: 'Instant Strategy Call Popup Modal',
                    page_url: window.location.href
                })
            });
        } catch (err) {
            console.error(err);
        }

        document.getElementById('leadModalForm').classList.add('hidden');
        document.getElementById('modalSuccess').classList.remove('hidden');

        setTimeout(() => {
            closeLeadModal();
            setTimeout(() => {
                document.getElementById('leadModalForm').reset();
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>SUBMIT REQUEST</span> <span>→</span>';
                }
                document.getElementById('leadModalForm').classList.remove('hidden');
                document.getElementById('modalSuccess').classList.add('hidden');
            }, 400);
        }, 3000);
    });

    function checkBackToTopScroll() {
        const btn = document.getElementById('backToTopBtn');
        if (btn) {
            if (window.scrollY > 150) {
                btn.style.display = 'flex';
            } else {
                btn.style.display = 'none';
            }
        }
    }

    window.addEventListener('scroll', checkBackToTopScroll);
    window.addEventListener('DOMContentLoaded', checkBackToTopScroll);

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

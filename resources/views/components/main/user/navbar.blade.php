<nav
    class="fixed top-0 left-1/2 z-50 h-[58px] w-[calc(100%-2rem)] max-w-[1238px] -translate-x-1/2 rounded-[24px] border-2 border-white bg-gray-900/30 backdrop-blur-md md:h-[64px]">
    <div class="h-full px-3 sm:px-6">
        <div class="flex h-full items-center justify-between">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('/assets/images/Logo.png') }}" alt="Logo GKPB"
                        class="h-10 w-auto drop-shadow-sm transition-transform duration-200 group-hover:scale-105"
                        onerror="this.style.display='none'" />
                    <span class="font-semibold text-white text-sm tracking-wide hidden sm:block">
                        SINODE GKPB
                    </span>
                </a>
            </div>

            {{-- Desktop Nav Links --}}
            <div class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('home') ? 'text-white bg-white/10' : '' }}">
                    Beranda
                </a>
                <a href="#tentang"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                    Tentang
                </a>
                <a href="#berita"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                    Berita
                </a>
                <a href="#kontak"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                    Kontak
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button type="button" id="mobile-menu-btn"
                class="md:hidden p-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200"
                aria-label="Toggle menu">
                <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
        class="absolute left-0 right-0 top-full mt-2 hidden rounded-2xl border border-white/30 bg-gray-900/30 backdrop-blur-[2.5px] md:hidden">
        <div class="px-4 py-3 space-y-1">
            <a href="{{ route('home') }}"
                class="block px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                Beranda
            </a>
            <a href="#tentang"
                class="block px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                Tentang
            </a>
            <a href="#berita"
                class="block px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                Berita
            </a>
            <a href="#kontak"
                class="block px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-200">
                Kontak
            </a>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });
</script>

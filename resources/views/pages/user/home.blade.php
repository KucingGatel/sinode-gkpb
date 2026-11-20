<x-layouts.user.user>
    <x-slot name="headTitle">User</x-slot>

    <div class="relative h-[calc(100vh-58px)] md:h-[calc(100vh-64px)]">
        <img src="{{ asset('/assets/images/home_hero_section.png') }}" alt="Hero_section"
            class="absolute inset-0 w-full h-full object-cover rounded-b-3xl" />
        <div
            class="absolute inset-0 bg-black/50 backdrop-blur-sm flex flex-col items-center justify-center text-center text-white px-4">
            <h1 class="text-5xl font-bold mb-4">GEREJA KRISTEN PROTESTAN BALI</h1>
            <p class="font-size-sm">Get to know more about us!</p>
        </div>
    </div>

    <div class="flex flex-col md:flex-row items-center justify-center gap-8 mt-12 px-4">
        <div>
            <h1>Tema Pelayanan GKPB 2024 - 2026</h1>
            <h1 class="text-2xl font-bold">Menjadi Gereja Pembawa Damai</h1>
        </div>
        <div>
            <h1>Ayat Tahun 2026</h1>
            <h1 class="text-2xl font-bold">"Ujilah Segala Sesuatu dan Peganglah Yang Baik"</h1>
            <h1>1 Tesalonika 5 : 12</h1>
        </div>
    </div>

    <div class="relative h-[545px] w-[1380px] mt-12 mx-auto rounded-2xl overflow-hidden">
        <img src="{{ asset('/assets/images/hero_section_2.png') }}" alt="Hero_section_2"
            class="w-full h-auto object-cover" />
        <div
            class="absolute inset-0 bg-black/50 backdrop-blur-sm flex flex-col items-left justify-center text-left text-white px-100">
            <p class="font-size-sm">FITUR BARU</p>
            <h1 class="text-5xl font-bold mb-4">Temukan Gereja GKPB terdekat dari lokasi Anda</h1>
            <p class="font-size-sm">Lihat jarak, jadwal ibadah, dan rute ke gereja terdekat!</p>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center gap-8 mt-12 px-4">
        <h1 class="text-3xl font-bold text-center mt-12 mb-8">Organisasi Kita</h1>
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 relative h-[545px] w-[1380px] mx-auto rounded-2xl overflow-hidden">
            <img src="{{ asset('/assets/images/mbm.png') }}" alt="Organisasi_kita"
                class="w-full h-auto object-cover" />
            <img src="{{ asset('/assets/images/dhyanapurahotel.png') }}" alt="Organisasi_kita"
                class="w-full h-auto object-cover" />
            <img src="{{ asset('/assets/images/undhira.png') }}" alt="Organisasi_kita"
                class="w-full h-auto object-cover" />
            <img src="{{ asset('/assets/images/smkwiraharapan.png') }}" alt="Organisasi_kita"
                class="w-full h-auto object-cover" />
        </div>
    </div>

    <div class="flex flex-col gap-8 mt-12 px-4">
        <h1 class="text-3xl font-bold mt-12 mb-8">Berita</h1>
        <div class="flex flex-col ">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($news as $item)
                    <x-ui.user.news-card :news="$item" />
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.user.user>

<x-layouts.app>
    {{-- HERO --}}
    <section class="relative min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900">
        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative hero min-h-screen">
            <div class="hero-content text-center text-white px-4">
                <div class="max-w-4xl">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-tight">
                        Hi 👋
                        <span class="block mt-3 text-blue-200">
                            Amankan Tiketmu Yuk
                        </span>
                    </h1>

                    <p class="mt-6 max-w-2xl mx-auto text-base md:text-xl text-blue-100/90 leading-relaxed">
                        BengTix — beli tiket event favoritmu dengan cepat, aman,
                        dan <span class="font-semibold text-white">auto asik</span> ✨
                    </p>

                    <div class="mt-10 flex justify-center">
                        <a href="#event"
                            class="inline-flex items-center justify-center
          px-8 py-3 rounded-2xl
          bg-blue-500 text-white font-semibold
          shadow-xl shadow-blue-900/30
          hover:bg-blue-400 hover:scale-105
          active:scale-95
          transition-all duration-200">
                            Lihat Event
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EVENT SECTION --}}
    <section id="event" class="max-w-7xl mx-auto py-14 px-6">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-10">
            <h2 class="text-2xl md:text-3xl font-black uppercase italic tracking-wide">
                Event
            </h2>

            {{-- Kategori --}}
            <div class="flex gap-2 overflow-x-auto pb-2 scrollbar-hide">
                <a href="{{ route('home') }}">
                    <x-user.category-pill
                        :label="'Semua'"
                        :active="!request('kategori')" />
                </a>

                @foreach($categories as $kategori)
                <a href="{{ route('home', ['kategori' => $kategori->id]) }}">
                    <x-user.category-pill
                        :label="$kategori->nama"
                        :active="request('kategori') == $kategori->id" />
                </a>
                @endforeach
            </div>
        </div>

        {{-- EVENT GRID --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($events as $event)
            <x-user.event-card
                :title="$event->judul"
                :date="$event->tanggal_waktu"
                :location="$event->lokasi->nama_lokasi"
                :price="$event->tikets_min_harga"
                :image="$event->gambar"
                :href="route('events.show', $event)" />
            @endforeach
        </div>
    </section>
</x-layouts.app>
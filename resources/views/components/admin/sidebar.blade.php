<div class="drawer-side is-drawer-close:overflow-visible">
    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>

    <div class="flex min-h-full flex-col items-start bg-white border-r border-blue-100 w-64 is-drawer-close:w-14 is-drawer-open:w-80 transition-all duration-300">

        <!-- Logo -->
        <div class="w-full flex items-center justify-center p-5 border-b border-blue-100">
            <img src="{{ asset('assets/images/logo_bengkod.svg') }}" alt="Logo" class="h-10">
        </div>

        <!-- Sidebar content -->
        <ul class="menu w-full grow gap-2 px-2 py-4 text-slate-700">

            <!-- Dashboard -->
            <li class="{{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 text-blue-700 rounded-xl' : '' }}">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 hover:bg-blue-50 hover:text-blue-600 transition
                          is-drawer-close:tooltip is-drawer-close:tooltip-right"
                    data-tip="Dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10z" />
                    </svg>
                    <span class="is-drawer-close:hidden font-medium">Dashboard</span>
                </a>
            </li>

            <!-- Kategori -->
            <li class="{{ request()->routeIs('admin.categories.*') ? 'bg-blue-100 text-blue-700 rounded-xl' : '' }}">
                <a href="{{ route('admin.categories.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 hover:bg-blue-50 hover:text-blue-600 transition
                          is-drawer-close:tooltip is-drawer-close:tooltip-right"
                    data-tip="Kategori">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-width="2"
                            d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0" />
                    </svg>
                    <span class="is-drawer-close:hidden font-medium">Manajemen Kategori</span>
                </a>
            </li>

            <!-- Event -->
            <li class="{{ request()->routeIs('admin.events.*') ? 'bg-blue-100 text-blue-700 rounded-xl' : '' }}">
                <a href="{{ route('admin.events.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 hover:bg-blue-50 hover:text-blue-600 transition
                          is-drawer-close:tooltip is-drawer-close:tooltip-right"
                    data-tip="Event">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2" />
                    </svg>
                    <span class="is-drawer-close:hidden font-medium">Manajemen Event</span>
                </a>
            </li>

            <!-- Payment -->
            <li class="{{ request()->routeIs('admin.payments.*') ? 'bg-gray-200 rounded-lg' : '' }}">
                <a href="{{ route('admin.payments.index') }}"
                    class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Payment">
                    <!-- icon Payment -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2" />
                    </svg>
                    <span class="is-drawer-close:hidden">Manajemen Pembayaran</span>
                </a>
            </li>

            <!-- History -->
            <li class="{{ request()->routeIs('admin.histories.*') ? 'bg-blue-100 text-blue-700 rounded-xl' : '' }}">
                <a href="{{ route('admin.histories.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-2 hover:bg-blue-50 hover:text-blue-600 transition
                          is-drawer-close:tooltip is-drawer-close:tooltip-right"
                    data-tip="History">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span class="is-drawer-close:hidden font-medium">History Pembelian</span>
                </a>
            </li>
        </ul>

        <!-- Logout -->
        <div class="w-full p-4 border-t border-blue-100">
            <button type="button"
                onclick="logout_modal.showModal()"
                class="btn w-full bg-red-50 text-red-600 border border-red-200
               hover:bg-red-600 hover:text-white transition
               is-drawer-close:tooltip is-drawer-close:tooltip-right"
                data-tip="Logout">

                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M10 17v-2h4v-2h-4v-2l-5 3l5 3
                   m9-12H5q-.825 0-1.413.588T3 7v10
                   q0 .825.587 1.413T5 19h14
                   q.825 0 1.413-.587T21 17v-3h-2v3H5V7h14v3h2V7z" />
                </svg>

                <span class="is-drawer-close:hidden font-medium">Logout</span>
            </button>
        </div>
    </div>
</div>
<dialog id="logout_modal" class="modal">
    <form method="POST" action="{{ route('logout') }}"
        class="modal-box rounded-2xl">
        @csrf

        <h3 class="text-lg font-semibold text-slate-800 mb-2">
            Konfirmasi Logout
        </h3>
        <p class="text-slate-600">
            Apakah Anda yakin ingin keluar dari aplikasi?
        </p>

        <div class="modal-action">
            <button type="submit"
                class="px-5 py-2 rounded-xl bg-red-600 text-white
                       hover:bg-red-700 transition">
                Logout
            </button>
            <button type="button"
                onclick="logout_modal.close()"
                class="px-5 py-2 rounded-xl border border-slate-300
                       hover:bg-slate-100 transition">
                Batal
            </button>
        </div>
    </form>
</dialog>
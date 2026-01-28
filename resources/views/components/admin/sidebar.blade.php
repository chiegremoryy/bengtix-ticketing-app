<div class="drawer-side is-drawer-close:overflow-visible">
    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>

    <div class="flex min-h-full flex-col items-start bg-gradient-to-b from-slate-50 to-slate-100 border-r border-slate-200 w-64 is-drawer-close:w-16 is-drawer-open:w-80 transition-all duration-300">

        <!-- Logo -->
        <div class="w-full flex items-center justify-center py-6 px-4 border-slate-200">
            <img src="{{ asset('assets/images/logo_bengtix.png') }}" alt="Logo Bengtix"
                class="h-25 transition-transform duration-300 hover:scale-60">
        </div>

        <!-- Sidebar content -->
        <ul class="menu w-full grow gap-2.5 px-3 py-5 text-slate-700">

            <!-- Dashboard -->
            <li class="{{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
                          hover:bg-blue-600 hover:text-white hover:shadow-md
                          is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="Dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10z" />
                    </svg>
                    <span class="is-drawer-close:hidden">Dashboard</span>
                </a>
            </li>

            <!-- Kategori -->
            <li class="{{ request()->routeIs('admin.categories.*') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.categories.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
                          hover:bg-blue-600 hover:text-white hover:shadow-md
                          is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="Kategori">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-width="2"
                            d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0" />
                    </svg>
                    <span class="is-drawer-close:hidden">Manajemen Kategori</span>
                </a>
            </li>

            <!-- Event -->
            <li class="{{ request()->routeIs('admin.events.*') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.events.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
                          hover:bg-blue-600 hover:text-white hover:shadow-md
                          is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="Event">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2" />
                    </svg>
                    <span class="is-drawer-close:hidden">Manajemen Event</span>
                </a>
            </li>

            <!-- Kategori Tiket -->
            <li class="{{ request()->routeIs('admin.ticket_types.*') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.ticket_types.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
              hover:bg-blue-600 hover:text-white hover:shadow-md
              is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="Ticket">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4 5h16v4a2 2 0 0 0 0 4v4H4v-4a2 2 0 0 0 0-4z" />
                    </svg>
                    <span class="is-drawer-close:hidden">Manajemen Tiket</span>
                </a>
            </li>

            <!-- Payments -->
            <li class="{{ request()->routeIs('admin.payments.*') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.payments.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
                          hover:bg-blue-600 hover:text-white hover:shadow-md
                          is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="Pembayaran">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="6" width="18" height="13" rx="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 10H20.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 15H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="is-drawer-close:hidden">Manajemen Pembayaran</span>
                </a>
            </li>

            <!-- Locations -->
            <li class="{{ request()->routeIs('admin.locations.*') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.locations.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
                          hover:bg-blue-600 hover:text-white hover:shadow-md
                          is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="Lokasi">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="6" width="18" height="13" rx="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 10H20.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 15H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="is-drawer-close:hidden">Manajemen Lokasi</span>
                </a>
            </li>

            <!-- History -->
            <li class="{{ request()->routeIs('admin.histories.*') ? 'bg-blue-600 text-white rounded-xl shadow-md' : '' }}">
                <a href="{{ route('admin.histories.index') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition duration-200
                          hover:bg-blue-600 hover:text-white hover:shadow-md
                          is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:justify-center"
                    data-tip="History">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span class="is-drawer-close:hidden">History Pembelian</span>
                </a>
            </li>
        </ul>

        <!-- Logout -->
        <div class="w-full px-3 py-4 border-t border-slate-200">
            <button type="button"
                onclick="logout_modal.showModal()"
                class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-xl font-medium text-sm
                       bg-red-600 text-white shadow-md
                       hover:bg-red-700 hover:shadow-lg active:shadow-inner
                       transition-all duration-200
                       is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-close:p-0"
                data-tip="Logout">

                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M10 17v-2h4v-2h-4v-2l-5 3l5 3
                   m9-12H5q-.825 0-1.413.588T3 7v10
                   q0 .825.587 1.413T5 19h14
                   q.825 0 1.413-.587T21 17v-3h-2v3H5V7h14v3h2V7z" />
                </svg>

                <span class="is-drawer-close:hidden">Logout</span>
            </button>
        </div>
    </div>
</div>
<dialog id="logout_modal" class="modal">
    <form method="POST" action="{{ route('logout') }}"
        class="modal-box rounded-2xl bg-white shadow-2xl border border-slate-100">
        @csrf

        <h3 class="text-lg font-bold text-slate-900 mb-2">
            Konfirmasi Logout
        </h3>
        <p class="text-slate-600 text-sm">
            Apakah Anda yakin ingin keluar dari aplikasi?
        </p>

        <div class="modal-action gap-3 mt-6">
            <button type="submit"
                class="px-6 py-2.5 rounded-xl bg-red-600 text-white font-medium text-sm
                       hover:bg-red-700 active:shadow-inner
                       transition-all duration-200 shadow-md hover:shadow-lg">
                Logout
            </button>
            <button type="button"
                onclick="logout_modal.close()"
                class="px-6 py-2.5 rounded-xl bg-slate-100 text-slate-700 font-medium text-sm
                       hover:bg-slate-200 active:shadow-inner
                       border border-slate-200
                       transition-all duration-200">
                Batal
            </button>
        </div>
    </form>
</dialog>
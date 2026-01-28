<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Dashboard' }}</title>

    <!-- DaisyUI & Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">
    <div class="drawer lg:drawer-open min-h-screen">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <!-- MAIN CONTENT -->
        <div class="drawer-content flex flex-col">

            <!-- NAVBAR -->
            <nav class="sticky top-0 z-30 bg-white border-b border-gray-200 shadow-sm">
                <div class="navbar px-4 lg:px-6">

                    <!-- Mobile Drawer Button (Kiri) -->
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="w-6 h-6 stroke-current" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </label>
                    </div>

                    <!-- SPACER (pengganti page title) -->
                    <div class="flex-1"></div>

                    <!-- User Menu (Kanan) -->
                    <div class="flex-none">
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div
                                    class="w-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold">
                                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                                </div>
                            </div>

                            <ul tabindex="0"
                                class="menu menu-sm dropdown-content mt-3 z-[1] w-52 rounded-lg bg-white border border-gray-200 shadow-lg p-2">
                                <li class="menu-title px-4 py-2">
                                    <span class="text-xs text-gray-500">Signed in as</span>
                                    <span class="font-semibold text-gray-800">
                                        {{ Auth::user()->name ?? 'Admin' }}
                                    </span>
                                </li>
                                <div class="divider my-0"></div>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>

            <!-- PAGE CONTENT -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            <!-- FOOTER -->
            <footer class="bg-white border-t border-gray-200">
                <div class="px-6 py-4 text-center text-sm text-gray-600">
                    © {{ date('Y') }} BengTixApp. All rights reserved.
                </div>
            </footer>
        </div>

        <!-- SIDEBAR -->
        @include('components.admin.sidebar')
    </div>

    {{-- Extra scripts --}}
    @stack('scripts')
</body>

</html>
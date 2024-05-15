<!-- sidenav  -->
<aside
    class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-lg leading-tight whitespace-nowrap text-slate-700 text-center" href="#">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">SIARAT</span>
            <p class="text-sm">Sistem Arsip Surat</p>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen h-sidenav grow basis-full">
        <ul class="flex flex-col gap-1 mt-4">
            {{-- Admin --}}
            @if (Auth::user()->role_id == 1)
                <li class="# w-full bg-[#fff] text-indigo-800 rounded">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="#">
                        <ion-icon name="pie-chart" class="h-6 w-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft #">Dashboard</span>
                    </a>
                </li>
                <li class="# w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="#">
                        <ion-icon name="people" class="h-6 w-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft #">Pegawai</span>
                    </a>
                </li>
            @endif

            {{-- Pimpinan --}}
            @if (Auth::user()->role_id == 2)
                <li class="# w-full bg-[#fff] text-indigo-800 rounded">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="#">
                        <ion-icon name="pie-chart" class="h-6 w-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft #">Dashboard</span>
                    </a>
                </li>
            @endif

            {{-- Pegawai --}}
            @if (Auth::user()->role_id == 3)
                <li class="# w-full bg-[#fff] text-indigo-800 rounded">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="#">
                        <ion-icon name="pie-chart" class="h-6 w-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft #">Dashboard</span>
                    </a>
                </li>
            @endif

            <li class="w-full">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                        <ion-icon name="log-out" class="w-6 h-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft #">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<!-- end sidenav -->

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
                <li
                    class="{{ url()->current() == route('dashboard.admin') ? 'bg-[#fff] text-indigo-800 rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('dashboard.admin') }}">
                        <ion-icon name="pie-chart" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('pegawai.index') ||
                    url()->current() == route('pegawai.create') ||
                    url()->current() == route('pegawai.edit', Auth::user()->id)
                        ? 'bg-[#fff] text-indigo-800 rounded w-full'
                        : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pegawai.index') }}">
                        <ion-icon name="people" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Pegawai
                        </span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('pengirim.index') ||
                    url()->current() == route('pengirim.create') ||
                    url()->current() == route('pengirim.edit', Auth::user()->id)
                        ? 'bg-[#fff] text-indigo-800 rounded w-full'
                        : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pengirim.index') }}">
                        <ion-icon name="person" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Pengirim
                        </span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('surat-masuk.index') ||
                    url()->current() == route('surat-masuk.create') ||
                    url()->current() == route('surat-masuk.edit', Auth::user()->id)
                        ? 'bg-[#fff] text-indigo-800 rounded w-full'
                        : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('surat-masuk.index') }}">
                        <ion-icon name="mail-open" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Surat Masuk
                        </span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('surat-keluar.index') ||
                    url()->current() == route('surat-keluar.create') ||
                    url()->current() == route('surat-keluar.edit', Auth::user()->id)
                        ? 'bg-[#fff] text-indigo-800 rounded w-full'
                        : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('surat-keluar.index') }}">
                        <ion-icon name="mail" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Surat Keluar
                        </span>
                    </a>
                </li>
            @endif

            {{-- Pimpinan --}}
            @if (Auth::user()->role_id == 2)
                <li
                    class="{{ url()->current() == route('pimpinan.dashboard') ? 'bg-[#fff] text-indigo-800 shadow-sm rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pimpinan.dashboard') }}">
                        <ion-icon name="pie-chart" class="h-6 w-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('pimpinan.disposisi.index') ? 'bg-[#fff] text-indigo-800 shadow-sm rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pimpinan.disposisi.index') }}">
                        <ion-icon name="send" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">Disposisi
                        </span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('pimpinan.surat-masuk.index') ? 'bg-[#fff] text-indigo-800 rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pimpinan.surat-masuk.index') }}">
                        <ion-icon name="mail-open" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Surat Masuk
                        </span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('pimpinan.surat-keluar.index') ? 'bg-[#fff] text-indigo-800 rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pimpinan.surat-keluar.index') }}">
                        <ion-icon name="mail" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                            Surat Keluar
                        </span>
                    </a>
                </li>
            @endif

            {{-- Pegawai --}}
            @if (Auth::user()->role_id == 3)
                <li
                    class="{{ url()->current() == route('pegawai.dashboard') ? 'bg-[#fff] text-indigo-800 shadow-sm rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pegawai.dashboard') }}">
                        <ion-icon name="pie-chart" class="h-6 w-6"></ion-icon>
                        <span
                            class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>
                <li
                    class="{{ url()->current() == route('pegawai.disposisi.index') ? 'bg-[#fff] text-indigo-800 shadow-sm rounded w-full' : ' ' }}">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('pegawai.disposisi.index') }}">
                        <ion-icon name="send" class="h-6 w-6"></ion-icon>
                        <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">Disposisi
                        </span>
                    </a>
                </li>
            @endif

            <hr class="h-px mt-3 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

            <li
                class="{{ url()->current() == route('setting.edit', Auth::user()->id) ? 'bg-[#fff] text-indigo-800 rounded w-full' : ' ' }}">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('setting.edit', Auth::user()->id) }}">
                    <ion-icon name="settings" class="h-6 w-6"></ion-icon>
                    <span class="ml-2 text-base duration-300 opacity-100 pointer-events-none ease-soft">
                        Setting
                    </span>
                </a>
            </li>

            <li class="#">
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

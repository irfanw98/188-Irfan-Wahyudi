<!-- Navbar -->
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                    <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                    aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
        </nav>

        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <div class="flex flex-col items-center gap-1">
                <div>
                    <i class="fa fa-user sm:mr-1"></i>
                    <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                </div>
                <div>
                    <p class="text-sm font-semibold">{{ Auth::user()->position }}</p>
                </div>
            </div>
        </ul>
    </div>
    </div>
</nav>

<!-- end Navbar -->

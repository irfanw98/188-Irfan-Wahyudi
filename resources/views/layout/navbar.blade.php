<!-- Navbar -->
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="true">
    <div class="flex items-center justify-end w-full px-4 py-1 mt-2 mx-auto flex-wrap-inherit">
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

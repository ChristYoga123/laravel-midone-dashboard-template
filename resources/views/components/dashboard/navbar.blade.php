<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset("assets/dist/images/logo.svg") }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route("dashboard.index") }}" class="side-menu side-menu--{{ Route::is("dashboard.index") ? "active" : ""}}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.datatable.index') }}" class="side-menu side-menu--{{ Route::is("dashboard.datatable.index") ? "active" : ""}}">
                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                <div class="side-menu__title">Datatable</div>
            </a>
        </li>
        
    </ul>
</nav>
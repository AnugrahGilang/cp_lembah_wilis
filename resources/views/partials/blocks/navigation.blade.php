<!-- Fixed Navigation -->
<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <!-- logo -->
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img loading="lazy" class="logo-default" src="{{ asset('images/lg-lembah-wilis.png') }}" alt="logo" />
                <img loading="lazy" class="logo-white" src="{{ asset('images/lg-lembah-wilis.png') }}" alt="logo" />
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Homepage</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/about') }}">Profil</a>
                    </li>
                    <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/service') }}">Layanan</a>
                    </li>
                    <li class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/portofolio') }}">Galeri</a>
                    </li>
                    {{-- <li class="nav-item {{ request()->is('team') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/team') }}">Team</a>
                    </li> --}}
                    <li class="nav-item {{ request()->is('pricing') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/pricing') }}">Reservation</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    {{-- <li class="nav-item {{ request()->is('pages') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/pages') }}">Pages</a>
                    </li> --}}
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!-- End Fixed Navigation -->

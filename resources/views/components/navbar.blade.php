<div class="container-fluid sticky-top px-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 px-4">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <h1 class="text-secondary display-6"><i class="fas fa-city text-primary me-3"></i>Constra</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link @if (request()->routeIs('home')) active @endif" wire:navigate>Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link @if (request()->routeIs('about')) active @endif wire:navigate>">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link @if (request()->routeIs('services')) active @endif wire:navigate>">Services</a>
                
            </div>
            <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                <a href="{{ route('contact') }}"
                    class="btn btn-secondary py-2 px-4 flex-wrap flex-sm-shrink-0 @if (request()->routeIs('contact')) active @endif wire:navigate>">Contact</a>

            </div>
        </div>
    </nav>
</div>

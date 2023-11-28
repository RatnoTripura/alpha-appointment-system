<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{ route('frontend.home') }}" class="navbar-brand">
                <img src="{{ asset('ui/frontend') }}/Assets/Images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a class="nav-item nav-link @if ($title === 'Index') fw-bold active @endif"
                        href="{{ url('/') }}">Home</a>
                    <a class="nav-item nav-link @if ($title === 'About') fw-bold active @endif" href="#"
                        class="nav-item nav-link">About</a>
                    <a class="nav-item nav-link @if ($title === 'Contact Us') fw-bold active @endif"
                        href="{{ url('/contact') }}">Contact</a>

                    @if (Auth::user())
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            {{-- <input type="submit" class="nav-item nav-link fw-bold" href=""> --}}
                            <input type="submit" class="nav-item nav-link fw-bold" value="Logout">
                        </form>
                    @else
                        <a class="nav-item nav-link @if ($title === 'Sign Up' || $title === 'Login') fw-bold active @endif"
                            href="{{ route('register') }}">login / Signup </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>

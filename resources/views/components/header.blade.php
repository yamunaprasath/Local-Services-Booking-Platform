<div class="main-header main-header-nine">
    <div class="header-topbar topbar-four topbar-nine text-center">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center flex-wrap">
                    <p class="d-flex align-items-center fs-14 mb-0 me-3 "><i class="isax isax-call5 me-2"></i>Toll Free
                        : +91 123 456 789</p>
                    <p class="mb-0 d-flex align-items-center fs-14"><i class="isax isax-message-text-15 me-2"></i>Email
                        : <a href="mailto:example@gmail.com" class="">example@gmail.com</a></p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown flag-dropdown me-3 mt-1">
                        <a href="#" class="dropdown-toggle d-inline-flex" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src=" {{ asset('/images/flags/us-flag.svg') }}" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                    <img src=" {{ asset('/images/flags/us-flag.svg') }}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                    <img src=" {{ asset('/images/flags/france-flag.svg') }}" class="me-2" alt="flag">FRA
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-four header-nine">
        <div class="container-fluid">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="index.html" class="black-logo-responsive">
                                    <img src="{{ asset('images/logo.png') }}" alt="logo-img">
                                </a>
                                <a href="index.html" class="white-logo-responsive">
                                    <img src="{{ asset('images/logo.png') }}" alt="logo-img p-1" width="200">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <div class="fs-16 fw-medium text-dark">Wishlist</div>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="wishlist.html" class="position-relative">
                                            <i class="isax isax-heart"></i><span
                                                class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown flag-dropdown mb-2">
                                            <a href="#"
                                                class="dropdown-toggle bg-white border d-flex align-items-center"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{ asset('images/flags/us-flag.svg') }}" class="me-2"
                                                    alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                                        <img src="{{ asset('images/flags/us-flag.svg') }}" class="me-2"
                                                            alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                                        <img src="{{ asset('images/flags/france-flag.svg') }}"
                                                            class="me-2" alt="flag">FRA
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @if(Auth::check())
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-white btn btn-dark w-100 mb-2">Logout</button>
                                </form>
                                @else
                                <div><a href="{{ route('register') }}"
                                        class="text-white btn btn-primary w-100 mb-2">Sign Up</a></div>
                                <div><a href="{{ route('login') }}" class="text-white btn btn-dark w-100 mb-2">Sign
                                        In</a></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper p-0">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" class="logo p-1" width="200" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" class="logo p-1" width="200" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav gap-3">
                            <li class="active">
                                <a href="#" class="active">Home</a>
                            </li>
                            <li class="has-submenu mega-innermenu">
                                <a href="#">Servies<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu p-0">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li><a href="flight-grid.html">Flight
                                                                Grid</a></li>
                                                        <li><a href="flight-list.html">Flight List</a></li>
                                                        <li><a href="flight-details.html">Flight Details</a></li>
                                                        <li><a href="flight-booking-confirmation.html">Flight
                                                                Booking</a></li>
                                                        <li><a href="add-flight.html">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src=" {{  asset('/images/menu/flight.jpg') }}" alt="img"
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact-us.html">About Us</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            @if(Auth::check())
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('partner.dashboard') }}"
                                        class="text-white btn btn-dark w-100 d-flex align-items-center justify-content-center gap-2">
                                        <i class="fa-solid fa-gauge"></i> Profile
                                    </a>

                                    <button type="submit"
                                        class="text-white btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                                    </button>
                                </div>
                            </form>
                            @else
                            <a href="{{ route('login') }}" class="text-white btn btn-primary w-100"><i
                                    class="isax isax-lock5 me-1"></i>Login</a>
                            <a href="{{ route('register') }}" class="text-white btn btn-dark w-100"><i
                                    class="isax isax-user-minus me-1"></i>Register</a>
                            @endif
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar-menu">
                                <i class="isax isax-menu5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="main-header">
    <!-- Header -->
    <header class="header-eight wow fadeInDown" data-wow-delay="0.3">
        <div class="container-fluid">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="index.html" class="black-logo-responsive">
                                    <img src="{{ asset('images/logo.png') }}" alt="logo-img p-1" width="200">
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
                                                        <img src="{{ asset('images/flags/arab-flag.svg') }}"
                                                            class="me-2" alt="flag">ARA
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
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle bg-white border d-block"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="#">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="#">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="#">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div><a href="#" class="text-white btn btn-dark w-100 mb-2" data-bs-toggle="modal"
                                        data-bs-target="#login-modal">Sign In</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
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
                            <li class="has-submenu megamenutab">
                                <a href="#">Services<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <!-- Left Side Tabs -->
                                                <div class="col-lg-3">
                                                    <div class="nav flex-column nav-pills menu-tab" id="menu-tab"
                                                        role="tablist" aria-orientation="vertical">
                                                        <ul>
                                                            <li>
                                                                <a class="nav-link active" id="activity-tab"
                                                                    data-bs-toggle="tab" href="#activity" role="tab">
                                                                    Activity
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" id="visa-tab" data-bs-toggle="tab"
                                                                    href="#visa" role="tab">
                                                                    Visa
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" id="guide-tab" data-bs-toggle="tab"
                                                                    href="#guide" role="tab">
                                                                    Guide
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" id="pages-tab" data-bs-toggle="tab"
                                                                    href="#pages" role="tab">
                                                                    Pages
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" id="dashboard-tab"
                                                                    data-bs-toggle="tab" href="#dashboard" role="tab">
                                                                    Dashboard
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Right Side Content -->
                                                <div class="col-lg-9">
                                                    <div class="tab-content tab-menulist" id="menu-tabContent">
                                                        <div class="tab-pane fade show active" id="activity"
                                                            role="tabpanel">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <h6>Activity</h6>
                                                                    <ul>
                                                                        <li><a href="activity-grid.html">Activity
                                                                                Grid</a></li>
                                                                        <li><a href="activity-list.html">Activity
                                                                                List</a></li>
                                                                        <li><a href="activity-map.html">Activity
                                                                                Map</a></li>
                                                                        <li><a href="activity-details.html">Activity
                                                                                Details</a></li>
                                                                        <li><a
                                                                                href="activity-booking-confirmation.html">Activity
                                                                                Booking Confirmation</a></li>
                                                                        <li><a href="add-activity.html">Add
                                                                                Activity</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="menu-img">
                                                                        <img src="{{ asset('images/menu/activity.jpg') }}"
                                                                            alt="img" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="visa" role="tabpanel">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <h6>Visa</h6>
                                                                    <ul>
                                                                        <li><a href="activity-grid.html">Visa
                                                                                Grid</a></li>
                                                                        <li><a href="activity-list.html">Visa
                                                                                List</a></li>
                                                                        <li><a href="activity-map.html">Visa
                                                                                Map</a>
                                                                        </li>
                                                                        <li><a href="activity-details.html">Visa
                                                                                Details</a></li>
                                                                        <li><a
                                                                                href="activity-booking-confirmation.html">Visa
                                                                                Booking Confirmation</a></li>
                                                                        <li><a href="add-activity.html">Add
                                                                                Visa</a>
                                                                        </li>
                                                                        <li><a href="track-visa.html">Track
                                                                                Visa</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="menu-img">
                                                                        <img src="{{ asset('images/menu/visa.jpg') }}"
                                                                            alt="img" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="guide" role="tabpanel">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <h6>Guide</h6>
                                                                    <ul>
                                                                        <li><a href="guide-grid.html">Guide
                                                                                Grid</a>
                                                                        </li>
                                                                        <li><a href="guide-details.html">Guide
                                                                                Details</a></li>
                                                                        <li><a href="guide-booking.html">Guide
                                                                                Booking</a></li>
                                                                        <li><a href="guide-booking-confirmation.html">Guide
                                                                                Booking Confirmation</a></li>
                                                                        <li><a href="add-guide.html">Add
                                                                                Guide</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="menu-img">
                                                                        <img src="{{ asset('images/menu/guide.jpg') }}"
                                                                            alt="img" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pages" role="tabpanel">
                                                            <h6>Pages</h6>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <ul>
                                                                        <li><a href="about-us.html">About</a>
                                                                        </li>
                                                                        <li><a href="gallery.html">Gallery</a>
                                                                        </li>
                                                                        <li><a href="testimonial.html">Testimonials</a>
                                                                        </li>
                                                                        <li><a href="faq.html">Faq</a></li>
                                                                        <li><a href="pricing-plan.html">Pricing
                                                                                Plan</a></li>
                                                                        <li><a href="pricing-plan-2.html">Pricing
                                                                                Plan 2</a></li>
                                                                        <li><a href="team.html">Teams</a></li>
                                                                        <li><a href="invoices.html">Invoice</a>
                                                                        </li>
                                                                        <li><a href="blog-grid.html">Blogs
                                                                                Grid</a>
                                                                        </li>
                                                                        <li><a href="blog-list.html">Blogs
                                                                                List</a>
                                                                        </li>
                                                                        <li><a href="blog-details.html">Blogs
                                                                                Details</a></li>
                                                                        <li><a href="index-rtl.html">RTL</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <ul>
                                                                        <li><a href="destination.html">Destination</a>
                                                                        </li>
                                                                        <li><a href="destination-details.html">Destination
                                                                                Details</a></li>
                                                                        <li><a href="recently-viewed.html">Recently
                                                                                Viewed</a></li>
                                                                        <li><a href="booking-confirmation.html">Booking
                                                                                Confirmation</a></li>
                                                                        <li><a href="terms-conditions.html">Terms
                                                                                &
                                                                                Conditions</a></li>
                                                                        <li><a href="privacy-policy.html">Privacy
                                                                                Policy</a></li>
                                                                        <li><a href="{{ route('dashboard') }}">Login</a>
                                                                        </li>
                                                                        <li><a href="register.html">Register</a>
                                                                        </li>
                                                                        <li><a href="forgot-password.html">Forgot
                                                                                Password</a></li>
                                                                        <li><a href="change-password.html">Change
                                                                                Password</a></li>
                                                                        <li><a href="error-404.html">404
                                                                                Error</a>
                                                                        </li>
                                                                        <li><a href="error-500.html">500
                                                                                Error</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="dashboard" role="tabpanel">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <h6>User Dashboard</h6>
                                                                    <ul>
                                                                        <li><a href="dashboard.html">User
                                                                                Dashboard</a></li>
                                                                        <li><a href="customer-flight-booking.html">My
                                                                                Bookings</a></li>
                                                                        <li><a href="review.html">Reviews</a>
                                                                        </li>
                                                                        <li><a href="wishlist.html">Wishlist</a>
                                                                        </li>
                                                                        <li><a href="wallet.html">Wallet</a>
                                                                        </li>
                                                                        <li><a href="payment.html">Payments</a>
                                                                        </li>
                                                                        <li><a href="customer-coupons.html">Offers
                                                                                &
                                                                                Rewards</a></li>
                                                                        <li><a href="profile-settings.html">Profile
                                                                                Settings</a></li>
                                                                        <li><a
                                                                                href="notification.html">Notifications</a>
                                                                        </li>
                                                                        <li><a href="my-profile.html">My
                                                                                Profile</a>
                                                                        </li>
                                                                        <li><a href="profile-settings.html">Settings</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <h6>Agent Dashboard</h6>
                                                                    <ul>
                                                                        <li><a href="agent-dashboard.html">Dashboard</a>
                                                                        </li>
                                                                        <li><a href="agent-listings.html">Listings</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="agent-hotel-booking.html">Bookings</a>
                                                                        </li>
                                                                        <li><a href="agent-enquirers.html">Enquiries</a>
                                                                        </li>
                                                                        <li><a href="agent-earnings.html">Earnings</a>
                                                                        </li>
                                                                        <li><a href="agent-payouts.html">Payouts</a>
                                                                        </li>
                                                                        <li><a href="agent-review.html">Reviews</a>
                                                                        </li>
                                                                        <li><a href="agent-settings.html">Settings</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
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
                        <div class="fav-dropdown me-3">
                            <a href="wishlist.html" class="position-relative text-white wishlist-icon">
                                <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-white">0</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('dashboard') }}" class="text-white btn btn-primary w-100"
                                data-bs-toggle="modal" data-bs-target="#login-modal"><i
                                    class="isax isax-lock5 me-1"></i>Login</a>
                            <a href="{{ route('dashboard') }}" class="text-white btn btn-dark w-100"><i
                                    class="isax isax-user-minus me-1"></i>Register</a>
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
    <!-- /Header -->
</div>
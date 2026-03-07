@extends('index')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
<x-breadcrumb />
@section('content')
<div class="content">
    <div class="container">

        <div class="row">

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                        <div class="agent-profile d-inline-flex">
                            <img src="{{ asset('/images/users/user-43.jpg') }}" alt="image"
                                class="img-fluid rounded-circle">
                            <a href="agent-settings.html"
                                class="avatar avatar-sm rounded-circle btn btn-primary d-flex align-items-center justify-content-center p-0"><i
                                    class="isax isax-edit-2 fs-14"></i></a>
                        </div>
                        <h6 class="fs-16">Chris Foxy</h6>
                        <p class="fs-14 mb-2">Member Since 10 May 2025</p>
                        <div class="d-flex align-items-center justify-content-center notify-item">
                            <a href="agent-notifications.html"
                                class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 me-2 position-relative">
                                <i class="isax isax-notification-bing5 fs-20"></i>
                                <span class="position-absolute p-1 bg-secondary rounded-circle"></span>
                            </a>
                            <a href="agent-chat.html"
                                class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 position-relative">
                                <i class="isax isax-message-square5 fs-20"></i>
                                <span class="position-absolute p-1 bg-danger rounded-circle"></span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li>
                                <a href="agent-dashboard.html" class="d-flex align-items-center active">
                                    <i class="isax isax-grid-55 me-2"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('partner.service.list') }}" class="d-flex align-items-center">
                                    <i class="isax isax-menu-14 me-2"></i> Add Service
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="#" class="d-block"><i class="isax isax-calendar-tick5 me-2"></i>Bookings</a>
                            </li>
                            <li>
                                <a href="agent-enquirers.html" class="d-flex align-items-center">
                                    <i class="isax isax-magic-star5 me-2"></i>Enquiries
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="#" class="d-block"><i
                                        class="isax isax-wallet-add-15 me-2"></i><span>Payout</span><span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="agent-pending-payouts.html"
                                            class="fs-14 d-inline-flex align-items-center">Pending Payouts</a>
                                    </li>
                                    <li>
                                        <a href="agent-commission-summary.html"
                                            class="fs-14 d-inline-flex align-items-center">Commission Summary</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="agent-review.html" class="d-flex align-items-center">
                                    <i class="isax isax-magic-star5 me-2"></i>Reviews
                                </a>
                            </li>
                            <li>
                                <a href="agent-settings.html" class="d-flex align-items-center">
                                    <i class="isax isax-setting-25"></i> Settings
                                </a>
                            </li>
                            <li class="logout-link">
                                <a href="index.html" class="d-flex align-items-center pb-0">
                                    <i class="isax isax-logout-15"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <div class="col-xl-9 col-lg-8">
                <x-message />
                <div class="row">
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2">
                                    <i class="isax isax-calendar-15 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Bookings</p>
                                <h5 class="mb-2">456</h5>
                                <p class="d-flex align-items-center justify-content-center fs-14"><i
                                        class="isax isax-arrow-up-15 me-1 text-success"></i>20% From Last Month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-orange mb-2">
                                    <i class="isax isax-money-time5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Listings</p>
                                <h5 class="mb-2">23</h5>
                                <a href="agent-listings.html" class="fs-14 link-primary text-decoration-underline">View
                                    All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-info mb-2">
                                    <i class="isax isax-money-send5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Earnings</p>
                                <h5 class="mb-2">$5,6560</h5>
                                <p class="d-flex align-items-center justify-content-center fs-14"><i
                                        class="isax isax-arrow-down5 me-1 text-danger"></i>15% From Last Month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-indigo mb-2">
                                    <i class="isax isax-magic-star5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Reviews</p>
                                <h5 class="mb-2">62</h5>
                                <a href="agent-review.html" class="fs-14 link-primary text-decoration-underline">View
                                    All</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Bookings Statistics -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h6>Bookings Statistics</h6>
                                    <div class="dropdown ">
                                        <a href="#"
                                            class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>2025
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2025
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2024
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2023
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <div id="booking-chart"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon teal">Hotels</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">16</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon secondary">Flights</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">12</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon purple">Cars</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">14</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="border-icon dark">Cruise</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">16</span> Bookings</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <h6 class="border-icon primary">Tour</h6>
                                    <p class="fs-14"><span class="text-gray-9 fw-medium">04</span> Bookings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Bookings Statistics -->

                    <!-- Earnings -->
                    <div class="col-xl-8 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h6>Earnings</h6>
                                    <div class="dropdown ">
                                        <a href="#"
                                            class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>2025
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2025
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2024
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">
                                                    <i class="ti ti-point-filled me-1"></i>2023
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="mb-2">
                                            <p class="mb-0">Total Earnings this Year</p>
                                            <h3>$20,659</h3>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <p class="fs-14"><span
                                                    class="badge badge-soft-success badge-md border border-success rounded-pill me-2"><i
                                                        class="isax isax-arrow-up-3 "></i>12%</span>vs last years
                                            </p>
                                        </div>
                                    </div>
                                    <div id="earning-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Earnings -->

                </div>

                <div class="row">

                    <!-- Recently Added -->
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <h6 class="mb-4">Recently Added</h6>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="hotel-details.html" class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="{{ asset('/images/hotels/hotel-20.jpg') }}"
                                                class="img-fluid rounded-circle" alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fs-16"><a href="hotel-details.html">The Grand Horizon</a>
                                                <span class="badge badge-soft-info badge-xs rounded-pill"><i
                                                        class="isax isax-signpost me-1"></i>Hotels</span>
                                            </h6>
                                            <p class="fs-14">Last Booked : 25 Apr 2025</p>
                                        </div>
                                    </div>
                                    <a href="agent-hotel-booking.html" class="btn rebook-btn btn-sm">06 Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Recently Added -->

                    <!-- Recent Invoices -->
                    <div class="col-xxl-7 col-xl-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4 gap-2">
                                    <h6>Latest Invoices</h6>
                                </div>
                                <div class="card shadow-none mb-4">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-between align-items-center flex-fill">
                                            <div>
                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <a href="invoices.html"
                                                        class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12565</a>
                                                    <p class="fs-14">Date: 15 May 2024</p>
                                                </div>
                                                <h6 class="fs-16 fw-medium"><a href="flight-details.html">Cloudrider
                                                        789</a></h6>
                                            </div>
                                            <div class="text-end">
                                                <p class="fs-14 mb-1">Amount</p>
                                                <h6 class="fw-medium">$569</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Invoices -->

                </div>

                <!-- Hotel-Booking List -->
                <div class="card hotel-list mb-0">
                    <div class="card-body p-0">
                        <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                            <h6 class="">Recent Bookings</h6>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="input-icon-start position-relative">
                                    <span class="icon-addon">
                                        <i class="isax isax-search-normal-1 fs-14"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>

                        <!-- Hotel List -->
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Services</th>
                                        <th>Person / company Name</th>
                                        <th>Days</th>
                                        <th>Pricing</th>
                                        <th>Booked on</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                data-bs-target="#upcoming">#HB-1245</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="hotel-details.html" class="avatar avatar-lg"><img
                                                        src=" {{ asset('images/hotels/hotel-01.jpg') }}"
                                                        class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a
                                                            href="hotel-details.html">Hotel Athenee</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Barcelona</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Suite Room</h6>
                                            <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                        </td>
                                        <td>4 Days, 3 Nights</td>
                                        <td>$11,569</td>
                                        <td>15 May 2025</td>
                                        <td>
                                            <span
                                                class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                                    class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#upcoming"><i
                                                        class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                data-bs-target="#cancelled">#HB-3654</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="hotel-details.html" class="avatar avatar-lg"><img
                                                        src="{{ asset('images/hotels/hotel-02.jpg') }}"
                                                        class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                    <p class="text-dark mb-0 fw-medium fs-14"><a
                                                            href="hotel-details.html">Hotel Evergreen</a></p>
                                                    <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 mb-1">Suite Room</h6>
                                            <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                        </td>
                                        <td>4 Days, 3 Nights</td>
                                        <td>$12,600</td>
                                        <td>02 Jul 2025</td>
                                        <td>
                                            <span
                                                class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i
                                                    class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#cancelled"><i
                                                        class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming Modal -->
<div class="modal fade" id="upcoming" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="#" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="{{ asset('/images/hotels/hotel-13.jpg') }}" alt="img"
                                    class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-building me-2"></i>Luxury Hotel
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400
                                        Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                    class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport
                                Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 "><a href="#" class="__cf_email__">Email</a>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-md btn-primary" data-bs-toggle="modal"
                    data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Upcoming Modal -->

<!-- Pending Modal -->
<div class="modal fade" id="pending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="#" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="assets/img/hotels/hotel-13.jpg" alt="image"
                                    class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-building me-2"></i>Luxury Hotel
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400
                                        Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i
                                    class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport
                                Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 "><a
                                        href="https://dreamstour.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="680b001a0e075a5b5d5e280d10090518040d460b0705">[email&#160;protected]</a>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-md btn-primary" data-bs-toggle="modal"
                    data-bs-target="#cancel-booking">Cancel Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- /Pending Modal -->

<!-- Completed Modal -->
<div class="modal fade" id="completed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="#" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="assets/img/hotels/hotel-13.jpg" alt="image"
                                    class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-building me-2"></i>Luxury Hotel
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400
                                        Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                    class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport
                                Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 "><a
                                        href="https://dreamstour.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="72111a00141d4041474432170a131f021e175c111d1f">[email&#160;protected]</a>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="hotel-details.html" class="btn btn-md btn-primary">Book Again</a>
            </div>
        </div>
    </div>
</div>
<!-- /Completed Modal -->

<!-- Cancelled Modal -->
<div class="modal fade" id="cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Booking Info <span class="fs-14 fw-medium text-primary">#HB-1245</span></h5>
                <a href="#" data-bs-dismiss="modal" class="btn-close text-dark"></a>
            </div>
            <div class="modal-body">
                <div class="upcoming-content">
                    <div class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="me-2">
                                <img src="assets/img/hotels/hotel-13.jpg" alt="image"
                                    class="avatar avartar-md avatar-rounded">
                            </div>
                            <div>
                                <h6 class="mb-1">The Luxe Haven</h6>
                                <div class="title-list">
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-building me-2"></i>Luxury Hotel
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2 border-end border-light fw-normal">
                                        <i class="isax isax-location5 me-2"></i>15/C Prince Dareen Road, New York
                                    </p>
                                    <p class="d-flex align-items-center pe-2 me-2  fw-normal"><span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>(400
                                        Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i
                                    class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Room Details</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Type</h6>
                                <p class="text-gray-6 fs-16 ">Queen Room</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Rooms</h6>
                                <p class="text-gray-6 fs-16 ">1</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Room Price</h6>
                                <p class="text-gray-6 fs-16 ">$400</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Guests</h6>
                                <p class="text-gray-6 fs-16 ">4 Adults, 2 Child</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Booking Info</h6>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booked On</h6>
                                <p class="text-gray-6 fs-16 ">15 May 2024</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Check In Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Checkout Date & Time</h6>
                                <p class="text-gray-6 fs-16 ">25 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">No of Days Stay</h6>
                                <p class="text-gray-6 fs-16 ">4 Days, 5 Nights</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Extra Service Info</h6>
                        <div class="d-flex align-items-center">
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Cleaning</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14 me-2">Airport
                                Pickup</span>
                            <span class="bg-light rounded-pill py-1 px-2 text-gray-6 fs-14">Breakfast</span>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Billing Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Name</h6>
                                <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Email</h6>
                                <p class="text-gray-6 fs-16 "><a
                                        href="https://dreamstour.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="ff9c978d9990cdcccac9bf9a879e928f939ad19c9092">[email&#160;protected]</a>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Phone</h6>
                                <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Address</h6>
                                <p class="text-gray-6 fs-16 ">15/C Prince Dareen Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-2">Order Info</h6>
                        <div class="row gy-3">
                            <div class="col-lg-3">
                                <h6 class="fs-14">Order Id</h6>
                                <p class="text-primary fs-16 ">#45669</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Method</h6>
                                <p class="text-gray-6 fs-16 ">Credit Card (Visa)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Payment Status</h6>
                                <p class="text-success fs-16 ">Paid</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Date of Payment</h6>
                                <p class="text-gray-6 fs-16 ">20 May 2024, 10:50 AM</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Tax</h6>
                                <p class="text-gray-6 fs-16 ">15% ($60)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Discount</h6>
                                <p class="text-gray-6 fs-16 ">20% ($15)</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Booking Fees</h6>
                                <p class="text-gray-6 fs-16 ">$25</p>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="fs-14">Total Paid</h6>
                                <p class="text-gray-6 fs-16 ">$6569</p>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-details mb-0">
                        <h6 class="mb-2">Cancel Reason</h6>
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="fs-14">Reason</h6>
                                <p class="text-gray-6 fs-16 ">Illness or medical appointments that prevent travel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="hotel-details.html" class="btn btn-md btn-primary">Reschedule</a>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Modal -->

<!-- Booking Cancel -->
<div class="modal fade" id="cancel-booking">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="https://dreamstour.dreamstechnologies.com/html/agent-dashboard.html">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="isax isax-location-cross5 text-danger fs-40"></i>
                        </div>
                        <h5 class="mb-2">Are you sure you want to cancel booking?</h5>
                        <p class="mb-4 text-gray-9">Order ID : <span class="text-primary">#HB-1245</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">No, Dont Cancel</a>
                        <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Booking Cancel -->

@endsection
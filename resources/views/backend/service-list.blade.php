@extends('index')

@section('title', 'Dashboard')
@section('breadcrumb', 'Service Listing')
<x-breadcrumb />
@section('content')
<!-- Page Wrapper -->
<div class="content">
    <div class="container">

        <div class="row">

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                        <div class="agent-profile d-inline-flex">
                            <img src="{{ asset('/images/users/user-43.jpg') }}" alt="img"
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
                                <a href="agent-dashboard.html" class="d-flex align-items-center">
                                    <i class="isax isax-grid-55 me-2"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="agent-listings.html" class="d-flex align-items-center active">
                                    <i class="isax isax-menu-14 me-2"></i>Listings
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="#" class="d-block"><i
                                        class="isax isax-calendar-tick5 me-2"></i><span>Bookings</span><span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="agent-hotel-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Hotels</a>
                                    </li>
                                    <li>
                                        <a href="agent-car-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Cars</a>
                                    </li>
                                    <li>
                                        <a href="agent-cruise-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Cruise</a>
                                    </li>
                                    <li>
                                        <a href="agent-tour-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Tour</a>
                                    </li>
                                    <li>
                                        <a href="agent-flight-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Flights</a>
                                    </li>
                                    <li>
                                        <a href="agent-bus-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Bus</a>
                                    </li>
                                    <li>
                                        <a href="agent-tour-guide.html"
                                            class="fs-14 d-inline-flex align-items-center">Guide</a>
                                    </li>
                                    <li>
                                        <a href="agent-visa-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Visa</a>
                                    </li>
                                    <li>
                                        <a href="agent-activities-booking.html"
                                            class="fs-14 d-inline-flex align-items-center">Activities</a>
                                    </li>
                                    <li>
                                        <a href="agent-cancellation-requests.html"
                                            class="fs-14 d-inline-flex align-items-center">Cancellation Requests</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="agent-enquirers.html" class="d-flex align-items-center">
                                    <i class="isax isax-magic-star5 me-2"></i>Enquiries
                                </a>
                            </li>
                            <li>
                                <a href="agent-earnings.html" class="d-flex align-items-center">
                                    <i class="isax isax-wallet-add-15 me-2"></i>Earnings
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
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="dropdown mb-4">
                        <a href="#"
                            class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            All Listing
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li>
                                <a href="#" class="dropdown-item rounded-1">Active</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item rounded-1">Inactive</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="Hotels-list">
                        <div class="card border-0">
                            <div
                                class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div>
                                    <h5 class="mb-1">Listings</h5>
                                    <p>No of Listings : {{ $services->count() }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('partner.service.list.create') }}"
                                        class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                            class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($services as $service)
                            <div class="col-xl-4 col-md-6 d-flex">
                                <div class="place-item mb-4 flex-fill">
                                    <div class="place-img">
                                        <a href="{{ route('partner.service.list.edit', $service->id) }}">
                                            <img src="{{ asset('storage/' . ($service->gallery[0] ?? 'services/default.jpg')) }}"
                                                alt="" class="img-fluid service-img" alt="img">
                                        </a>
                                        <div class="edit-delete-item d-flex align-items-center">
                                            <a href="{{ route('partner.service.list.edit', $service->id) }}"
                                                class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                    class="isax isax-edit"></i></a>
                                            <a href="#" class="d-inline-flex align-items-center justify-content-center"
                                                data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                    class="isax isax-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <h5 class="mb-1 text-truncate"><a
                                                href="{{ route('partner.service.list.edit', $service->id) }}">{{ $service->service_title }}
                                            </a></h5>
                                        <p class="d-flex align-items-center mb-2"><i
                                                class="isax isax-location5 me-2"></i>{{ $service->city }},
                                            {{ $service->state }}
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h5 class="text-primary text-nowrap me-2"> ₹{{ $service->discount_price }}
                                                <span class="text-gray-3 text-line">₹{{ $service->base_price }}</span>
                                            </h5>
                                            <div class="d-flex align-items-center lh-1">
                                                <a href="#inactive_list" data-bs-toggle="modal"
                                                    class="d-flex align-items-center text-success"><i
                                                        class="isax isax-info-circle me-1"></i>Active</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

<!-- Inactive Modal -->
<div class="modal fade" id="inactive_list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Inactive Listing</h5>
                    <p class="mb-3">Are you sure you want to mark this listing as inactive and keep it unavailable
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2">No</a>
                        <a href="agent-listings.html" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inactive Modal -->

<!-- Active Modal -->
<div class="modal fade" id="active_list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Active Listing</h5>
                    <p class="mb-3">Are you sure you want to mark this listing as active and keep it available?</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light me-2">No</a>
                        <a href="agent-listings.html" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Active Modal -->

<!-- Delete Modal -->
@foreach($services as $service)
<div class="modal fade" id="delete-list" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="mb-3">Delete Listing</h5>
                    <p class="mb-3">Are you sure you want to delete this listing?</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">No</button>

                        <form action="{{ route('partner.service.list.destroy', $service->id) }}" method="POST"
                            class="m-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Yes, Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--  Delete Modal -->
@endsection
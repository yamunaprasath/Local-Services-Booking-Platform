@extends('index')

@section('title', 'Service List')
@section('breadcrumb', 'Service Listing')

@section('content')
<x-breadcrumb />
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="banner-form">
                    <form action="{{ route('service.list') }}">
                        <div class="fw-medium fs-16 mb-2 text-center text-white">
                            Book Service
                        </div>
                        <div class="d-lg-flex">
                            <div class="d-flex  form-info">
                                <div class="form-item booking-dropdown dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <label for='' class="form-label fs-14 text-default mb-1">Location</label>
                                        <input type="text" class="form-control value-input" value="Dubai">
                                        <p class="fs-12 mb-0">United Arab Emirates</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Search for City, Property name or Location">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <div class="fs-16 fw-medium text-dark dropdown-name">
                                                        USA</div>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item booking-dropdown dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <label class="form-label fs-14 text-default mb-1">Select
                                            Service</label>
                                        <input type="text" class="form-control value-input" value="Ballon Ride">
                                        <p class="fs-12 mb-0">20 Offers Available</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Service">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="py-1">
                                                <a class="dropdown-item" href="#">
                                                    <div class="fs-16 fw-medium text-dark dropdown-name">
                                                        ScubaDiving</div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="dropdown-item" href="#">
                                                    <div class="fs-16 fw-medium text-dark dropdown-name">
                                                        HotAir Ballon</div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="dropdown-item" href="#">
                                                    <div class="fs-16 fw-medium text-dark dropdown-name">
                                                        Family Park Adventure</div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="dropdown-item" href="#">
                                                    <div class="fs-16 fw-medium text-dark dropdown-name">
                                                        Mountain Climbing</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="fs-16 fw-medium text-dark dropdown-name">
                                                        SkyDive</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check
                                        In</label>
                                    <input type="text" class="form-control check-in" value="21-10-2026">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <label class="form-label fs-14 text-default mb-1">Person
                                            required</label>
                                        <div class="home-eight-title text-dark member-count">
                                            2 <span class="fw-normal fs-14">Persons</span>
                                        </div>
                                        <p class="fs-12 mb-0"><span class="adult">1</span>
                                            Male or <span class="room">1</span> female</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                        <div class="mb-3 home-eight-title text-dark">Select
                                            Travelers & Class</div>
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Male</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="0" data-type="room">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Female</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="1" data-type="adult">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn btn-light btn-sm me-2">Cancel</a>
                                            <button type="button"
                                                class="btn btn-primary btn-sm apply-btn">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Activities Search -->

        <div class="row mt-5">
            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4 ">
                <div class="card filter-sidebar mb-4 mb-lg-0">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Filters</h5>
                        <a href="#" class="fs-14 link-primary">Reset</a>
                    </div>
                    <div class="card-body p-0">
                        <form action="#">
                            <div class="accordion accordion-list">
                                <div class="accordion-item border-bottom p-3">
                                    <div class="accordion-header">
                                        <div class="accordion-button p-0" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-hotel" aria-expanded="true"
                                            aria-controls="accordion-hotel" role="button">
                                            <i class="isax isax-candle me-2 text-primary"></i> Service Type
                                        </div>
                                    </div>
                                    <div id="accordion-hotel" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="more-content">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity1"
                                                        type="checkbox" id="activity1" checked>
                                                    <label class="form-check-label ms-2" for="activity1">
                                                        Adventure
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity2"
                                                        type="checkbox" id="activity2" checked>
                                                    <label class="form-check-label ms-2" for="activity2">
                                                        Water Sports
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity3"
                                                        type="checkbox" id="activity3">
                                                    <label class="form-check-label ms-2" for="activity3">
                                                        Nature & Wildlife
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity4"
                                                        type="checkbox" id="activity4">
                                                    <label class="form-check-label ms-2" for="activity4">
                                                        Sightseeing
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity5"
                                                        type="checkbox" id="activity5">
                                                    <label class="form-check-label ms-2" for="activity5">
                                                        Cultural Tours
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity6"
                                                        type="checkbox" id="activity6">
                                                    <label class="form-check-label ms-2" for="activity6">
                                                        Cruises & Boat Tours
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity7"
                                                        type="checkbox" id="activity7">
                                                    <label class="form-check-label ms-2" for="activity7">
                                                        Desert & Safari
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="activity8"
                                                        type="checkbox" id="activity8">
                                                    <label class="form-check-label ms-2" for="activity8">
                                                        Air Activities
                                                    </label>
                                                </div>
                                            </div>
                                            <a href="#" class="more-view fw-medium fs-14">Show More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-bottom p-3">
                                    <div class="accordion-header">
                                        <div class="accordion-button p-0" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-amenity" aria-expanded="true"
                                            aria-controls="accordion-amenity" role="button">
                                            <i class="isax isax-home-2 me-2 text-primary"></i> Duration
                                        </div>
                                    </div>
                                    <div id="accordion-amenity" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="more-content">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="duration1"
                                                        type="checkbox" id="duration1">
                                                    <label class="form-check-label ms-2" for="duration1">
                                                        Less than 2 hours
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="duration2"
                                                        type="checkbox" id="duration2" checked>
                                                    <label class="form-check-label ms-2" for="duration2">
                                                        2 - 4 hours
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="duration3"
                                                        type="checkbox" id="duration3">
                                                    <label class="form-check-label ms-2" for="duration3">
                                                        Half day
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="duration4"
                                                        type="checkbox" id="duration4">
                                                    <label class="form-check-label ms-2" for="duration4">
                                                        Full day
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="duration5"
                                                        type="checkbox" id="duration5">
                                                    <label class="form-check-label ms-2" for="duration5">
                                                        Multi day
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-bottom p-3">
                                    <div class="accordion-header">
                                        <div class="accordion-button p-0" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-guests" aria-expanded="true"
                                            aria-controls="accordion-guests" role="button">
                                            <i class="isax isax-profile-2user me-2 text-primary"></i> Person Count
                                        </div>
                                    </div>
                                    <div id="accordion-guests" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="more-content">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="guest1"
                                                        type="checkbox" id="guest1">
                                                    <label class="form-check-label ms-2" for="guest1">
                                                        1 - 5
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="guest2"
                                                        type="checkbox" id="guest2">
                                                    <label class="form-check-label ms-2" for="guest2">
                                                        5 - 10
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="guest3"
                                                        type="checkbox" id="guest3">
                                                    <label class="form-check-label ms-2" for="guest3">
                                                        10 - 15
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="guest4"
                                                        type="checkbox" id="guest4">
                                                    <label class="form-check-label ms-2" for="guest4">
                                                        15 - 20
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="guest5"
                                                        type="checkbox" id="guest5">
                                                    <label class="form-check-label ms-2" for="guest5">
                                                        20+
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-bottom p-3">
                                    <div class="accordion-header">
                                        <div class="accordion-button p-0" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-brands" aria-expanded="true"
                                            aria-controls="accordion-brands" role="button">
                                            <i class="isax isax-discount-shape me-2 text-primary"></i>Reviews
                                        </div>
                                    </div>
                                    <div id="accordion-brands" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="review1" type="checkbox"
                                                    id="review1">
                                                <label class="form-check-label ms-2" for="review1">
                                                    <span class="rating d-flex align-items-center">
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary"></i>
                                                        <span class="ms-2">5 Star</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="review2" type="checkbox"
                                                    id="review2">
                                                <label class="form-check-label ms-2" for="review2">
                                                    <span class="rating d-flex align-items-center">
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary"></i>
                                                        <span class="ms-2">4 Star</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="review3" type="checkbox"
                                                    id="review3">
                                                <label class="form-check-label ms-2" for="review3">
                                                    <span class="rating d-flex align-items-center">
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary"></i>
                                                        <span class="ms-2">3 Star</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="review4" type="checkbox"
                                                    id="review4">
                                                <label class="form-check-label ms-2" for="review4">
                                                    <span class="rating d-flex align-items-center">
                                                        <i class="fas fa-star filled text-primary me-1"></i>
                                                        <i class="fas fa-star filled text-primary"></i>
                                                        <span class="ms-2">2 Star</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                <input class="form-check-input ms-0 mt-0" name="review5" type="checkbox"
                                                    id="review5">
                                                <label class="form-check-label ms-2" for="review5">
                                                    <span class="rating d-flex align-items-center">
                                                        <i class="fas fa-star filled text-primary"></i>
                                                        <span class="ms-2">1 Star</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <div class="col-xl-9 col-lg-8">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <h6 class="mb-3">{{ $services->count() }} Services <span class="fw-normal">Found on Your
                            Search Outof</span> {{ $services->total() }} Services</h6>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="dropdown mb-3">
                            <a href="#" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                            </a>
                            <div class="dropdown-menu dropdown-sm">
                                <form action="https://dreamstour.dreamstechnologies.com/html/activity-grid.html">
                                    <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                        <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                            id="recommend1" checked>
                                        <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                        <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                            id="recommend2">
                                        <label class="form-check-label ms-2" for="recommend2">Price: low to
                                            high</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                        <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                            id="recommend3">
                                        <label class="form-check-label ms-2" for="recommend3">Price: high to
                                            low</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                        <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                            id="recommend4">
                                        <label class="form-check-label ms-2" for="recommend4">Newest</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                        <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                            id="recommend5">
                                        <label class="form-check-label ms-2" for="recommend5">Ratings</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-0">
                                        <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                            id="recommend6">
                                        <label class="form-check-label ms-2" for="recommend6">Reviews</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                        <a href="#" class="btn btn-light btn-sm me-2">Reset</a>
                                        <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if(!Auth::check())
                <div class="bg-info br-10 p-3 pb-2 mb-4">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <p class="fs-14 fw-medium mb-2 d-inline-flex align-items-center"><i
                                class="isax isax-info-circle me-2"></i>Save an average of 15% on thousands of
                            activities when you're signed in</p>
                        <a href="{{ route('login') }}" class="btn btn-white btn-sm mb-2">Sign In</a>
                    </div>
                </div>
                @endif
                <div class="row">
                    <!-- Activity Grid -->
                    @foreach($services as $service)
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <a href="{{ route('partner.service.list.edit', $service->id) }}">
                                    <img src="{{ asset('storage/' . ($service->gallery[0] ?? 'services/default.jpg')) }}"
                                        class="img-fluid service-img" alt="img">
                                </a>
                                <div class="fav-item">
                                    <button class="fav-icon selected border-0">
                                        <i class="isax isax-heart5"></i>
                                    </button>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content activity-content">
                                <div class="d-flex align-items-center badge-right position-absolute">
                                    <span class="rating fs-12 me-1">
                                        <i class="fas fa-star filled"></i>
                                    </span>
                                    <p class="fs-14 text-gray-2">
                                        <span class="fs-14 fw-medium text-gray-9">4.9</span> (672 reviews)
                                    </p>
                                </div>
                                <h5 class="mt-3 mb-1 text-truncate"><a
                                        href="{{ route('partner.service.list.edit', $service->id) }}">{{ $service->service_title }}</a>
                                </h5>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="d-flex align-items-center fs-14 mb-0">
                                        <i class="isax isax-location5 me-1"></i> {{ $service->city }},
                                        {{ $service->state }}
                                    </p>
                                    <p class="d-flex align-items-center fs-14 mb-0">
                                        <i class="isax isax-clock5 me-1"></i> 4 hrs
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                    <p class="text-primary fw-medium text-nowrap d-flex align-items-center gap-1"><span
                                            class="fs-14 fw-normal text-gray-6">Starts From</span> ₹{{
                                        $service->discount_price }} <span class="text-gray-3 text-line">₹{{
                                            $service->base_price }}</span></p>
                                    <a href="#" class="d-flex align-items-center overflow-hidden">
                                        <span class="avatar avatar-md flex-shrink-0">
                                            <img src=" {{ asset('/images/users/user-08.jpg') }}" class="rounded-circle"
                                                alt="img">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $services->links('pagination.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
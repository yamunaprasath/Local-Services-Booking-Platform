@extends('index')

@section('title', 'Home Page')

@section('content')
<section class="hero-sec-eight">
    <div class="container">
        <h1 class="animate-text">Service</h1>
        <div class="hero-content">
            <div class="row align-items-center">
                <div class="col-md-12 mx-auto">
                    <div class="banner-form card mb-0 wow fadeInUp" data-wow-delay="1.5">
                        <div class="card-header">
                            <ul class="nav">
                                <li>
                                    <p class="nav-link active" data-bs-toggle="tab" data-bs-target="#Service">
                                        <i class="isax isax-calendar5 me-2"></i>Service
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="Service">
                                        <form action="{{ route('service.list') }}">
                                            <div class="fw-medium fs-16 mb-2 text-center text-white">
                                                Book Service
                                            </div>
                                            <div class="d-lg-flex">
                                                <div class="d-flex  form-info">
                                                    <div class="form-item booking-dropdown dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label for=''
                                                                class="form-label fs-14 text-default mb-1">Location</label>
                                                            <input type="text" class="form-control value-input"
                                                                value="Dubai">
                                                            <p class="fs-12 mb-0">United Arab Emirates</p>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-md p-0">
                                                            <div class="input-search p-3 border-bottom">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search for City, Property name or Location">
                                                                    <span
                                                                        class="input-group-text px-2 border-start-0"><i
                                                                            class="isax isax-search-normal"></i></span>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            USA</div>
                                                                        <p>2000 Properties</p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-item booking-dropdown dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label class="form-label fs-14 text-default mb-1">Select
                                                                Service</label>
                                                            <input type="text" class="form-control value-input"
                                                                value="Ballon Ride">
                                                            <p class="fs-12 mb-0">20 Offers Available</p>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-md p-0">
                                                            <div class="input-search p-3 border-bottom">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search Service">
                                                                    <span
                                                                        class="input-group-text px-2 border-start-0"><i
                                                                            class="isax isax-search-normal"></i></span>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="py-1">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            ScubaDiving</div>
                                                                    </a>
                                                                </li>
                                                                <li class="py-1">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            HotAir Ballon</div>
                                                                    </a>
                                                                </li>
                                                                <li class="py-1">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Family Park Adventure</div>
                                                                    </a>
                                                                </li>
                                                                <li class="py-1">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Mountain Climbing</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            SkyDive</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="form-label fs-14 text-default mb-1">
                                                            Service require Dates</label>
                                                        <input type="text" class="form-control available-date" value="">
                                                        <p class="fs-12 mb-0">Monday</p>
                                                    </div>
                                                    <div class="form-item dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
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
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Male</label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="0"
                                                                                        data-type="room">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Female</label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="adult">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
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
                                                <button type="submit"
                                                    class="btn btn-primary search-btn rounded">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="Visa">
                                        <form action="#">
                                            <div class="fw-medium fs-16 mb-2 text-center text-white">Check
                                                Eligibility</div>
                                            <div class="d-lg-flex">
                                                <div class="d-flex  form-info">
                                                    <div class="form-item booking-dropdown dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Country</label>
                                                            <input type="text" class="form-control value-input"
                                                                value="Select">
                                                        </div>
                                                        <div class="dropdown-menu dropdown-md p-0">
                                                            <div class="input-search p-3 border-bottom">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search for City, Property name or Location">
                                                                    <span
                                                                        class="input-group-text px-2 border-start-0"><i
                                                                            class="isax isax-search-normal"></i></span>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            USA</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Japan</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Singapore</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Russia</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Germany</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-item booking-dropdown dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label class="form-label fs-14 text-default mb-1">Visa
                                                                Type</label>
                                                            <input type="text" class="form-control value-input"
                                                                value="Select">
                                                        </div>
                                                        <div class="dropdown-menu dropdown-md p-0">
                                                            <div class="input-search p-3 border-bottom">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search Visa Type">
                                                                    <span
                                                                        class="input-group-text px-2 border-start-0"><i
                                                                            class="isax isax-search-normal"></i></span>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Tourist Visa </div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Business Visa</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Student Visa</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Transit Visa</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            GroupTravel Visa</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-item booking-dropdown dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Citizenship</label>
                                                            <input type="text" class="form-control value-input"
                                                                value="Select">
                                                        </div>
                                                        <div class="dropdown-menu dropdown-md p-0">
                                                            <div class="input-search p-3 border-bottom">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search">
                                                                    <span
                                                                        class="input-group-text px-2 border-start-0"><i
                                                                            class="isax isax-search-normal"></i></span>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            USA</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Japan</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Singapore</div>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Russia</div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark  dropdown-name">
                                                                            Germany</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-item dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Travelers</label>
                                                            <div class="home-eight-title text-dark member-count">
                                                                4 <span class="fw-normal fs-14">Persons</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                            <div class="mb-3 home-eight-title text-dark">Select
                                                                Travelers & Class</div>
                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Male</label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="room">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Female</label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="adult">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Children
                                                                                <span class="text-default fw-normal">(
                                                                                    2-12 Yrs )</span></label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="children">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Infants
                                                                                <span class="text-default fw-normal">(
                                                                                    0-12 Yrs )</span></label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="infant">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                <div class="fs-16 fw-medium mb-2 text-dark">
                                                                    Travellers</div>
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room9" checked>
                                                                        <label class="form-check-label" for="room9">
                                                                            Single
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room10">
                                                                        <label class="form-check-label" for="room10">
                                                                            Double
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room11">
                                                                        <label class="form-check-label" for="room11">
                                                                            Delux
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room12">
                                                                        <label class="form-check-label" for="room12">
                                                                            Suite
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                <div class="fs-16 fw-medium mb-2 text-dark">
                                                                    Property
                                                                    Type</div>
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property9" checked>
                                                                        <label class="form-check-label" for="property9">
                                                                            Villa
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property10">
                                                                        <label class="form-check-label"
                                                                            for="property10">
                                                                            Condo
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property11">
                                                                        <label class="form-check-label"
                                                                            for="property11">
                                                                            Cabin
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property12">
                                                                        <label class="form-check-label"
                                                                            for="property12">
                                                                            Apartments
                                                                        </label>
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
                                                <button type="submit"
                                                    class="btn btn-primary search-btn rounded">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="Guide">
                                        <form action="#">
                                            <div class="d-lg-flex">
                                                <div class="d-flex  form-info">
                                                    <div class="form-item booking-dropdown dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Destination</label>
                                                            <input type="text" class="form-control value-input"
                                                                value="Newyork">
                                                            <p class="fs-12 mb-0">USA</p>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-md p-0">
                                                            <div class="input-search p-3 border-bottom">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Search for City, Property name or Location">
                                                                    <span
                                                                        class="input-group-text px-2 border-start-0"><i
                                                                            class="isax isax-search-normal"></i></span>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            USA</div>
                                                                        <p>2000 Properties</p>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Japan</div>
                                                                        <p>3000 Properties</p>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Singapore</div>
                                                                        <p>8000 Properties</p>
                                                                    </a>
                                                                </li>
                                                                <li class="border-bottom">
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Russia</div>
                                                                        <p>8000 Properties</p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <div
                                                                            class="fs-16 fw-medium text-dark dropdown-name">
                                                                            Germany</div>
                                                                        <p>2000 Properties</p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="form-label fs-14 text-default mb-1">Start
                                                            Date</label>
                                                        <input type="text" class="form-control check-in"
                                                            value="21-10-2026">
                                                        <p class="fs-12 mb-0">Monday</p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="form-label fs-14 text-default mb-1">End
                                                            Date</label>
                                                        <input type="text" class="form-control check-out"
                                                            value="21-10-2026">
                                                        <p class="fs-12 mb-0">Monday</p>
                                                    </div>
                                                    <div class="form-item dropdown">
                                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false" role="menu">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Guests</label>
                                                            <div class="home-eight-title text-dark member-count">
                                                                4 <span class="fw-normal fs-14">Persons</span>
                                                            </div>
                                                            <p class="fs-12 mb-0"><span class="adult">3</span>
                                                                Adult</p>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                            <div class="mb-3 home-eight-title text-dark">Select
                                                                Travelers & Class</div>
                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Male</label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Female</label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="adult">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Children
                                                                                <span class="text-default fw-normal">(
                                                                                    2-12 Yrs )</span></label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="children">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div
                                                                            class="mb-3 d-flex align-items-center justify-content-between">
                                                                            <label
                                                                                class="form-label text-gray-9 mb-2">Infants
                                                                                <span class="text-default fw-normal">(
                                                                                    0-12 Yrs )</span></label>
                                                                            <div class="custom-increment">
                                                                                <div class="input-group">
                                                                                    <span
                                                                                        class="input-group-btn float-start">
                                                                                        <button type="button"
                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                            data-type="minus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-minus"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quantity"
                                                                                        class=" input-number" value="1"
                                                                                        data-type="infant">
                                                                                    <span
                                                                                        class="input-group-btn float-end">
                                                                                        <button type="button"
                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                            data-type="plus"
                                                                                            data-field="">
                                                                                            <span><i
                                                                                                    class="isax isax-add"></i></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                <div class="fs-16 fw-medium mb-2 text-dark">
                                                                    Travellers</div>
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room1" checked>
                                                                        <label class="form-check-label" for="room1">
                                                                            Single
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room2">
                                                                        <label class="form-check-label" for="room2">
                                                                            Double
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room3">
                                                                        <label class="form-check-label" for="room3">
                                                                            Delux
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="room" id="room4">
                                                                        <label class="form-check-label" for="room4">
                                                                            Suite
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                <div class="fs-16 fw-medium mb-2 text-dark">
                                                                    Property
                                                                    Type</div>
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property1" checked>
                                                                        <label class="form-check-label" for="property1">
                                                                            Villa
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property2">
                                                                        <label class="form-check-label" for="property2">
                                                                            Condo
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-3 mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property3">
                                                                        <label class="form-check-label" for="property3">
                                                                            Cabin
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="property" id="property4">
                                                                        <label class="form-check-label" for="property4">
                                                                            Apartments
                                                                        </label>
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
                                                <button type="submit"
                                                    class="btn btn-primary search-btn rounded">Search</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section categories-section-ten">
    <div class="container">
        <div class="section-header-ten wow fadeInUp" data-wow-delay="1.5">
            <h2 class="section-title">Featured Tour <span>Categories</span> </h2>
            <a href="#" class="btn btn-primary">View All Categories <i class="isax isax-arrow-right-3"></i> </a>
        </div>

        <!-- start row -->
        <div class="row row-cols-lg-5 row-cols-md-2 row-cols-sm-2 row-cols-1 g-4 justify-content-center">
            <div class="col">
                <!-- Item 1 -->
                <div class="categories-item-ten wow fadeInUp" data-wow-delay="1" data-wow-duration="1s">
                    <div class="categories-overlay">
                        <img src="{{ asset('/images/tours/categories-img-1.jpg') }}" alt="categories-img"
                            class="img-fluid img-1">
                    </div>
                    <div class="categories-content">
                        <h3 class="custom-title">Ecotourism</h3>
                        <p class="mb-0">25 Guides</p>
                    </div>
                    <a href="#" class="arrow-icon"><i class="isax isax-arrow-right-1"></i></a>
                    <img src="{{ asset('/images/icons/categories-icon-1.svg') }}" alt="categories"
                        class="img-fluid shape-1">
                </div>
            </div> <!-- end col -->
            <div class="col">
                <!-- Item 1 -->
                <div class="categories-item-ten wow fadeInUp" data-wow-delay="1.5" data-wow-duration="1.5s">
                    <div class="categories-overlay">
                        <img src="{{ asset('/images/tours/categories-img-2.jpg') }}" alt="categories-img"
                            class="img-fluid img-1">
                    </div>
                    <div class="categories-content">
                        <h3 class="custom-title">Adventure Tour</h3>
                        <p class="mb-0">47 Guides</p>
                    </div>
                    <a href="#" class="arrow-icon"><i class="isax isax-arrow-right-1"></i></a>
                    <img src="{{ asset('/images/icons/categories-icon-1.svg') }}" alt="categories"
                        class="img-fluid shape-1">
                </div>
            </div> <!-- end col -->
            <div class="col">
                <!-- Item 1 -->
                <div class="categories-item-ten wow fadeInUp" data-wow-delay="2" data-wow-duration="2s">
                    <div class="categories-overlay">
                        <img src="{{ asset('/images/tours/categories-img-3.jpg') }}" alt="categories-img"
                            class="img-fluid img-1">
                    </div>
                    <div class="categories-content">
                        <h3 class="custom-title">Group Tours</h3>
                        <p class="mb-0">38 Guides</p>
                    </div>
                    <a href="#" class="arrow-icon"><i class="isax isax-arrow-right-1"></i></a>
                    <img src="{{ asset('/images/icons/categories-icon-1.svg') }}" alt="categories"
                        class="img-fluid shape-1">
                </div>
            </div> <!-- end col -->
            <div class="col">
                <!-- Item 1 -->
                <div class="categories-item-ten wow fadeInUp" data-wow-delay="2.5" data-wow-duration="2.5s">
                    <div class="categories-overlay">
                        <img src="{{ asset('/images/tours/categories-img-4.jpg') }}" alt="categories-img"
                            class="img-fluid img-1">
                    </div>
                    <div class="categories-content">
                        <h3 class="custom-title">Beach Tours</h3>
                        <p class="mb-0">54 Guides</p>
                    </div>
                    <a href="#" class="arrow-icon"><i class="isax isax-arrow-right-1"></i></a>
                    <img src="{{ asset('/images/icons/categories-icon-1.svg') }}" alt="categories"
                        class="img-fluid shape-1">
                </div>
            </div> <!-- end col -->
            <div class="col">
                <!-- Item 1 -->
                <div class="categories-item-ten wow fadeInUp" data-wow-delay="3" data-wow-duration="3s">
                    <div class="categories-overlay">
                        <img src="{{ asset('/images/tours/categories-img-5.jpg') }}" alt="categories-img"
                            class="img-fluid img-1">
                    </div>
                    <div class="categories-content">
                        <h3 class="custom-title">Honey Moon</h3>
                        <p class="mb-0">22 Guides</p>
                    </div>
                    <a href="#" class="arrow-icon"><i class="isax isax-arrow-right-1"></i></a>
                    <img src="{{ asset('/images/icons/categories-icon-1.svg') }}" alt="categories"
                        class="img-fluid shape-1">
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div>
</section>
@endsection
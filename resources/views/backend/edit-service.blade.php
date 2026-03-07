@extends('index')

@section('title', 'Dashboard')
@section('breadcrumb', 'Service Listing')
<x-breadcrumb />
@section('content')
<!-- Page Wrapper -->
<div class="content">
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="add_service" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 theiaStickySidebar">
                        <div class="card border-0 mb-4 mb-lg-0">
                            <div class="card-body">
                                <div>
                                    <h5 class="mb-3">Services</h5>
                                    <ul class="add-tab-list">
                                        <li class="py-1"><a href="#basic_info" class="active">Basic Info</a></li>
                                        <li class="py-1"><a href="#price">Price Details</a></li>
                                        <li class="py-1"><a href="#available_days">Available Days</a></li>
                                        <li class="py-1"><a href="#location">Locations</a></li>
                                        <li class="py-1"><a href="#highlights">Highlights</a></li>
                                        <li class="py-1"><a href="#available_services">Available Servies</a></li>
                                        <li class="py-1"><a href="#faq">FAQ</a></li>
                                        <li class="py-1"><a href="#gallery">Gallery</a></li>
                                        <li class="py-1"><a href="#service_description">Description</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <x-message />
                        <form action="{{ route('partner.service.list.update', $service->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card shadow-none" id="basic_info">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Basic Details</h5>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="hoter_name" class="form-label">Provider /Sevice
                                                    Title</label>
                                                <input type="text" class="form-control" name="service_title"
                                                    value="{{ $service->service_title }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Category</label>

                                                <select class="form-select select" name="service_category">
                                                    <option value="" disabled>Select</option>
                                                    <option value="Cleaning Services" {{ $service->service_category ==
                                                        'Cleaning Services' ? 'selected' : '' }}>
                                                        Cleaning Services
                                                    </option>
                                                    <option value="Repair Services" {{ $service->service_category ==
                                                        'Repair Services' ? 'selected' : '' }}>
                                                        Repair Services
                                                    </option>
                                                    <option value="Beauty Services" {{ $service->service_category ==
                                                        'Beauty Services' ? 'selected' : '' }}>
                                                        Beauty Services
                                                    </option>
                                                    <option value="Home Services" {{ $service->service_category == 'Home
                                                        Services' ? 'selected' : '' }}>
                                                        Home Services
                                                    </option>
                                                    <option value="Tutor Services" {{ $service->service_category ==
                                                        'Tutor Services' ? 'selected' : '' }}>
                                                        Tutor Services
                                                    </option>
                                                    <option value="Health" {{ $service->service_category == 'Health' ?
                                                        'selected' : '' }}>
                                                        Health
                                                    </option>
                                                    <option value="Others" {{ $service->service_category == 'Others' ?
                                                        'selected' : '' }}>
                                                        Others
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="price">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Price Details</h5>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Price Type</label>
                                                <select class="form-select select" name="price_type">
                                                    <option value="" disabled>Select</option>
                                                    <option value="Fixed" {{ $service->price_type == 'Fixed' ?
                                                        'selected' : '' }}>
                                                        Fixed
                                                    </option>
                                                    <option value="Hourly" {{ $service->price_type == 'Hourly' ?
                                                        'selected' : '' }}>
                                                        Hourly
                                                    </option>
                                                    <option value="Custom" {{ $service->price_type == 'Custom' ?
                                                        'selected' : '' }}>
                                                        Custom
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label for="Base Price" class="form-label">Base Price(₹)</label>
                                                <input type="number" class="form-control" name="base_price"
                                                    value="{{ $service->base_price }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label for="Discount Price" class="form-label">Discount Price(₹)</label>
                                                <input type="number" class="form-control"
                                                    value="{{ $service->discount_price }}" name="discount_price">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 d-flex align-items-center">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="tax"
                                                    value="{{ $service->tax }}">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Tax
                                                    Included</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="available_days">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Available Days</h5>
                                    </div>
                                </div>
                                @php
                                $days = $service->available_days ?? [];
                                @endphp
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox"
                                                        id="sunday" value="Sunday" name="available_days[]" {{
                                                        in_array('Sunday', $days) ? 'checked' : '' }}>
                                                    <label class="form-check-label ms-2" for="sunday">
                                                        Sunday
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Monday', $days) ? 'checked' : '' }} id="monday"
                                                        value="monday" name="available_days[]">
                                                    <label class="form-check-label ms-2" for="monday">
                                                        Monday
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Tuesday', $days) ? 'checked' : '' }} id="tuesday"
                                                        value="tuesday" name="available_days[]">
                                                    <label class="form-check-label ms-2" for="tuesday">
                                                        Tuesday
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Wednesday', $days) ? 'checked' : '' }} id="wednesday"
                                                        value="wednesday" name="available_days[]">
                                                    <label class="form-check-label ms-2" for="wednesday">
                                                        Wednesday
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                    in_array('Thursday', $days) ? 'checked' : '' }} id="thursday"
                                                    value="thursday" name="available_days[]">
                                                <label class="form-check-label ms-2" for="thursday">
                                                    Thursday
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                    in_array('Friday', $days) ? 'checked' : '' }} id="friday"
                                                    value="friday" name="available_days[]">
                                                <label class="form-check-label ms-2" for="friday">
                                                    Friday
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Saturday', $days) ? 'checked' : '' }} id="saturday"
                                                        value="saturday" name="available_days[]">
                                                    <label class="form-check-label ms-2" for="saturday">
                                                        Saturday
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="location">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Location</h5>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="mb-3">
                                                <label for="Location_type" class="form-label">Location Type</label>
                                                <select class="form-select select" name="location_type">
                                                    <option disabled>Select</option>

                                                    <option value="On Site" {{ $service->location_type == 'On Site' ?
                                                        'selected' : '' }}>
                                                        On-site
                                                    </option>

                                                    <option value="Online" {{ $service->location_type == 'Online' ?
                                                        'selected' : '' }}>
                                                        Online
                                                    </option>

                                                    <option value="Both" {{ $service->location_type == 'Both' ?
                                                        'selected' : '' }}>
                                                        Both
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" value="{{ $service->city }}"
                                                    name="city">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">State</label>
                                                <input type="text" class="form-control" value="{{ $service->state }}"
                                                    name="state">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Zip Code</label>
                                                <input type="number" class="form-control"
                                                    value="{{ $service->zip_code }}" name="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" value="{{ $service->address }}"
                                                    name="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="highlights">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Highlights</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row add-highlight-info">
                                        <div class="col-md-12">
                                            @foreach($service->highlight as $highlight)
                                            <label class="form-label">Highlights</label>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="highlight[]"
                                                    value="{{ $highlight }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm add-highlight"><i
                                                class="isax isax-add-circle me-1"></i>Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="available_services">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fs-18">Services</h5>
                                    </div>
                                </div>
                                @php
                                $selectedServices = $service->service ?? [];
                                @endphp
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('24-Hour Room Service', $selectedServices) ? 'checked'
                                                        : '' }} id="service-1" name="service[]"
                                                        value="24-Hour Room Service">
                                                    <label class="form-check-label ms-2" for="service-1">
                                                        24-Hour Room Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-2" name="service[]"
                                                        value="In-Room Dining">
                                                    <label class="form-check-label ms-2" for="service-2">
                                                        In-Room Dining
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-3" name="service[]"
                                                        value="Concierge Services">
                                                    <label class="form-check-label ms-2" for="service-3">
                                                        Concierge Services
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-4" name="service[]"
                                                        value="Daily Housekeeping">
                                                    <label class="form-check-label ms-2" for="service-4">
                                                        Daily Housekeeping
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-5" name="service[]"
                                                        value="Front Desk Services">
                                                    <label class="form-check-label ms-2" for="service-5">
                                                        Front Desk Services
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-6" name="service[]"
                                                        value="On-Site Restaurants">
                                                    <label class="form-check-label ms-2" for="service-6">
                                                        On-Site Restaurants
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-7" name="service[]"
                                                        value="Check-In/Check-Out Assistance">
                                                    <label class="form-check-label ms-2" for="service-7">
                                                        Check-In/Check-Out Assistance
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-8" name="service[]"
                                                        value="Free luggage deposit">
                                                    <label class="form-check-label ms-2" for="service-8">
                                                        Free luggage deposit
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Laundry and Ironing Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-9" name="service[]"
                                                        value="Laundry and Ironing Service">
                                                    <label class="form-check-label ms-2" for="service-9">
                                                        Laundry and Ironing Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Dry Cleaning Service', $selectedServices) ? 'checked'
                                                        : '' }} id="service-10" name="service[]"
                                                        value="Dry Cleaning Service">
                                                    <label class="form-check-label ms-2" for="service-10">
                                                        Dry Cleaning Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Hair and Beauty Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-11" name="service[]"
                                                        value="Hair and Beauty Service">
                                                    <label class="form-check-label ms-2" for="service-11">
                                                        Hair and Beauty Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('In-Room Spa Treatments', $selectedServices)
                                                        ? 'checked' : '' }} id="service-12" name="service[]"
                                                        value="In-Room Spa Treatments">
                                                    <label class="form-check-label ms-2" for="service-12">
                                                        In-Room Spa Treatments
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Valet Parking', $selectedServices) ? 'checked' : '' }}
                                                        id="service-13" name="service[]" value="Valet Parking">
                                                    <label class="form-check-label ms-2" for="service-13">
                                                        Valet Parking
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Babysitting', $selectedServices) ? 'checked' : '' }}
                                                        id="service-14" name="service[]" value="Babysitting">
                                                    <label class="form-check-label ms-2" for="service-14">
                                                        Babysitting
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Dry Cleaning Service', $selectedServices) ? 'checked'
                                                        : '' }} id="service-15" name="service[]"
                                                        value="Dry Cleaning Service">
                                                    <label class="form-check-label ms-2" for="service-15">
                                                        Dry Cleaning Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Wake-Up Call Service', $selectedServices) ? 'checked'
                                                        : '' }} id="service-16" name="service[]"
                                                        value="Wake-Up Call Service">
                                                    <label class="form-check-label ms-2" for="service-16">
                                                        Wake-Up Call Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Translator Service', $selectedServices) ? 'checked'
                                                        : '' }} id="service-17" name="service[]"
                                                        value="Translator Service">
                                                    <label class="form-check-label ms-2" for="service-17">
                                                        Translator Service
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" type="checkbox" {{
                                                        in_array('Currency Exchange Service', $selectedServices)
                                                        ? 'checked' : '' }} id="service-18" name="service[]"
                                                        value="Currency Exchange Service">
                                                    <label class="form-check-label ms-2" for="service-18">
                                                        Currency Exchange Service
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 pt-4">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Other Services</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $service->other_service }}"
                                                    placeholder="service1, service2, service3" name="other_service">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="faq">
                                <div class="card-header">
                                    <h5 class="fs-18">FAQ</h5>
                                </div>
                                <div class="card-body">
                                    <div id="faq-list">
                                        @foreach($service->faq as $faq)
                                        <div class="row faq-item mb-3 align-items-center">
                                            <div class="col-md-5">
                                                <input type="text" name="faq_question[]" class="form-control"
                                                    placeholder="Question *" value="{{ $faq['question'] }}" required>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" name="faq_answer[]" class="form-control"
                                                    placeholder="Answer *" value="{{ $faq['answer'] }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button"
                                                    class="trash-icon border-0 d-flex align-items-center justify-content-center remove-faq">
                                                    <i class="isax isax-trash text-danger"></i>
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div>
                                            <button type="button" class="btn btn-primary btn-sm" id="add-faq">
                                                <i class="isax isax-add-circle me-1"></i>Add FAQ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="gallery">
                                <div class="card-header">
                                    <h5 class="fs-18">Service Gallery</h5>
                                </div>
                                <div class="card-body">
                                    <div
                                        class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mb-2">
                                        <span class="upload-img d-block mb-2"><i
                                                class="isax isax-document-upload fs-24"></i></span>
                                        <h6 class="mb-1">Upload Gallery Images</h6>
                                        <p class="mb-0">Upload Feature Image First, Image size should below 5MB</p>
                                        <input type="file" name="gallery[]" multiple accept="image/*" id="galleryInput">
                                    </div>

                                    {{-- Hidden inputs to track existing images --}}
                                    <div id="existingImagesInputs">
                                        @foreach($service->gallery as $img)
                                        <input type="hidden" name="existing_gallery[]" value="{{ $img }}">
                                        @endforeach
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap" id="galleryPreview">
                                        @foreach($service->gallery as $img)
                                        <div class="gallery-upload-img me-2" data-existing="{{ $img }}">
                                            <img src="{{ asset('storage/'.$img) }}" alt="Img">
                                            <span
                                                class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash">
                                                <i class="isax isax-trash"></i>
                                            </span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none" id="service_description">
                                <div class="card-header">
                                    <h5 class="fs-18">Description</h5>
                                </div>
                                <div class="card-body text-editor">
                                    <div class="snow-editor"></div>
                                    <input type="hidden" name="description" id="description"
                                        value="{{ $service->description }}">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-light me-2">Reset</button>
                                <button type="submit" class="btn btn-primary">Update Service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

<!-- Filter Modal -->
<div class="modal fade" id="add_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Filter Modal -->

<!-- Faq Modal -->
<div class="modal fade" id="edit_faq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit FAQ</h5>
                <button data-bs-dismiss="modal" aria-label="close" class="btn-close"></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="question" class="form-label">Question <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="Does offer free cancellation for a full refund?">
                    </div>
                    <div>
                        <label for="answer" class="form-label">Answer <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" value="yes">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save FAQ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Faq Modal -->
@endsection
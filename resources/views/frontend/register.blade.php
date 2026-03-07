@extends('index')

@section('title', 'Login')
@section('content')
<div class="main-wrapper authentication-wrapper">
    <div class="container-fuild">
        <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
            <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                    <div class="p-4 text-center">
                        <a href="{{ route('home') }}" class="black-logo-responsive">
                            <img src="{{ asset('/images/logo.png') }}" alt="logo" class="img-fluid" width="200">
                        </a>
                    </div>
                    <div class="card authentication-card">
                        <div class="card-header">
                            <div class="text-center">
                                <h5 class="mb-1">Sign Up</h5>
                                <p>Create ServiceHub Account</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-user"></i>
                                        </span>
                                        <input type="text" name="name" id="name"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            placeholder="Enter Full Name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">+91</span>
                                        <input type="text" name="phone" id="phone"
                                            class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                            placeholder="Enter Phone" value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-message"></i>
                                        </span>
                                        <input type="email" name="email" id="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            placeholder="Enter Email" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-lock"></i>
                                        </span>
                                        <input type="password" name="password" id="password"
                                            class="form-control form-control-lg pass-input @error('password') is-invalid @enderror"
                                            placeholder="Enter Password">
                                        <span class="input-icon-addon toggle-password">
                                            <i class="isax isax-eye-slash"></i>
                                        </span>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-lock"></i>
                                        </span>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control form-control-lg pass-input @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Enter Password">
                                        <span class="input-icon-addon toggle-password">
                                            <i class="isax isax-eye-slash"></i>
                                        </span>
                                    </div>
                                    @error('password_confirmation')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3 mb-3">
                                    <div class="d-flex">
                                        <div class="form-check d-flex align-items-center mb-2">
                                            <input class="form-check-input mt-0" type="checkbox" name="agree" value="1"
                                                id="agree" required>
                                            <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                                I agree with the <a href="#" class="link-primary fw-medium">Terms Of
                                                    Service.</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit"
                                        class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">
                                        Register <i class="isax isax-arrow-right-3 ms-2"></i>
                                    </button>
                                </div>

                                <div class="login-or mb-3">
                                    <span class="span-or">Or</span>
                                </div>

                                <div class="d-flex align-items-center mb-3 d-none">
                                    <a href="#"
                                        class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-2">
                                        <img src="{{ asset('images/icons/google-icon.svg') }}" class="me-2"
                                            alt="Img">Google
                                    </a>
                                    <a href="#"
                                        class="btn btn-light flex-fill d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/icons/fb-icon.svg') }}" class="me-2"
                                            alt="Img">Facebook
                                    </a>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <p class="fs-14">Already have an account?
                                        <a href="{{ route('login') }}" class="link-primary fw-medium">Sign In</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Register -->

    </div>
    <div class="coprright-footer">
        <p class="fs-14">Copyright © {{ date('Y') }} <a href="#" class="fw-medium">Yamuna
                Prasath</a>
        </p>
    </div>
</div>
@endsection
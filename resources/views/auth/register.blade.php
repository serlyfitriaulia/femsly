@extends('layouts.app')

@section('content')
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        filter: brightness(0.8);">
        <h1 class="text-white fw-bold">Welcome to Registration</h1>
    </div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5 text-primary">{{ __('Create Your Account') }}</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- First and Last Name -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                    <label class="form-label" for="name">{{ __('First Name') }}</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                                    <label class="form-label" for="last_name">{{ __('Last Name') }}</label>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            <label class="form-label" for="password">{{ __('Password') }}</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="newsletter" checked>
                            <label class="form-check-label" for="newsletter">
                                {{ __('Subscribe to our newsletter') }}
                            </label>
                        </div>

                        <!-- Submit button -->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-sm">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <!-- Register buttons -->
                        <div class="text-center mt-4">
                            <p>{{ __('or sign up with:') }}</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f text-primary"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google text-danger"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter text-info"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github text-dark"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

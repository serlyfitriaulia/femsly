@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <!-- Left Side: Form -->
      <div class="col-sm-6 text-black">
        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">FEMSLY</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form method="POST" action="{{ route('login') }}" style="width: 23rem;">
            @csrf
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <!-- Email Field -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
              <label class="form-label" for="form2Example18">Email address</label>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <!-- Password Field -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
              <label class="form-label" for="form2Example28">Password</label>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <!-- Remember Me and Forgot Password -->
            <div class="pt-1 mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
              </div>
            </div>

            <div class="pt-1 mb-4">
              <button type="submit" class="btn btn-info btn-lg btn-block">Login</button>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a></p>
            @endif

            <!-- Register Link -->
            <p>Don't have an account? <a href="{{ route('register') }}" class="link-info">Register here</a></p>
          </form>
        </div>
      </div>

      <!-- Right Side: Background Image -->
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="/img/femsly.jpeg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
@endsection

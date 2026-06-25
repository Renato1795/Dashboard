@extends('layouts.auth')

@section('body-class', 'register-page')

@section('content')
<div class="register-box">
      <div class="register-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
      </div>
      <!-- /.register-logo -->
      <div class="card">
        <div class="card-body register-card-body">
          <p class="register-box-msg">Register a new membership</p>

          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-group mb-3">
            <div class="input-group-text">
                <span class="bi bi-person"></span>
            </div>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}" />
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror

            </div>
            <div class="input-group mb-3">
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" />
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror


            </div>
            <div class="input-group mb-3">
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror

            </div>
            <div class="input-group mb-3">
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
                <input type="password" name="password_confirmation" class="form-control " placeholder="Password Confirmation" />

            </div>
            <!--begin::Row-->
            <div class="row">
              {{-- <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div> --}}
              <!-- /.col -->
              {{-- <div class="col-4"> --}}
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              {{-- </div> --}}
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>

          {{-- <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p>- OR -</p>
            <a href="#" class="btn btn-primary">
              <i class="bi bi-facebook me-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-danger">
              <i class="bi bi-google me-2"></i> Sign in using Google+
            </a>
          </div> --}}
          <!-- /.social-auth-links -->

          <p class="mb-0 text-center">
            <a href="{{ route('login') }}" class="text-center"> Back to login </a>
          </p>
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>
@endsection

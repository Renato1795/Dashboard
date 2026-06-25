@extends('layouts.auth')

@section('body-class', 'login-page')
@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a href="{{ route('login') }}" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"><b>Admin</b>LTE</h1>
                </a>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Reset your password</p>

                @session('status')
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endsession
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="input-group mb-1">
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                        <div class="form-floating">
                            <input id="loginEmail" type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" placeholder="Email" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="loginEmail">Email</label>
                        </div>

                    </div>
                    {{-- <div class="input-group mb-1">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        <div class="form-floating">
                            <input id="loginPassword" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="loginPassword">Password</label>
                        </div>

                    </div> --}}
                    <!--begin::Row-->
                    <div class="row">
                        {{-- <div class="col-8 d-inline-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                </div>
              </div> --}}
                        <!-- /.col -->
                        {{-- Deixando o botão de login ocupar toda a largura disponível, para melhor usabilidade em dispositivos móveis. --}}
                        {{-- <div class="col-4"> --}}
                        <div class="d-grid gap-2 ">
                            <button type="submit" class="btn btn-primary">Send me the link</button>
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
                <div class="mt-2 text-center">

                    <p class="mb-0">
                        <a href="{{ route('login') }}" class="text-center"> Back to login </a>
                    </p>
                </div>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection


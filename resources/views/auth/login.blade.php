@extends('website.layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0 mb-3">
            <div class="row no-gutters">
                <div class="col-md">
                    <img
                        src="{{asset('img/main/login.jpg')}}" width="100%"
                        alt="login">
                </div>
                <div class="col-md">
                    <div class="card-body">
                        <div class="card border-0 rounded my-5">
                            <div class="card-header border-0 bg-white">
                                <img
                                    src="{{asset('img/logo/logo.png')}}" width="100px"
                                    alt="logo"><br>
                                <div class="py-1 text-muted">{{ __('Welcome back, please login to your account') }}</div>
                                <div class="py-1 text-info"><strong>{{ __('Sign In') }}</strong></div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="my-3">
                                            <label class="sr-only" for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ old('email') }}" placeholder="Email" required
                                                       autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="my-3">
                                            <label class="sr-only" for="password">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-lock"></i></div>
                                                </div>
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" placeholder="Password" required
                                                       autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="my-1">
                                            <button type="submit" class="btn btn-info">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

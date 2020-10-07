@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0 mb-3">
            <div class="row no-gutters">
                <div class="col-md">
                    <img src="{{asset('img/main/register.jpg')}}" width="100%"
                         alt="register">
                </div>
                <div class="col-md">
                    <div class="card-body">
                        <div class="card border-0 rounded my-5">
                            <div class="card-header border-0 bg-white">
                                <img
                                    src="{{asset('img/logo/logo.png')}}" width="100px"
                                    alt="logo"><br>
                                <div class="py-1 text-muted">{{ __('Welcome, sign up now to enjoy the benefits of dSewa.') }}</div>
                                <div class="py-1 text-info"><strong>{{ __('Sign Up') }}</strong></div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="my-3">
                                            <label class="sr-only" for="name">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-user"></i></div>
                                                </div>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                                       value="{{ old('name') }}" placeholder="name" autocomplete="name"
                                                       autofocus required>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="my-3">
                                            <label class="sr-only" for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ old('email') }}" placeholder="email"
                                                       autocomplete="email" required>

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
                                            <label class="sr-only" for="contact">Contact No</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-phone"></i></div>
                                                </div>
                                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"
                                                       value="{{ old('contact') }}" placeholder="contact"
                                                       autocomplete="contact" required>
                                                @error('contact')
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
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-unlock"></i></div>
                                                </div>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                       name="password" placeholder="password" required>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="my-3">
                                            <label class="sr-only" for="password_confirmation">Confirm Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent text-muted"><i class="fas fa-lock"></i></div>
                                                </div>
                                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                       name="password_confirmation" placeholder="confirm-password" required>

                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group pull-right">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">
                                                {{ __('Register') }}
                                            </button>
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

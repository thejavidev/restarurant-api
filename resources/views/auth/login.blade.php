@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-end align-items-center">
        <div class="card col-6 card-bg">
            <form method="POST" action="{{ route('login') }}" class="p-20  ">
                @csrf
                <h2 class="card-title text-center mb-4 login_text">Login to the Admin panel</h2>
                <div class="row mb-3 flex-col">
                    <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>

                    <div class="col-12">
                        <input id="email" type="email" class="form-control login_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 flex-col">
                    <label for="password" class=" col-form-label ">{{ __('Password') }}</label>

                    <div class="col-12">
                        <input id="password" type="password" class="form-control login_input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

{{--                <div class="row mb-3">--}}
{{--                    <div class="col-md-6 offset-md-4">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                            <label class="form-check-label" for="remember">--}}
{{--                                {{ __('Remember Me') }}--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="login_btn">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="login_btn" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

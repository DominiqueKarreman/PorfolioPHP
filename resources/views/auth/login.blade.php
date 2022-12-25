{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<link rel="stylesheet" href="/css/login_register.css">
<div class="container">
    <img src="/images/dropshadowlogo.png" alt="logo" class="logo">
    <div class="mainCont">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="email_label">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="textinput @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="email_label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="textinput @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="checkbox" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="bottomdiv">
                                <button type="submit" class="login">
                                    {{ __('LOG IN') }}
                                </button>
                                @if (Route::has('register'))
                                    <a class="forgot" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                @endif
                                @if (Route::has('password.request'))
                                    <a class="create" href="{{ route('password.request') }}">
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
{{-- @endsection --}}

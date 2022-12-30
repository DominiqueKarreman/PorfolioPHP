{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/svg" href="/images/logo.svg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <link rel="stylesheet" href="/css/login_register.css">
    <div class="container">
        <img src="/images/dropshadowlogo.png" alt="logo" class="logoDK">
        <div class="mainCont">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action="{{ route('players.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="email_label">{{ __('User name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="textinput @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('email') }}" required autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="row mb-0">
                                <div class="bottomdiv">
                                    <button type="submit" class="login">
                                        {{ __('LOG IN') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

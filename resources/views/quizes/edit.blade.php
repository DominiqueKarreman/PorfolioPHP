{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Login</title>
</head>

<body>
    <nav>
        <div class="logo"> {{ Auth::user()->name }}</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a class="active"href="{{ route('quizes') }}"> Quizes</a></li>
            <li><a href="#">Posts</a></li>

            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div class="showQuizContainer">
        <div class="showQuizCard">
            <h1>Edit quiz</h1>
            <a class="editQuiz" href="{{ route('quizes.delete', $quiz->id) }}">delete</a>
            <form method="post" action="{{ route('quizes.update', $quiz->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="title" class="email_label">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="textinput @error('title') is-invalid @enderror"
                            name="title" value="{{ $quiz->title }}" required autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="email_label">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <textarea id="description"   class="textarea @error('description') is-invalid @enderror"
                            name="description" required>{{ $quiz->description }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="email_label">{{ __('Date - Time') }}</label>

                    <div class="col-md-6">
                        <input id="date" type="datetime-local" value="{{ $quiz->date }}"
                            class="datetime @error('description') is-invalid @enderror" name="date" required></input>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="email_label">{{ __('Upload QR code') }}</label>

                    <div class="col-md-6">
                        <input type="file" id="qr_path" value="{{ $quiz->qr_path }}" name="qr_path" accept="image/png, image/jpeg"
                            class="datetime @error('description') is-invalid @enderror" name="date" required></input>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="bottomdiv">
                        <button type="submit" class="login">
                            {{ __('Edit') }}
                        </button>

                    </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

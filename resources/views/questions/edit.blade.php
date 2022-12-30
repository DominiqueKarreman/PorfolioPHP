{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg" href="/images/logo.svg" />
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
        <div id="questionCard" class="showQuizCard">
            <h1>Edit question</h1>
            <a class="editQuiz" href="{{ route('questions.delete', [$quiz->id, $question->id]) }}">delete</a>
            <form method="post" action="{{ route('questions.update', [$quiz->id, $question->id]) }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="title" class="email_label">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="textinput @error('title') is-invalid @enderror"
                            name="title" value="{{ $question->title }}" required autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="email_label">{{ __('Question') }}</label>

                    <div class="col-md-6">
                        <input id="question" value="{{$question->question}}" class="textinput @error('question') is-invalid @enderror" name="question" required />
                        @error('question')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="date" class="email_label">{{ __('Upload question image') }}</label>

                    <div class="col-md-6">
                        <input type="file" id="img_path"  name="img_path"
                            accept="image/png, image/jpeg" class="datetime @error('description') is-invalid @enderror"
                            name="date" ></input>

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

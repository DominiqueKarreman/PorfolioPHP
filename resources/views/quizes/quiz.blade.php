{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cms.css">
    <link rel="stylesheet" href="/css/quiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="/css/login_register.css">
    <title>Login</title>
    
</head>

<body>
    <nav>
        {{-- <div class="logo"> {{ Auth::user()->name }} </div> --}}
        <div class="logo"> Pubquiz</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            {{-- <li><a href="{{ route('home') }}">Home</a></li>
            <li><a class="active"href="{{ route('quizes') }}"> Quizes</a></li>
            <li><a href="#">Posts</a></li> --}}

            <li class="nav-item dropdown">




                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('players.logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('players.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="quizContainer" class="container">
        {{-- <img src="/images/dropshadowlogo.png" alt="logo" class="logoDK"> --}}
        <h1 id="playerTeam">Teams for </h1>

        <div id="quizScreen" class="mainCont">
            <div class="answers">

                <div class="answer"><div class="letter">A</div> <h1 class="option">antwoord</h1></div>
                <div class="answer"><div class="letter">B</div> <h1 class="option">antwoord</h1></div>
                <div class="answer"><div class="letter">C</div> <h1 class="option">antwoord</h1></div>
                <div class="answer"><div class="letter">D</div> <h1 class="option">antwoord</h1></div>
            </div>

        </div>
    </div>

</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

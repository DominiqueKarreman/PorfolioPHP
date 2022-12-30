{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg" href="/images/logo.svg" />
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
    <div id="quizContainerStart" class="container">
        {{-- <img src="/images/dropshadowlogo.png" alt="logo" class="logoDK"> --}}
     

        <div id="quizScreenStart" class="mainCont">
            <div id="startScreenDiv" class="answers">
                <h1 class="black">{{$quiz->title}}</h1>
                <div class="players">
                    <h1>Players: {{ count($players) }}</h1>
                </div>

                <div class="teams">
                    <h1>Teams: {{ count($teams) }}</h1>
                </div>

                <div class="questions">
                    <h1>Questions: {{ count($players) }}</h1>
                </div>
                <a id="goBack1" class="startQuiz" href="{{route('players.quizes.show', $quiz->id)}}">Go back</a>
                <img class="smallQR" src="{{$quiz->qr_path}}" alt="">
            </div>
            <div class="rightContent">
                <h1>Waiting for host to start</h1>
                <div class="playersDiv">
                    @foreach ($players as $player)
                    <div class="player">
                        <h1 id="playerName">{{$player->player_name}} ({{$player->team_name}})</h1>
                    </div>
                    @endforeach
                </div>
                <a id="goBack2" class="startQuiz" href="{{route('players.quizes.show', $quiz->id)}}">Go back</a>
            </div>

        </div>
    </div>

</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

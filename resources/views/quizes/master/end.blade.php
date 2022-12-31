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
    <div id="quizContainerActive" class="container">
        {{-- <img src="/images/dropshadowlogo.png" alt="logo" class="logoDK"> --}}


        <div id="quizScreenActive" class="mainCont">
            <h1>Top 3</h1>
            @foreach ($podiums as $podium)
                @if ($podium->place == 1)
                    <div class="podium">
                        <div class="first">
                            <h1>First: {{ $podium->player_name }} ({{ $podium->team_name }}) Score: {{ $podium->score }}
                                Right: {{ $podium->right }} Wrong: {{ $podium->wrong }}</h1>

                        </div>
                    </div>
                @endif
                @if ($podium->place == 2)
                    <div class="podium">
                        <div class="second">
                            <h1>Second: {{ $podium->player_name }} ({{ $podium->team_name }}) Score:
                                {{ $podium->score }} Right: {{ $podium->right }} Wrong: {{ $podium->wrong }}</h1>

                        </div>
                    </div>
                @endif
                @if ($podium->place == 3)
                    <div class="podium">
                        <div class="third">
                            <h1>Third: {{ $podium->player_name }} ({{ $podium->team_name }}) Score:
                                {{ $podium->score }} Right: {{ $podium->right }} Wrong: {{ $podium->wrong }}</h1>

                        </div>
                    </div>
                @endif
            @endforeach

            <h1>Rest</h1>
            @foreach ($players as $player)
                @if ($player->podiumPlayer === 'false')
                    <h1>{{ $player->player_name }} ({{ $player->team_name }}) Score: {{ $player->score }}
                    </h1>
                @endif
            @endforeach
            @if (Auth::user())
                <a class="startQuiz" href="{{ route('quizes') }}">Go back</a>
            @else
                <a class="startQuiz" href="{{ route('players.quizes') }}">Go back</a>
            @endif
        </div>

    </div>
    </div>
    </div>

</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

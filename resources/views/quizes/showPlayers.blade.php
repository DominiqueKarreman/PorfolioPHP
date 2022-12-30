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

        <div id="playersShow" class="showQuizCard">
            <div class="showQuizHeader">
                <h1>Players ({{count($players)}})</h1>
            </div>
            @foreach ($players as $player)

                <div class="player">
                    <p>{{ $player->player_name }} ({{$player->team_name}})</p>
                </div>
            @endforeach
            <div class="showQuizHeader">
                <h1>Teams ({{count($teams)}})</h1>
            </div>
            @foreach ($teams as $team)
                <div class="player">
                    <p>{{ $team->name }}</p>
                </div>
            @endforeach
            @foreach ($teams as $team)
                <div class="player">
                    <p>{{ $team->name }}</p>
                </div>
            @endforeach
         
                {{-- <div class="title">
                
                <h1>{{ $quiz->title }}</h1>
                <p>{{ $quiz->description }}</p>
            </div>
            <div class="date">

                <h1>Date: </h1>
                <p>{{ $quiz->date }}</p>
            </div>
            <div class="active">

                <h1>Active: </h1>
                <p>{{ $quiz->is_active == 1 ? 'Active' : 'Inactive' }}</p>
            </div>
            <div class="players">
                <h1>Players: </h1>
                <p>{{ $quiz->count}}</p>
            </div>--}}
            <a href="{{route('quizes.show', $quiz->id) }}" id="goback" class="startQuiz">
               Go back
            </a>
        </div>
    </div>
</body>
<script src="/js/cms.js"></script>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

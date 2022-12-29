{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cms.css">
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
    <div id="teamscontainer" class="container">
        {{-- <img src="/images/dropshadowlogo.png" alt="logo" class="logoDK"> --}}
        <h1 id="teamsHeader">Teams for {{ $teams[0]->quiz_name }}</h1>

        <div id="teamsMainCont" class="mainCont">

            <table>
                <thead>

                    <tr id="toprow">
                        <th>Team name</th>
                        <th>Amount of players</th>
                        <th>Created at</th>
                        <th>Join</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form method="POST" id="createTeamForm" action="{{ route('teams.store', $teams[0]->quiz_id) }}">
                            @csrf

                        
                      @php
                         {{ date_default_timezone_set('Europe/Amsterdam'); }}
                        @endphp
    
                        <td><input id="tableinput" class="textinput" type="text" name="name"></td>
                        <td>0</td>
                        <td>{{ date('m/d/Y h:i:s a', time()) }}</td>
                        <td><a id="createTeam" class="startQuiz" onclick="event.preventDefault();
                            document.getElementById('createTeamForm').submit();">Create</a>
                        </td>
                    </tr>
                    
                    <input type="hidden" name="player" value="{{ Cookie::get('player')}}">
                    <input type="hidden" name="created_at" value="{{ date('m/d/Y h:i:s a', time()) }}">
                    <input type="hidden" name="updated_at" value="{{ date('m/d/Y h:i:s a', time()) }}">
                </form>
                    @if(count($teams) > 0)
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->count }}</td>
                            <td>{{ $team->created_at }}</td>
                            <td><a
                                    id="tableJoin" class="startQuiz" href="{{ route('teams.join', [$team->quiz_id, $team->team_id]) }}">Join</a>
                            </td>
                        </tr>
                    @endforeach
                    @else 
                    <tr>
                        <td>No teams found</td>
                    </tr>
                    
                    @endif
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

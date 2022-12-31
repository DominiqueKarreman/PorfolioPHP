{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/svg" href="/images/logo.svg" />
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


        <div id="teamsMainCont" class="mainCont">

            <table>
                <thead>

                    <tr id="toprow">
                        <th>Correct Answer</th>
                        <th>Option 1</th>
                        <th>Option 2</th>
                        <th>Option 3</th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                         
                        <td>{{ $answers->correctAnswer }}</td>
                        <td>{{ $answers->option1 }}</td>
                        <td>{{ $answers->option2 }}</td>
                        <td>{{ $answers->option3 }}</td>

                    </tr>


                </tbody>
            </table>

        </div>
    </div>

</body>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

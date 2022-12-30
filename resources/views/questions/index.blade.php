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
        <h1 id="questionsHeader">Questions for {{ $quiz->title }}</h1>
        <a href="{{ route('questions.create', $quiz->id) }}" id="createQuestion" class="createQuiz">+</a>
        <div id="teamsMainCont" class="mainCont">

            <table>
                <thead>

                    <tr id="toprow">
                        <th>Index</th>
                        <th>Title</th>
                        <th>Question</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>

                    @if (count($questions) > 0)
                        @foreach ($questions as $question)
                            <tr>
                                <td>{{ $question->row }}</td>
                                <td>{{ $question->title }}</td>
                                <td>{{ $question->question }}</td>
                                <td>
                                    <a id="option1" class="startQuiz"
                                        href="{{ route('questions.edit', [$quiz->id, $question->id]) }}">Join</a>
                                    <a id="option2" class="editQuiz"
                                        href="{{ route('questions.delete', [$quiz->id, $question->id]) }}">Delete</a>
                                    <a id="option3" class="editQuiz"
                                        href="{{ route('questions.edit', [$quiz->id, $question->id]) }}">Edit</a>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/svg" href="/images/logo.svg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>CMS</title>
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
    <div class="contentQuizes">
        <h1 id="quizesText">Quizes</h1>

        <div class="quizes">
            @unless(empty($quizes))
                @foreach ($quizes as $quiz)
                    <div class="quiz">
                        <h1> {{ $quiz->title }} </h1>
                        <p> {{ $quiz->description }} </p>
                        <h1>Date: <p>{{ $quiz->date }}</p>
                        </h1>
                        <h1>Active: <p>{{ $quiz->is_active == 1 ? 'Active' : 'Inactive' }}</p>
                        </h1>
                        <div class="buttons">
                            <a href="{{ route('players.quizes.show', $quiz->id) }}" class="startQuiz">Show Quiz</a>

                        </div>
                        {{-- <a href="{{ route('quizes.show', $quiz->id) }}">Start Quiz</a> --}}
                    </div>
                @endforeach
            @else
                <div class="options">

                    <h1 id="none">No Quizes</h1>
                    {{-- <a href="{{ route('quizes.create') }}" class="createQuiz">Create Quiz</a> --}}
                </div>
            @endunless


        </div>

</body>

</html>

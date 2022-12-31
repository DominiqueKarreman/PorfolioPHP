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
            <div class="question">
                <h1 class="questionText">{{ $question->title }}</h1>
                <h1 class="questionText">{{ $question->question }}</h1>

                <img class="questionIMG" src="../../{{ $question->img_path }}" alt="pic">
            </div>
            @if($question->type == 'multipleChoice')
            <div class="answers">
            <a id="test1" class="test"
                href="{{ route('questions.results', ['id' => $quiz->id, 'question_id' => $question->id, 'answer' => $answer[0], 'volgorde' => implode("_", $answer)]) }}">
                    <div id="Answer1" class="answer">
                        <div class="letter">A</div>
                        <h1 class="option">{{ $answer[0] }}</h1>
                    </div>
            </a>
            <a id="test2" class="test"
                href="{{ route('questions.results', ['id' => $quiz->id, 'question_id' => $question->id, 'answer' => $answer[1], 'volgorde' => implode("_", $answer)]) }}">
                <div id="Answer2" class="answer">
                    <div class="letter">B</div>
                    <h1 class="option">{{ $answer[1] }}</h1>
                </div>
            </a>
            <a id="test3" class="test"
                href="{{ route('questions.results', ['id' => $quiz->id, 'question_id' => $question->id, 'answer' => $answer[2], 'volgorde' => implode("_", $answer)]) }}">
                <div id="Answer3" class="answer">
                    <div class="letter">C</div>
                    <h1 class="option">{{ $answer[2] }}</h1>
                </div>
            </a>
            <a id="test4" class="test"
                href="{{ route('questions.results', ['id' => $quiz->id, 'question_id' => $question->id, 'answer' => $answer[3], 'volgorde' => implode("_", $answer)]) }}">
                <div id="Answer4" class="answer">
                    <div class="letter">D</div>
                    <h1 class="option">{{ $answer[3] }}</h1>
                </div>
            </a>
            </div>
            @endif

            @if($question->type == 'TF')
            <div class="answers">
            <a id="test1" class="test"
                href="{{ route('questions.results', ['id' => $quiz->id, 'question_id' => $question->id, 'answer' => $answer[0], 'volgorde' => implode("_", $answer)]) }}">
                <div class="answers">
                    <div id="Answer1" class="answer">
                        <div class="letter">A</div>
                        <h1 class="option">{{ $answer[0] }}</h1>
                    </div>
            </a>
            <a id="test2" class="test"
                href="{{ route('questions.results', ['id' => $quiz->id, 'question_id' => $question->id, 'answer' => $answer[1], 'volgorde' => implode("_", $answer)]) }}">
                <div id="Answer2" class="answer">
                    <div class="letter">B</div>
                    <h1 class="option">{{ $answer[1] }}</h1>
                </div>
            </a>
            </div>
            @endif


        </div>

    </div>
    </div>
    </div>

</body>
<script>
    // let buttons = document.getElementsByClassName("answer");
    // for (const button of buttons) {
    //     console.log(button.id);

    //     button.addEventListener("click", function() {
    //         document.getElementById("givenAnswer").value = button.children[1].innerHTML
    //         event.preventDefault();
    //         document.getElementById('givenAnswerForm').submit();

    //     });
    // }

    // console.log(buttons);
</script>

</html>
{{-- @section('content') --}}

{{-- @endsection --}}

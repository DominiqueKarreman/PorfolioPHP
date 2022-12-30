<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/software', function () {
    return view('software');
});


Route::get('/melvin', function () {
    return view('melvin');
});

Route::get('/funnycat', function () {
    return view('funnycat');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/players/login', function () {
    return view('players.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// player routes
Route::get('/players/login', [App\Http\Controllers\PlayersController::class, 'login'])->name('players.login');
Route::post('/players/logout', [App\Http\Controllers\PlayersController::class, 'logout'])->name('players.logout');
Route::post('/players', [App\Http\Controllers\PlayersController::class, 'storePlayer'])->name('players.store');
Route::get('/players/cookie', [App\Http\Controllers\PlayersController::class, 'returnCookie'])->name('players.cookie');

//team routes

Route::get('quizes/{id}/team/{team_id}/leave', [App\Http\Controllers\TeamsController::class, 'leave'])->name('teams.leave');
Route::get('quizes/{id}/team/{team_id}/join', [App\Http\Controllers\TeamsController::class, 'join'])->name('teams.join');
Route::post('quizes/{id}/teams', [App\Http\Controllers\TeamsController::class, 'storeTeam'])->name('teams.store');
Route::get('quizes/{id}/teams', [App\Http\Controllers\TeamsController::class, 'index'])->name('teams.index');
Route::get('quizes/{id}/createTeam', [App\Http\Controllers\TeamsController::class, 'createTeam'])->name('teams.create');
//quiz routes
Route::get('/quizes/{id}/activate', [App\Http\Controllers\QuizesController::class, 'activateQuiz'])->name('quizes.activate');
Route::get('/quizes/{id}/start', [App\Http\Controllers\QuizesController::class, 'startQuiz'])->name('quizes.start');
Route::get('/quizes/{id}/players', [App\Http\Controllers\QuizesController::class, 'getPlayers'])->name('quizes.players');
Route::get('/quizes/{id}/quizScreen', [App\Http\Controllers\QuizesController::class, 'quizScreen'])->name('quizes.quizScreen');
Route::get('/quizes', [App\Http\Controllers\QuizesController::class, 'index'])->name('quizes');
Route::get('/quizes/show/{id}', [App\Http\Controllers\QuizesController::class, 'getQuiz'])->name('quizes.show');
Route::get('/quizes/edit/{id}', [App\Http\Controllers\QuizesController::class, 'editQuiz'])->name('quizes.edit');
Route::get('/quizes/create', [App\Http\Controllers\QuizesController::class, 'createQuiz'])->name('quizes.create');
Route::post('/quizes/store', [App\Http\Controllers\QuizesController::class, 'storeQuiz'])->name('quizes.store');
Route::post('/quizes/update/{id}', [App\Http\Controllers\QuizesController::class, 'updateQuiz'])->name('quizes.update');
Route::get('/quizes/delete/{id}', [App\Http\Controllers\QuizesController::class, 'deleteQuiz'])->name('quizes.delete');
Route::get('/quizes/join/{id}', [App\Http\Controllers\QuizesController::class, 'joinQuiz'])->name('quizes.join');
//player quiz routes
Route::get('/players/quizes', [App\Http\Controllers\PlayersController::class, 'getQuizes'])->name('players.quizes');
Route::get('/players/quizes/{id}', [App\Http\Controllers\PlayersController::class, 'getQuiz'])->name('players.quizes.show');

//question routes
Route::get('/quizes/{id}/questions', [App\Http\Controllers\QuestionsController::class, 'index'])->name('quizes.questions');
Route::get('/quizes/{id}/question/{question_id}', [App\Http\Controllers\QuestionsController::class, 'show'])->name('questions.show');
Route::get('/quizes/{id}/questions/create', [App\Http\Controllers\QuestionsController::class, 'create'])->name('questions.create');
Route::post('/quizes/{id}/questions/store', [App\Http\Controllers\QuestionsController::class, 'store'])->name('questions.store');
Route::get('/quizes/{id}/questions/edit/{question_id}', [App\Http\Controllers\QuestionsController::class, 'edit'])->name('questions.edit');
Route::post('/quizes/{id}/questions/update/{question_id}', [App\Http\Controllers\QuestionsController::class, 'update'])->name('questions.update');
Route::get('/quizes/{id}/questions/delete/{question_id}', [App\Http\Controllers\QuestionsController::class, 'delete'])->name('questions.delete');

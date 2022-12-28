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
Route::post('/players', [App\Http\Controllers\PlayersController::class, 'storePlayer'])->name('players.store');
Route::get('/players/cookie', [App\Http\Controllers\PlayersController::class, 'returnCookie'])->name('players.cookie');
//quiz routes

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
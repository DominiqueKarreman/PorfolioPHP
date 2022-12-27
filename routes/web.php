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

Route::get('/login', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/quizes', [App\Http\Controllers\QuizesController::class, 'index'])->name('quizes');
Route::get('/quizes/show/{id}', [App\Http\Controllers\QuizesController::class, 'getQuiz'])->name('quizes.show');
Route::get('/quizes/edit/{id}', [App\Http\Controllers\QuizesController::class, 'editQuiz'])->name('quizes.edit');
Route::get('/quizes/create', [App\Http\Controllers\QuizesController::class, 'createQuiz'])->name('quizes.create');
Route::post('/quizes/store', [App\Http\Controllers\QuizesController::class, 'storeQuiz'])->name('quizes.store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Daffa132Controller;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\News1Controller;
use App\Http\Controllers\News2Controller;
use App\Http\Controllers\News3Controller;
use App\Http\Controllers\News4Controller;
use App\Http\Controllers\News5Controller;
use App\Http\Controllers\News6Controller;
use App\Http\Controllers\News7Controller;
use App\Http\Controllers\News8Controller;
use App\Http\Controllers\DashboardController;
use App\Models\Authors;
use App\Models\News;

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


    $news = News::all();
    $author = Authors::all();

    return view('welcome', compact("news", "author"));
});

Route::get('author', [Daffa132Controller::class, 'author']);
Route::get('news', [Daffa132Controller::class, 'news']);
Route::get('argapura1', [Daffa132Controller::class, 'argapura']);
Route::get('buthak1', [Daffa132Controller::class, 'buthak']);
Route::get('arjuno1', [Daffa132Controller::class, 'arjuno']);
Route::get('pundak1', [Daffa132Controller::class, 'pundak']);
Route::get('sumeru1', [Daffa132Controller::class, 'sumeru']);
Route::get('bromo1', [Daffa132Controller::class, 'bromo']);
Route::get('kawi1', [Daffa132Controller::class, 'kawi']);
Route::get('liman1', [Daffa132Controller::class, 'liman']);
Route::get('lawu1', [Daffa132Controller::class, 'lawu']);
Route::get('profile', [Daffa132Controller::class, 'profile']);
Route::get('dashboard', [Daffa132Controller::class, 'dashboard']);
Route::resource('author', AuthorsController::class);
Route::resource('news', NewsController::class);
Route::resource('news1', News1Controller::class);
Route::resource('news2', News2Controller::class);
Route::resource('news3', News3Controller::class);
Route::resource('news4', News4Controller::class);
Route::resource('news5', News5Controller::class);
Route::resource('news6', News6Controller::class);
Route::resource('news7', News7Controller::class);
Route::resource('news8', News8Controller::class);
Route::resource('dashboard', DashboardController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\library\libraryController;
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


Route::get('/library', [libraryController::class, 'index'])->name('library');
Route::get('/libraryinput', [libraryController::class, 'input'])->name('libraryinput');
Route::post('/librarypost', [libraryController::class, 'post'])->name('librarypost');




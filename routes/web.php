<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Route\RouteStudentController;
use App\Http\Controllers\Route\LogionController;
use  App\Http\Controllers\data\DatasinhvienController;
use App\Http\Controllers\quanly\attendenceController;
use App\Http\Controllers\tintuc\TintucController;
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

// Route::post('/', [CalculaterCOntroller::class, 'index']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [RouteStudentController::class,'showStudent'])->name('/');
Route::get('/login', [LogionController::class, 'login'])->name('login');
Route::get('/getuser', [LogionController::class, 'getUser'])->name('getuser');
Route::post('/postuser', [LogionController::class, 'postUser'])->name('postuser');



Route::post('/postsinhvien', [DatasinhvienController::class, 'addstudent'])->name('postsinhvien');
Route::get('/sinhvien', [DatasinhvienController::class, 'edit'])->name('getsinhvien');
Route::get('/danhsach', [DatasinhvienController::class, 'showdanhsach'])->name('showdanhsach');
Route::post('/delete', [DatasinhvienController::class, 'deletestudent'])->name('deletestudent');

Route::prefix('tintuc')->group(function() {
    Route::get('/', [TintucController::class, 'index'])->name('index');
    Route::get('/thegioi', [TintucController::class, 'thegioi'])->name('thegioi');
    Route::get('/lienhe', [TintucController::class, 'lienhe'])->name('lienhe');
    Route::get('/hello', [TintucController::class, 'lienhe'])->name('lienhe');

});

Route::prefix('quanly')->group(function () {
    Route::get('/sinhvien', [attendenceController::class, 'index'])->name('qlsinhvien');
    Route::get('/', [attendenceController::class,'lichday'])->name('ql');
    Route::post('/post', [attendenceController::class, 'post'])->name('qlpost');


    
});





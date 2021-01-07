<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/A', function () {
    return view('Home/home');
});



Route::get('/home',[FrontendController::class, 'home']);
Route::get('/in',[FrontendController::class, 'index']);
Route::get('/ob',[FrontendController::class, 'obj']);
Route::get('/ue',[FrontendController::class, 'upe']);
Route::get('/p',[FrontendController::class, 'pr']);
Route::get('/ss',[FrontendController::class, 'sts']);

Route::get('/h1',[FrontendController::class, 'h']);

Route::get('/lgn',[FrontendController::class, 'log']);
Route::get('/sg',[FrontendController::class, 'sgn']);

Route::get('/fp',[FrontendController::class, 'fgp']);
Route::get('/a',[FrontendController::class, 'a']);

Route::get('/admin',[FrontendController::class, 'admin']);
Route::post('/waitfortheacceptance',[FrontendController::class, 'wfa']);
Route::get('/waitfortheacceptance',[FrontendController::class, 'wfa']);

Route::get('/aacademic',[AdminController::class, 'aaca']);
Route::get('/aindustrial',[AdminController::class, 'aind']);
Route::get('/astudent',[AdminController::class, 'astu']);

Route::get('/x',[LoginController::class,'index']);
Route::post('/checklogin',[LoginController::class,'checklogin']);
Route::get('/success',[LoginController::class,'successlogin']);
Route::get('/logout',[LoginController::class,'logout']);

Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);

Route::get('/welcome', function () {
    return view('a');
});
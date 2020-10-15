<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    //return redirect("home");
});

// welcome page
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/sign_up', [HomeController::class, 'sign_up']);
Route::get('/forgetp', [HomeController::class, 'forgetp']);



Route::get('/home', [HomeController::class, 'home']);
Route::get('/home/outbox', [HomeController::class, 'outbox']);
Route::get('/home/sent', [HomeController::class, 'sent']);
Route::get('/home/settings', [HomeController::class, 'settings']);
Route::get('home/profile', [HomeController::class, 'profile']);
Route::get('home/privacy', [HomeController::class, 'privacy']);
Route::get('home/upload', [HomeController::class, 'upload']);
Route::get('/home/msg_box', [HomeController::class, 'msg_box']);
Route::get('/home/logout', [HomeController::class, 'logout']);


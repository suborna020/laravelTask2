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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
    //return redirect("home");
});

Route::get('/home/dashboard', [HomeController::class, 'dashboard']);
Route::get('/home/outbox', [HomeController::class, 'outbox']);
Route::get('/home/sent', [HomeController::class, 'sent']);
Route::get('/home/settings', [HomeController::class, 'settings']);
Route::get('/home/logout', [HomeController::class, 'logout']);
Route::get('home/settings/profile', [HomeController::class, 'profile']);
Route::get('home/settings/privacy', [HomeController::class, 'privacy']);
Route::get('home/settings/upload', [HomeController::class, 'upload']);

Route::get('/home/dashboard_copy', [HomeController::class, 'dashboard_copy']);

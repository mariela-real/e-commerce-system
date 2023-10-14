<?php
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AdviceRequestsController;
use Illuminate\Support\Facades\Route;


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
    return view('home.home');
});
Route::get('/about', function () {
    return view('about.about');
});

Route::get('/advice', function () {
    return view('advice.advice');
});
Route::get('/home', [SubscriberController::class, 'viewRegistrationSubscripter'])->name('home');
Route::post('/home', [SubscriberController::class, 'registerSubscripter'])->name('home');
Route::post('/advice', [AdviceRequestsController::class, 'sendScheduleAdvice'])->name('advice');

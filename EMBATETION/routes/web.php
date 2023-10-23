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

Route::get('/motivation', function () {
    return view('motivation.motivation');
});

Route::get('/mission', function () {
    return view('mission_vision.mission_vision');
});

Route::get('/team', function () {
    return view('team.team');
});
Route::get('/work', function () {
    return view('work.work');
});


Route::get('/pre_incubation', function () {
    return view('pre_incubation.pre_incubation');
});

Route::get('/incubation', function () {
    return view('incubation.incubation');
});

Route::get('/post_incubation', function () {
    return view('post_incubation.post_incubation');
});

Route::get('/advice', function () {
    return view('advice.advice');
});
Route::get('/request_tray', function () {
    return view('advice.request_tray');
});
Route::get('/home', [SubscriberController::class, 'viewRegistrationSubscripter'])->name('home');
Route::post('/home', [SubscriberController::class, 'registerSubscripter'])->name('home');
Route::post('/advice', [AdviceRequestsController::class, 'sendScheduleAdvice'])->name('advice');


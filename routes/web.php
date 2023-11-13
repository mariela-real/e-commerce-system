<?php
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ServiceRequestsController;
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

    Route::get('/login', function () {
        return view('login.form_login');
    });
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

    Route::get('/service', function () {
        return view('contact.advice');
    });
    Route::get('/inbox', function () {
        return view('inbox.request_tray');
    });
    Route::get('/fecha', function(){
        return view('inbox.reply_message');
    });
    Route::group(['prefix'=>'admin','as'=> 'admin' ], function(){
        Route::get('/', function() {return view('admin'); });
        Route::get('/user', function(){return view('user'); });
    });
    Route::get('/home', [SubscriberController::class, 'viewRegistrationSubscripter'])->name('home');
    Route::post('/home', [SubscriberController::class, 'registerSubscripter'])->name('home');
    Route::post('/service', [ServiceRequestsController::class, 'sendScheduleAdvice'])->name('service');
    Route::get('/admin-response', [ServiceRequestsController::class, 'messageReport'])->name('admin-response');
    Route::get('/message/{id}', [ServiceRequestsController::class, 'show'])->name('message');
    //Route::post('/message', [ServiceRequestsController::class, 'sendScheduleAdvice'])->name('message');


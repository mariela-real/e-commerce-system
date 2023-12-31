<?php
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServiceRequestsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CarouselHomeController;
use App\Http\Controllers\Admin\CarouselAboutUsController;
use App\Http\Controllers\Admin\CarouselOpinionController;
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

    Route::get('/service', function () {
        return view('contact.advice');
    });
    Route::get('/inbox', function () {
        return view('contact.notifications');
    });
    Route::get('/fecha', function(){
        return view('inbox.reply_message');
    });
    Route::get('/', [CarouselController::class, 'mainCarousel'])->name('/');
    Route::get('/home', [CarouselController::class, 'mainCarousel'])->name('home');
    Route::get('/about', [CarouselController::class, 'aboutUsCarousel'])->name('about');
    Route::get('/motivation', [CarouselController::class, 'opinionsCarousel'])->name('motivacion');
    Route::post('/home', [SubscriberController::class, 'registerSubscripter'])->name('home');
    Route::post('/service', [ServiceRequestsController::class, 'sendScheduleAdvice'])->name('service');


    Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () { return view('auth.login'); })->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    });
    Route::middleware(['auth'])->group(function () {

      Route::get('/admin', function(){return view('admin');});
      Route::get('/notifications', [ServiceRequestsController::class, 'messageReport'])->name('notifications');
        Route::get('/message/{id}', [ServiceRequestsController::class, 'show'])->name('message');
        Route::resource('/setting', SettingController::class);
        Route::resource('/carousel', CarouselHomeController::class);
        Route::resource('/aboutUs_carousel', CarouselAboutUsController::class);
        Route::resource('/opinions_carousel', CarouselOpinionController::class);
        Route::get('/profile', [MenuController::class, 'loadMenu'])->name('profile');
        Route::post('logout', [LoginController::class, 'logout']);
    });

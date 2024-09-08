<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Models\service;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


////////FRONT
Route::name('front.')->controller(FrontController::class)->group(function () {
    //index
    Route::post('/subscriber/store','subscriberStore')->name('subscriber.store');
    Route::get('/', 'index')->name('index');
    //about
    Route::get('/about', 'about')->name('about');
    //service
    Route::get('/service', 'service')->name('service');
    //contact
    Route::post('/contact/store','contactStore')->name('contact.store');
    Route::get('/contact', 'contact')->name('contact');
});


////////ADMIN
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {
    Route::middleware('auth')->group(function () {
        ///INDEX
        Route::view('/', 'admin/index')->name('index');
        ///SERVICES
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('service', serviceController::class);
        });
        //FEATURES
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('feature', FeatureController::class);
        });
        //messages 
        Route::controller(MessageController::class)->group(function () {
            Route::resource('message', MessageController::class)->only('index', 'show', 'destroy');
        });
        //subscribers
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscriber', SubscriberController::class)->only('index', 'destroy');
        });
        //testimonials
        Route::controller(TestimonialController::class)->group(function () {
            Route::resource('testimonial', TestimonialController::class);
        });
         //members
         Route::controller(MemberController::class)->group(function () {
            Route::resource('member', MemberController::class);
        });
          //companies
          Route::controller(CompanyController::class)->group(function () {
            Route::resource('company', CompanyController::class)->except('show');
        });
        //settings
        Route::controller(SettingController::class)->group(function () {
            Route::resource('setting', SettingController::class)->only('index','update');
        });
    });

    require __DIR__ . '/auth.php';
});

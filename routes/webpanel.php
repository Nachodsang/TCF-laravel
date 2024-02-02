<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['Webpanel'])->group(function(){

    Route::prefix('config')->group(function(){
        Route::get('/set/color',[\App\Http\Controllers\Webpanel\CssCtrl::class,'configColorUpdate']);
    });

    Route::get('/',[\App\Http\Controllers\Webpanel\DashboardCtrl::class,'index']);

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'index']);
        Route::get('/task', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'userLog']);
        Route::post('/home-top', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'store']);
    });
    Route::prefix('logo')->group(function () {
        Route::post('{type}',[\App\Http\Controllers\Webpanel\DashboardCtrl::class,'logo'])->where(['type'=>'[a-z]+']);
    });
    Route::prefix('color')->group(function () {
        Route::post('/update',[\App\Http\Controllers\Webpanel\DashboardCtrl::class,'color']);
    });

    Route::prefix('banner')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'addBanner']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'statusBanner']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'show'])->where(['id'=>'[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'update'])->where(['id'=>'[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'destroy'])->where(['id'=>'[0-9]+']);
    });

    Route::prefix('service')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'addService']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'statusService']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'show'])->where(['id'=>'[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'update'])->where(['id'=>'[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'destroy'])->where(['id'=>'[0-9]+']);

        Route::post('/check/url', [\App\Http\Controllers\Webpanel\ServiceCtrl::class, 'checkUrl']);
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'index']);
        Route::post('/update', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'update']);
    });

    Route::prefix('email-contact')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'EmailContact']);
    });

    Route::prefix('about-us')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'index']);
        Route::post('/', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'update']);
        Route::get('/client', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'ourClient']);
        Route::post('/client/store', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'storeClient']);
        Route::put('/client/update/{id}', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'updateClient'])->where(['id'=>'[0-9]+']);
        Route::delete('/client/delete/{id}', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'deleteClient'])->where(['id'=>'[0-9]+']);
    });
    Route::prefix('user')->group(function(){
        Route::get('/profile',[\App\Http\Controllers\Webpanel\UserCtrl::class,'profile']);
        Route::get('/', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'addUser']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'statusUser']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'show'])->where(['id'=>'[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'update'])->where(['id'=>'[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'destroy'])->where(['id'=>'[0-9]+']);
    });

    Route::prefix('map')->group(function(){
        Route::put('/add',[\App\Http\Controllers\Webpanel\ContactCtrl::class,'storeMap']);
        Route::get('/{id}',[\App\Http\Controllers\Webpanel\ContactCtrl::class,'getMap'])->where(['id'=>'[0-9]+']);
        Route::post('/{id}',[\App\Http\Controllers\Webpanel\ContactCtrl::class,'updateMap'])->where(['id'=>'[0-9]+']);
        Route::delete('/{id}',[\App\Http\Controllers\Webpanel\ContactCtrl::class,'deleteMap'])->where(['id'=>'[0-9]+']);
    });

    Route::prefix('menu')->group(function(){
        Route::get('/',[\App\Http\Controllers\Webpanel\MenuCtrl::class,'index']);
    });

    Route::prefix('consultant')->group(function(){
        Route::get('/',[\App\Http\Controllers\Webpanel\ConsultantCtrl::class,'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'addConsultant']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'statusConsultant']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'show'])->where(['id'=>'[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'update'])->where(['id'=>'[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'destroy'])->where(['id'=>'[0-9]+']);

        Route::post('/check/url', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'checkUrl']);
    });
});

Route::prefix('media')->group(function(){
    Route::get('/profile-images',[\App\Http\Controllers\Webpanel\MediaCtrl::class,'profileImages']);
    Route::put('/image/upload',[\App\Http\Controllers\Webpanel\MediaCtrl::class,'uploadImage']);
});
Route::get('login',[\App\Http\Controllers\Webpanel\AuthCtrl::class,'index']);
Route::post('login',[\App\Http\Controllers\Webpanel\AuthCtrl::class,'login']);
Route::get('logout',[\App\Http\Controllers\Webpanel\AuthCtrl::class,'logout']);
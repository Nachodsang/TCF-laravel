<?php

use App\Http\Controllers\Webpanel\DashboardCtrl;
use App\Http\Controllers\webpanel\maCtrl;
use App\Http\Controllers\webpanel\ServiceCategoryCtrl;
use App\Http\Controllers\Webpanel\ServiceCtrl;
use App\Models\AboutServiceMd;
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

Route::middleware(['Webpanel'])->group(function () {

    Route::prefix('config')->group(function () {
        Route::get('/set/color', [\App\Http\Controllers\Webpanel\CssCtrl::class, 'configColorUpdate']);
    });

    Route::get('/', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'index']);

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'index']);
        Route::get('/task', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'userLog']);
        Route::post('/home-top', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'store']);
    });
    Route::prefix('logo')->group(function () {
        Route::post('{type}', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'logo'])->where(['type' => '[a-z]+']);
    });
    Route::prefix('color')->group(function () {
        Route::post('/update', [\App\Http\Controllers\Webpanel\DashboardCtrl::class, 'color']);
    });

    Route::prefix('banner')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'addBanner']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'statusBanner']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'show'])->where(['id' => '[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'update'])->where(['id' => '[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\BannerCtrl::class, 'destroy'])->where(['id' => '[0-9]+']);
    });

    Route::prefix('service')->group(function () {
        Route::get('/', [ServiceCtrl::class, 'index']);
        Route::get('/add', [ServiceCtrl::class, 'addService']);
        Route::post('/add', [ServiceCtrl::class, 'store']);
        Route::post('/status', [ServiceCtrl::class, 'statusService']);
        Route::get('/update/{id}', [ServiceCtrl::class, 'show'])->where(['id' => '[0-9]+']);
        Route::post('/update/{id}', [ServiceCtrl::class, 'update'])->where(['id' => '[0-9]+']);
        Route::delete('/delete/{id}', [ServiceCtrl::class, 'destroy'])->where(['id' => '[0-9]+']);
        Route::post('/description', [ServiceCtrl::class, 'description']);
        Route::post('/check/url', [ServiceCtrl::class, 'checkUrl']);
    });

    Route::prefix('service-category')->group(function () {
        Route::get('/', [ServiceCategoryCtrl::class, 'index']);
        Route::post('/', [ServiceCategoryCtrl::class, 'storeDescription']);
        Route::get('/add', [ServiceCategoryCtrl::class, 'add']);
        Route::post('/add', [ServiceCategoryCtrl::class, 'store']);
        Route::get('/update/{id}', [ServiceCategoryCtrl::class, 'show'])->where(['id' => '[0-9]+']);
        Route::put('/update/{id}', [ServiceCategoryCtrl::class, 'update'])->where(['id' => '[0-9]+']);
        Route::post('/status', [ServiceCategoryCtrl::class, 'status']);
        Route::delete('/delete/{id}', [ServiceCategoryCtrl::class, 'destroy'])->where(['id' => '[0-9]+']);
        Route::post('/check/url', [ServiceCategoryCtrl::class, 'checkUrl']);
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'index']);
        Route::post('/update', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'update']);
    });

    Route::prefix('email-contact')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'EmailContact']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'status']);
        Route::post('/favourite', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'favourite']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'destroy'])->where(['id' => '[0-9]+']);
    });

    Route::prefix('about-us')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'index']);
        Route::post('/', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'update']);
        Route::get('/client', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'ourClient']);
        Route::post('/client/store', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'storeClient']);
        Route::put('/client/update/{id}', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'updateClient'])->where(['id' => '[0-9]+']);
        Route::delete('/client/delete/{id}', [\App\Http\Controllers\Webpanel\AboutUsCtrl::class, 'deleteClient'])->where(['id' => '[0-9]+']);
    });
    Route::prefix('user')->group(function () {
        Route::get('/profile', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'profile']);
        Route::get('/', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'addUser']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'statusUser']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'show'])->where(['id' => '[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'update'])->where(['id' => '[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\UserCtrl::class, 'destroy'])->where(['id' => '[0-9]+']);
    });

    Route::prefix('map')->group(function () {
        Route::put('/add', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'storeMap']);
        Route::get('/{id}', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'getMap'])->where(['id' => '[0-9]+']);
        Route::post('/{id}', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'updateMap'])->where(['id' => '[0-9]+']);
        Route::delete('/{id}', [\App\Http\Controllers\Webpanel\ContactCtrl::class, 'deleteMap'])->where(['id' => '[0-9]+']);
    });

    Route::prefix('menu')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\MenuCtrl::class, 'index']);
    });

    Route::prefix('consultant')->group(function () {
        Route::get('/', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'index']);
        Route::get('/add', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'addConsultant']);
        Route::post('/add', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'store']);
        Route::post('/status', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'statusConsultant']);
        Route::get('/update/{id}', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'show'])->where(['id' => '[0-9]+']);
        Route::post('/update/{id}', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'update'])->where(['id' => '[0-9]+']);
        Route::delete('/delete/{id}', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'destroy'])->where(['id' => '[0-9]+']);
        Route::post('/description', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'description']);
        Route::post('/check/url', [\App\Http\Controllers\Webpanel\ConsultantCtrl::class, 'checkUrl']);
    });

    Route::prefix('ma')->group(function () {
        Route::get('/', [maCtrl::class, 'index']);
        Route::get('/add', [maCtrl::class, 'add']);
        Route::post('/add', [maCtrl::class, 'store']);
        Route::post('/status', [maCtrl::class, 'status']);
        Route::get('/update/{type}/{id}', [maCtrl::class, 'show'])->where(['type' => '[0-9A-Za-zก-๙,.()!?"“”_-]+', 'id' => '[0-9]+']);
        Route::put('/update', [maCtrl::class, 'update'])->where(['type' => '[0-9A-Za-zก-๙,.()!?"“”_-]+', 'id' => '[0-9]+']);
        Route::delete('/delete/{type}/{id}', [maCtrl::class, 'destroy'])->where(['type' => '[0-9A-Za-zก-๙,.()!?"“”_-]+', 'id' => '[0-9]+']);
    });
});

Route::prefix('media')->group(function () {
    Route::get('/profile-images', [\App\Http\Controllers\Webpanel\MediaCtrl::class, 'profileImages']);
    Route::put('/image/upload', [\App\Http\Controllers\Webpanel\MediaCtrl::class, 'uploadImage']);
});
Route::get('login', [\App\Http\Controllers\Webpanel\AuthCtrl::class, 'index']);
Route::post('login', [\App\Http\Controllers\Webpanel\AuthCtrl::class, 'login']);
Route::get('logout', [\App\Http\Controllers\Webpanel\AuthCtrl::class, 'logout']);

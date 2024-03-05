<?php

use App\Helpers\StatClick;
use App\Http\Controllers\api\MaCtrl;
use App\Http\Controllers\api\StatClickCtrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//  Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('profile', [\App\Http\Controllers\api\AuthCtrl::class, 'profile']);
    Route::get('/logout', [\App\Http\Controllers\api\AuthCtrl::class, 'logout']);
    Route::get('/get/token', [\App\Http\Controllers\api\AuthCtrl::class, 'getToken']);
});

Route::post('login', [\App\Http\Controllers\api\AuthCtrl::class, 'login']);

Route::prefix('contact')->group(function () {
    // Route::post('sendemail', [\App\Http\Controllers\api\ContactCtrl::class, 'sendEmail']);
});

Route::prefix('get')->group(function () {
    Route::get('menu', [\App\Http\Controllers\api\MenuCtrl::class, 'get']);
});

Route::prefix('ma-filter')->group(function () {
    Route::get('/industry', [MaCtrl::class, 'getIndustry']);
    Route::get('/product/{id}', [MaCtrl::class, 'getProduct'])->where(['id' => '[0-9]+']);
});

Route::prefix('stats')->group(function () {
    Route::post('/', [StatClickCtrl::class, 'StoreVisitor']);
    Route::get('/', [StatClickCtrl::class, 'GetVisitor']);
});

<?php

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
Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::get('profile',[\App\Http\Controllers\Api\AuthCtrl::class,'profile']);
    Route::prefix('banner')->group(function(){
        Route::put('/',[\App\Http\Controllers\Api\BannerCtrl::class,'store']);
        Route::post('/{id}',[\App\Http\Controllers\Api\BannerCtrl::class,'update'])->where(['id'=>'[0-9]+']);
        Route::delete('/{id}',[\App\Http\Controllers\Api\BannerCtrl::class,'destroy'])->where(['id'=>'[0-9]+']);

    });
    Route::prefix('service')->group(function(){
        Route::put('/',[\App\Http\Controllers\Api\BannerCtrl::class,'store']);
        Route::post('/',[\App\Http\Controllers\Api\BannerCtrl::class,'update']);
        Route::delete('/{id}',[\App\Http\Controllers\Api\BannerCtrl::class,'delete'])->where(['id'=>'[0-9]+']);
    });
    Route::get('/logout',[\App\Http\Controllers\Api\AuthCtrl::class,'logout']);
    Route::get('/get/token',[\App\Http\Controllers\Api\AuthCtrl::class,'getToken']);
});

Route::post('login',[\App\Http\Controllers\Api\AuthCtrl::class,'login']);

// Public routes
Route::prefix('banner')->group(function(){

    Route::get('/',[\App\Http\Controllers\Api\BannerCtrl::class,'index']);
    Route::get('/{id}',[\App\Http\Controllers\Api\BannerCtrl::class,'get'])->where(['id'=>'[0-9]+']);
});
Route::prefix('service')->group(function(){

    Route::get('/',[\App\Http\Controllers\Api\ServiceCtrl::class,'index']);
    Route::get('/{id}',[\App\Http\Controllers\Api\ServiceCtrl::class,'get']);
    Route::get('/search',[\App\Http\Controllers\Api\ServiceCtrl::class,'search']);
});
Route::prefix('contact')->group(function(){

    Route::get('/get',[\App\Http\Controllers\Api\ContactCtrl::class,'get']);
    Route::get('/get/address',[\App\Http\Controllers\Api\ContactCtrl::class,'address']);
    Route::get('/get/map',[\App\Http\Controllers\Api\ContactCtrl::class,'map']);

    Route::post('sendemail',[\App\Http\Controllers\Api\ContactCtrl::class,'sendEmail']);
});

Route::prefix('get')->group(function(){
    Route::get('menu',[\App\Http\Controllers\Api\MenuCtrl::class,'get']);
});
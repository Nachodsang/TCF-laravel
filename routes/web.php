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
Route::get('/',[\App\Http\Controllers\HomeCtrl::class,'index']);
Route::get('/about',[\App\Http\Controllers\AboutCtrl::class,'index']);
Route::get('/service',[\App\Http\Controllers\ServiceCtrl::class,'index']);
Route::get('/service/{url}',[\App\Http\Controllers\ServiceCtrl::class,'detail']);
Route::get('/blog',[\App\Http\Controllers\BlogCtrl::class,'index']);
Route::get('/contact',[\App\Http\Controllers\ContactCtrl::class,'index']);


Route::get('clear/cache',function(){
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
});
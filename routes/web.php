<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;

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

Auth::routes();

//Route::get('/', function () {return view('welcome');});
route::group(['middelware' => 'auth'], function(){
    
    
    Route::get('/local', [LocalController::class, 'index']);

});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

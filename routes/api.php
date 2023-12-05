<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', funcion (){
    return view('welcome')
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin prefixs
Route::prefixs('admin')->group(funcion (){
    Route::get('/' [App\Http\Controllers\Admin\DasboardController::class, 'index']);
})

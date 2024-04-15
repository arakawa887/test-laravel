<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class,'index']);
Route::post('/',[TestController::class,'confirm']);
Route::post('/confirm',[TestController::class,'store']);
Route::get('/register', [TestController::class,'register']);
Route::middleware('auth')->group(function () {
Route::get('/admin', [TestController::class, 'admin']);
});
Route::get('/login',[TestController::class,'login']);
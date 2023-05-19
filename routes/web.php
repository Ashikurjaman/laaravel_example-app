<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Route::get("/home",[HomeController::class,'index']);
// Route::get("/sold/{name}/{age}",[HomeController::class,'sold']);
// Route::post('/sold',[HomeController::class,'sold']);
Route::get('/sold1',[HomeController::class,'sold1']);
Route::get('/sold2',[HomeController::class,'sold2']);

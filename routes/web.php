<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TaskController;


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

Route::get('/', [Controller::class,'index']);
Route::get('/contact',[Controller::class,'contact_us']);
Route::get('/about',[Controller::class,'about_us']);
Route::get('/services',[Controller::class,'services']);
Route::get('/mytasks',[TaskController::class,'mytasks']);

Route::resource('task',TaskController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::post("/check",[TaskController::class,'store'])->name('check');
Route::get('/admin',function(){
    return view("root");
});